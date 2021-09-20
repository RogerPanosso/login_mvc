<?php
  /*
  * definição da class notfoundController contendo método(action) sendo responsavel
  * por obter controle a página(view) de erro interno perante aplicação
  */
  namespace App\Controllers;

  use App\Core\Controller;

  class notfoundController extends Controller {

    public function __construct() {
      parent::__construct();
    }

    public function index() {
      $this->loadView("404");
    }
  }
?>
