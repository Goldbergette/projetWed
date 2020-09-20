<?php
/*
    ./postsControleur.php
    CTRL des produits

    */
namespace App\Controleurs\Posts;
      use \App\Modeles\Posts;

function indexAction(\PDO $connexion){
  include_once '../app/modeles/postsModele.php';
  $posts = Posts\findAll($connexion);


        GLOBAL $content;

        ob_start();
          include '../app/vues/posts/index.php';
        $content = ob_get_clean();
    }

function showAction(\PDO $connexion, int $id){
  include_once '../app/modeles/postsModele.php';
  $post=Posts\findOneById($connexion, $id);

    GLOBAL $content;

    ob_start();
    include '../app/vues/posts/show.php';
    $content=ob_get_clean();
}
