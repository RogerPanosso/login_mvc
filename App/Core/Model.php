<?php
  /*
  * Definição da class Model(auxiliar) sendo uma classe base a ser herdada perante seus models
  * de acessos aos dados perante banco de dados ao tratar regras de negócios perante aplicação.
  */
  namespace App\Core;

  use App\Config\ConnectMysql;

  class Model {
    protected object $pdo;

    public function __construct() {
      $this->pdo = ConnectMysql::getInstancePdo();
    }
  }
?>
