<?php
/*
./app/vues/template/partials/category_widget.php
 ?>

*/
 ?>
 <aside class="single_sidebar_widget post_category_widget">
     <h4 class="widget_title">Category</h4>
     <?php
      include_once '../app/controleurs/categoriesControleur.php';
      \App\Controleurs\Categories\indexAction($connexion);
           ?>
 </aside>
