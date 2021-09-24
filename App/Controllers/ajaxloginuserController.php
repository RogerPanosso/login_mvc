<?php
  /*
  * Definição da class ajaxloginuserController contendo métodos(actions) sendo responsavel
  * por tratar dados perante requisição interna ajax realizada e obter retorno
  */
  namespace App\Controllers;

  use App\Core\Controller;
  use App\Models\Usuarios;

  class ajaxloginuserController extends Controller {

    public function __construct() {
      parent::__construct();
    }

    public function login() {
      $usuario = new Usuarios();
      $dados = array();
      $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
      $senha = trim(filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING));
      if($email == true and $senha == true) {
        if($usuario->login($email, $senha) == true) {
          header("Location: http://localhost/login_mvc/home/");
        }else {
          $dados["retorno"] = "E-Mail ou Senha invalidos para login";
          $this->loadView("error_login", $dados);
        }
      }
    }
  }
?>
