<?php
  /*
  * Definição da class Core(auxiliar) sendo responsavel por iniciar e startar estrutura MVC
  * dando inicio ao seu funcionamento bem como definindo estrutura de modo de escrita URL
  * amigavel para acessos perante aplicação. Portanto sendo responsavel por recuperar
  * dados perante o dominio raiz da aplicação como classController/metodos(actions)/parametros
  * para retornar resultado ao usuário final
  */
  namespace App\Core;

  class Core {

    public function __construct() {
      $this->run();
    }

    public function run() {
      if(isset($_REQUEST["url"]) and !empty($_REQUEST["url"]) and is_string($_REQUEST["url"])) {
        $url = $_REQUEST["url"];
      }

      if(!empty($url) and $url != "") {
        $url = explode("/", filter_var($url, FILTER_SANITIZE_URL));
        $controller = $url[0]."Controller";
        array_shift($url);

        if(isset($url[0]) and !empty($url[0]) and is_string($url[0])) {
          $method = $url[0];
          array_shift($url);
        }else {
          $method = "index";
        }

        $params = array();
        if(count($url) > 0) {
          $params = $url;
        }
      }else {
        $controller = "homeController";
        $method = "index";
        $params = array();
      }
      
      //define estrutura de namespace para carregamento automatico perante autoload
      $controller = "App\\Controllers\\".$controller;

      //define caminho exato(dir) contendo controllers de acessos perante aplicação
      $caminho_controller = "login_mvc/App/Controllers/".$controller.".php";

      //realiza verificação se controller acessado por usuário não é existente perante aplicação
      //setando controller padrão para erros internos ocorridos
      if(!file_exists($caminho_controller) and !method_exists($controller, $method)) {
        $controller = "App\\Controllers\\notfoundController";
        $method = "index";
        $params = array();
      }

      //realiza instancia do controller acessado por usuário acessando seu metodo(action) específica obtendo seus parametros
      $objeto_controller = new $controller();
      call_user_func_array(array($objeto_controller, $method), $params);
    }
  }
?>
