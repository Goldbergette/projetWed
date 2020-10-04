<?php



include_once '../app/controleurs/usersControleur.php';

switch ($_GET['users']):
  case 'loginForm':
    // FORMULAIRE DE CONNEXION
    // PATTERN: ?users=loginForm
    // CTRL: usersControleur
    // ACTION: loginForm
    \App\Controleurs\Users\loginFormAction();
    break;

  case 'login':
  // CONNEXION
  // PATTERN: ?users=login
  // CTRL: usersControleur
  // ACTION: login
    \App\Controleurs\Users\loginAction($connexion,[
    'login' => $_POST['login'],
   'password'=>$_POST['password']
 ]);
   break;
endswitch;
