<?php



include_once '../app/controleurs/usersControleur.php';

switch ($_GET['users']):
  case 'loginForm':
    // FOMULAIRE DE CONNEXION AU BACKOFFICE
    // PATTERN: ?users=loginForm
    // CTRL: usersControleur
    // ACTION: loginForm
    \App\Controleurs\Users\loginFormAction();
    break;
endswitch;
