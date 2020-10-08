<?php
/*
./app/routeur.php
*/
  //route des users
  if (isset($_GET['categories'])):
    include_once '../app/routeurs/categories.php';
    
  elseif(isset($_GET['users'])):
    include_once '../app/routeurs/usersRouteur.php';


  endif;
