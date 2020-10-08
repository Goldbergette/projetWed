<?php


namespace App\Controleurs\Users;
  use \App\Modeles\User;



  function logoutAction(){
    unset($_SESSION['user']);

    header('location:' . BASE_URL_PUBLIC);
  }
