<?php
  /*
  * Definição da class homeController sendo controller padrão de acesso perante aplicação
  * contendo metodos(actions) sendo responsavel por obter controle á página(view) home
  */
  namespace App\Controllers;

  use App\Core\Controller;

  class homeController extends Controller {

    public function __construct() {
      parent::__construct();
    }

    public function index() {
      $this->loadTemplate("home");
    }
  }
?>
