<?php
/*
./app/routeur.php

ROUTE PAR DEFAUT: liste des posts (les 5 derniers)
    PATTERN: /
    CTRL: postsControleur
    ACTION: index
      > Affichage des 5 derniers posts


*/

include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);
