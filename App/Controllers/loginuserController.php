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

    public function logout() {
      if(isset($_SESSION["login"]) and !empty($_SESSION["login"])) {
        session_destroy();
        header("Location: http://localhost/login_mvc/home");
      }else {
        header("Location: http://localhost/login_mvc/loginuser");
      }
    }
  }
?>
