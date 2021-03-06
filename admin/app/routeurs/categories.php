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

  case 'addForm':
  //AJOUT CATEGORIES
  //PATTERN: /index.php?categories=addForm
  //CTRL: categoriesControleur
  //Action: addForm
  Categories\addFormAction();
  break;

  case 'add':
  //INSERT CATEGORIES
  //PATTERN: /index.php?categories=add
  //CTRL: categoriesControleur
  //ACTION: add
  Categories\addAction($connexion, [
    'name' => $_POST['name']
  ]);
  break;

  case 'delete':
  //DELETE CATEGORIES
  //PATTERN: /index.php?categories=delete&id=x
  //CTRL: categoriesControleur
  //ACTION: delete
  Categories\deleteAction($connexion, $_GET['id']);
  break;

  case 'editForm':
  //EDITION CATEGORIES
  //PATTERN: /index.php?categories=editForm&id=x
  //CTRL: categoriesControleur
  //ACTION: editForm
  Categories\editFormAction($connexion, $_GET['id']);
  break;

  case 'edit':
  //UPDATE CATEGORIES
  //PATTERN: /index.php?categories=edit&id=x
  //CTRL: categoriesControleur
  //ACTION: edit
  Categories\editAction($connexion, [
    'id'=> $_GET['id'],
    'name'=> $_POST['name']
  ]);
  break;

endswitch;
