<?php
/*
./app/vues/template/partials/main.php
 ?>

*/
 ?>
 <section class="blog_area section-padding">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 mb-5 mb-lg-0">
                 <div class="blog_left_sidebar">
                    <?php echo $content; ?>

                     <nav class="blog-pagination justify-content-center d-flex">
                         <ul class="pagination">
                             <li class="page-item">
                                 <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
                             </li>
                         </ul>
                     </nav>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="blog_right_sidebar">
                     <?php include_once '../app/vues/template/partials/_search_widget.php'; ?>

                     <?php include_once '../app/vues/template/partials/_category_widget.php'; ?>

                     <?php include_once '../app/vues/template/partials/_tags_widget.php'; ?>

                     <?php include_once '../app/vues/template/partials/_newsletter_widget.php'; ?>
                 </div>
             </div>
         </div>
     </div>
 </section>
