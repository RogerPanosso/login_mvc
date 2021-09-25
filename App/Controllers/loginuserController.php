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

    public function login() {
      $usuario = new Usuarios();
      $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
      $senha = trim(filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING));
      if($email == true and $senha == true) {
        if($usuario->login($email, $senha) == true) {
          header("Location: http://localhost/login_mvc/home");
          return true;
        }else {
          echo "<script>window.alert('E-Mail ou Senha invalidos para login')</script>";
          echo "<script>window.history.back()</script>";
          return false;
        }
      }
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
