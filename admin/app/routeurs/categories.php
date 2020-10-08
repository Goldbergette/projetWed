<?php

//ROUTES DES CATEGORIES

use \App\Controleurs\Categories;
include_once '../app/controleurs/categoriesControleur.php';

switch ($_GET['categories']):
  case 'index':
  //LISTE DES CATEGORIES
  //PATTERN: /index.php?categories=index
  //CTRL: categoriesControleur
  //Action: index
  Categories\indexAction($connexion);
  break;
endswitch;
