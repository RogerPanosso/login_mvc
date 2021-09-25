<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Login MVC"/>
    <meta name="author" content="Roger Panosso"/>
    <meta name="keywords" content="Login MVC"/>
    <title>Login MVC</title>
    <link rel="stylesheet" href="http://localhost/login_mvc/Public/Bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://localhost/login_mvc/Public/Bootstrap/css/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" href="http://localhost/login_mvc/Public/Assets/css/style.css"/>
    <link rel="stylesheet" href="http://localhost/login_mvc/Public/Fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="http://localhost/login_mvc/Public/Fontawesome/css/fontawesome.min.css"/>
  </head>
  <body>
    <article>
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="http://localhost/login_mvc/home">Login MVC</a>
            </div>
            <button type="button" class="navbar-toggler btn btn-default" data-toggle="collapse" data-target="#NavbarMenu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="NavbarMenu">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/login_mvc/home">
                    <i class="fa fa-home"></i><span class="nav-link-text ml-1">Home</span>
                  </a>
                </li>
                <?php
                  //realiza verificação se sessão de login de usuário está setada e valida
                  if(isset($_SESSION["login"]) and !empty($_SESSION["login"])) {
                ?>
                <span class="navbar-text text-success">
                  <?=$_SESSION["login"]["nome"];?> seu login foi realizado com sucesso agora você podera obter acesso perante tais funcionalidades...
                </span>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#ModalLogout">
                    <i class="fa fa-power-off"></i><span class="nav-link-text ml-1">Sair</span>
                  </a>
                </li>
                <?php
                  }else {
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/login_mvc/cadastrouser">
                    <i class="fa fa-plus-square"></i><span class="nav-link-text ml-1">Cadastre-se</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/login_mvc/loginuser">
                    <i class="fas fa-sign-in-alt"></i><span class="nav-link-text ml-1">Fazer Login</span>
                  </a>
                </li>
                <?php
                  }
                ?>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!---------------------------------------------------->
      <?=$this->loadViewInTemplate($nomeView, $dados);?>
      <!---------------------------------------------------->
      <footer>
      </footer>
    </article>
    <script src="http://localhost/login_mvc/Public/jquery/jquery.min.js"></script>
    <script src="http://localhost/login_mvc/Public/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/login_mvc/Public/Assets/js/script.js"></script>
    <script src="http://localhost/login_mvc/Public/Fontawesome/js/all.min.js"></script>
    <script src="http://localhost/login_mvc/Public/Fontawesome/js/fontawesome.min.js"></script>
    <!-- Início modal logout -->
    <div class="modal fade" id="ModalLogout" tabindex="-1" role="dialog" aria-labelledby="MyModal">
      <div class="modal-dialog shadow-sm" role="document">
        <div class="modal-content">
          <div class="modal-header bg-light">
            <h5 class="modal-title mb-0">Encerrar Sessão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
              <span aria-hidden="true">&times</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-md-12 order-1">
                  <small class="text-muted mb-0">
                    <?=$_SESSION["login"]["nome"];?> tem certeza de que deseja ecerrar sua sessão atual de login ?
                  </small>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer bg-light">
            <a class="btn btn-primary" href="http://localhost/login_mvc/loginuser/logout">Sim</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim modal logout -->
  </body>
</html>
