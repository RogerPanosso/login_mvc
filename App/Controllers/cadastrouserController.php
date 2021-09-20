<?php
  /*
  * Definição da class cadastrouserController contendo metodos(actions) sendo responsavel
  * por obter controle á página(view) de cadastro de usuário
  */
  namespace App\Controllers;

  use App\Core\Controller;

  class cadastrouserController extends Controller {

    public function __construct() {
      parent::__construct();
    }

    public function index() {
      $this->loadTemplate("cadastro_user");
    }
  }
?>
