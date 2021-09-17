<?php
  declare(strict_types=1);

  session_start();

  //requisita autoload para carregamento automatico de classes
  require "../autoload.php";

  //referencia namespace(dir) referente class Core
  use App\Core\Core;

  //realiza instancia class Core
  $core = new Core();
?>
