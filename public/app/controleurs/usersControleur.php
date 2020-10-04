<?php


namespace App\Controleurs\Users;
  use \App\Modeles\User;

  function loginFormAction () {


    GLOBAL $content;
    ob_start();
      include '../app/vues/users/loginForm.php';
    $content = ob_get_clean();
  }

  function loginAction (\PDO $connexion){
    include '../app/modeles/usersModele.php';
    $user = User\findOneByLoginPwd($connexion, $_POST['login'], $_POST['password']);

    if($user):
      header('location:' . BASE_URL_ADMIN);
    else:
      header('location:' . BASE_URL_PUBLIC . 'users/login/form');
    endif;
  }
