<?php
  /*
  * Definição da class ConnectMysql estabelecendo conexão com servidor de banco de dados
  * MySQL através da class PDO(object) utilizando padrão de projeto criacional Singleton
  * contendo instancia única de objeto perante a aplicação sendo disponibilizada uma
  * única instancia sendo ocorrida no contexto interno a propria classe através de um
  * método estatico
  */
  namespace App\Config;

  class ConnectMysql {
    private static ?\PDO $instancePdo = null;

    private function __construct(){}
    private function __destruct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstancePdo() : \PDO {
      if(!isset(self::$instancePdo) and self::$instancePdo === null) {
        require "Config.php";
        self::$instancePdo = new \PDO($config["dbdriver"].":dbname=".$config["dbname"].";host=".$config["dbhost"], $config["dbuser"], $config["dbpass"]);
        self::$instancePdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        self::$instancePdo->setAttribute(\PDO::ATTR_ORACLE_NULLS, \PDO::NULL_EMPTY_STRING);
      }
      //caso já exista uma instancia(objeto) PDO criada e armazenada em atributo estatico somente retorno
      return self::$instancePdo;
    }
  }
?>
