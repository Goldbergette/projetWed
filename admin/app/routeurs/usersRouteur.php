<?php


use \App\Controleurs\Users;
include_once '../app/controleurs/usersControleur.php';

switch ($_GET['users']):
  case 'logout':
  //LOGOUT
  //PATTERN: /index.php?users=logout
  //CTRL: usersControleur
  //ACTION: logout
  Users\logoutAction();
   break;
endswitch;
