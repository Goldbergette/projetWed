<?php

namespace App\Controleurs\Categories;
use \App\Modeles\Categories;

function indexAction(\PDO $connexion){
  include_once '../app/modeles/categoriesModele.php';
  $categories = Categories\findAll($connexion);

GLOBAL $content;
ob_start();
include '../app/vues/categories/index.php';
$content=ob_get_clean();
}
//------------------------------------------------------------
function addFormAction(){
  GLOBAL $content;
  ob_start();
   include '../app/vues/categories/addForm.php';
  $content=ob_get_clean();
}
//----------------------------------------------------------------
function addAction(\PDO $connexion, array $data = null){
  include_once '../app/modeles/categoriesModele.php';
  $id = Categories\insert($connexion, $data);

  header('location: ' . BASE_URL_ADMIN .  'categories');
}
//-----------------------------------------------------------------
function deleteAction(\PDO $connexion, int $id){
  include_once '../app/modeles/categoriesModele.php';
  $return= Categories\delete($connexion, $id);

    header('location: ' . BASE_URL_ADMIN .  'categories');
}
//----------------------------------------------------------------
function editFormAction(\PDO $connexion, int $id){
  include_once '../app/modeles/categoriesModele.php';
  $categories=Categories\findOneById($connexion, $id);

  GLOBAL $content;
  ob_start();
  include '../app/vues/categories/editForm.php';
  $content= ob_get_clean();
}
//------------------------------------------------------------------
function editAction(\PDO $connexion, array $data = null ){
  include_once '../app/modeles/categoriesModele.php';
  $return = Categories\update($connexion, $data);

  header('location: ' . BASE_URL_ADMIN . 'categories');
}
