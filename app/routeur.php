<?php
/*
./app/routeur.php

ROUTE PAR DEFAUT: liste des posts (les 5 derniers)
    PATTERN: /
    CTRL: postsControleur
    ACTION: index
      > Affichage des 5 derniers posts


*/


if (isset($_GET['postID'])):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\showAction($connexion, $_GET['postID']);

  elseif(isset($_GET['users'])):
    include_once '../app/routeurs/usersRouteur.php';

else:
include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);
endif;
