<?php
  /*
  * Definição da class ajaxcadastrouserController contendo metodos(actions) sendo
  * responsavel por tratar dados recebidos da requisição interna ajax e obter retorno
  */
  namespace App\Controllers;

  use App\Core\Controller;
  use App\Models\Usuarios;

  class ajaxcadastrouserController extends Controller {

    public function __construct() {
      parent::__construct();
    }

    public function salvarCadastro() {
      $usuario = new Usuarios();
      $dados = array();
      $nome = trim(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING));
      $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
      $senha = trim(filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING));
      $data_nascimento = trim(filter_input(INPUT_POST, "data_nascimento", FILTER_SANITIZE_STRING));
      if($nome == true and $email == true and $data_nascimento == true) {
        if(isset($senha) and !empty($senha)) {
          $hash_senha = password_hash($senha, PASSWORD_DEFAULT);
        }else {
          //realiza manipulação sobre data de nascimneto para ser assumida como senha de usuário
          $data_nascimento_senha = str_replace("/", "", date("d/m/Y", strtotime($data_nascimento)));
          $hash_senha = password_hash($data_nascimento_senha, PASSWORD_DEFAULT);
        }

        if($usuario->salvarCadastro($nome, $email, $hash_senha, $data_nascimento) == true) {
          $dados["retorno"] = "Cadastro de usuário realizado com sucesso. Faça seu login";
          $this->loadView("success_cadastro", $dados);
        }else {
          $dados["retorno"] = "Cadastro de usuário já realizado e valido para login";
          $this->loadView("error_cadastro", $dados);
        }
      }
    }
  }
?>
