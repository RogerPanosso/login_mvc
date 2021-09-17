<?php
  /*
  * Definição da class Controller(auxiliar) sendo uma class base para ser herdada perante
  * seus controllers de acessos a aplicação requisitando resultado final ao usuário de
  * acordo com seus acessos.
  */
  namespace App\Core;

  class Controller {
    protected array $dados;

    public function __construct() {
      $this->dados = array();
    }

    public function loadTemplate(string $nomeView, array $dados = array()) {
      $this->dados = $dados; //atribui ao atributo(dados)
      require "../App/Views/Parcial/template.php";
    }

    public function loadViewInTemplate(string $nomeView, array $dados = array()) {
      extract($dados); //or extract($this->dados) tornando indices associativos(array) em variaveis com seus respectivos dados
      require "../App/Views/Pages/".$nomeView.".php";
    }

    public function loadView(string $nomeView, array $dados = array()) {
      extract($dados); //or extract($this->dados) tornando indices associativos(array) em variaveis com seus respectivos dados
      require "../App/Views/Pages/".$nomeView.".php";
    }
  }
?>
