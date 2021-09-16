<?php
  /*
  * Definição de autoload para carregamento automatico de classes apartir de seus diretorios especificos
  * utilizando padrão de projeto PSR-4(carregamento automatico)
  */
  spl_autoload_register(function($class){
    $diretorio_base = __DIR__."/".str_replace("\\","/",$class.".php");
    if(file_exists($diretorio_base)) {
      require $diretorio_base;
      return true;
    }else {
      return false;
    }
  });
?>
