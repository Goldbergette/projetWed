<?php


namespace App\Controleurs\Users;
  use \App\Modeles\User;

  function dashboardAction (\PDO $connexion) {


    GLOBAL $content;
    ob_start();
      include '../app/vues/users/dashboard.php';
    $content = ob_get_clean();
  }
