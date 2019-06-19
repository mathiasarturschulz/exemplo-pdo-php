<?php

spl_autoload_register(function ($nomeClasse) {
  if (file_exists("classes".DIRECTORY_SEPARATOR.$nomeClasse.".class.php"))
    require_once("classes".DIRECTORY_SEPARATOR.$nomeClasse.".class.php");
});

spl_autoload_register(function ($nomeClasse) {
  if (file_exists("dao".DIRECTORY_SEPARATOR.$nomeClasse.".class.php"))
    require_once("dao".DIRECTORY_SEPARATOR.$nomeClasse.".class.php");
});

spl_autoload_register(function ($nomeClasse) {
  if (file_exists("conexao".DIRECTORY_SEPARATOR.$nomeClasse.".class.php"))
    require_once("conexao".DIRECTORY_SEPARATOR.$nomeClasse.".class.php");
});

?>
