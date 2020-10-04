<?php  ?>

<div class="single-post">
   <div class="feature-img">
      <img class="img-fluid" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
   </div>
   <div class="blog_details">
      <h2><?php echo $post['title']; ?>
      </h2>
      <ul class="blog-info-link mt-3 mb-4">
         <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
      </ul>
      <p class="excert">
         <?php echo $post['content']; ?>
      </p>

   </div>
</div>
