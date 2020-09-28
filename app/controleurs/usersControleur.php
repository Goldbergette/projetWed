<?php


namespace App\Controleurs\Users;
  use \App\Modeles\Users;

  function loginFormAction () {
  

    GLOBAL $content;
    ob_start();
      include '../app/vues/users/loginForm.php';
    $content = ob_get_clean();
  }
