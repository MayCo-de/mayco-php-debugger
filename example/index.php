<?php
  $rootpath = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once $rootpath.'/mayco-php-debugger/main.php';
  Debugg::log("log");
  Debugg::warn("warnung");
  Debugg::error("error");
  
  Debugg::time("zeit");
  Debugg::trace();
  TIMER -> start();
  TIMER -> print();
  TIMER -> print();
  TIMER -> end();
?>
