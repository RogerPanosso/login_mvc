<?php
  /*
  * Definição do arquivo de Config(configurações) estabelecendo dados em array associativo
  * para obter conexão a servidor de banco de dados de acordo com ambiente de desenvolvimento
  * utilizado
  */
  require_once "Environment.php";

  $config = array();

  if(ENVIRONMENT == "development") {
    $config["dbdriver"] = "mysql";
    $config["dbname"] = "projeto_login_mvc";
    $config["dbhost"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
  }else {
    /* dados para conexão perante servidor externo */
    $config["dbdriver"] = "mysql";
    $config["dbname"] = "projeto_login_mvc";
    $config["dbhost"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
  }
?>
