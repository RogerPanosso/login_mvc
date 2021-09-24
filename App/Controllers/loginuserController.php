<?php
  /*
  * Definição da class loginuserController contendo metodos(actions) sendo responsavel
  * por obter controle á página(view) de login de usuário
  */
  namespace App\Controllers;

  use App\Core\Controller;
  use App\Models\Usuarios;

  class loginuserController extends Controller {

    public function __construct() {
      parent::__construct();
    }

    public function index() {
      $this->loadTemplate("login_user");
    }
  }
?>
