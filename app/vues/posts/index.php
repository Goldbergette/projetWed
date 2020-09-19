<?php
?>

<?php foreach ($posts as $post): ?>
<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
        <a href="#" class="blog_item_date">
            <h3>15</h3>
            <p>Jan</p>
        </a>
    </div>

    <div class="blog_details">
        <a class="d-inline-block" href="single-blog.html">
            <h2><?php echo $post['title']; ?></h2>
        </a>
        <p>That dominion stars lights dominion divide years for fourth have don't stars is that
            he earth it first without heaven in place seed it second morning saying.</p>
        <ul class="blog-info-link">
            <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
        </ul>
    </div>
</article>
<?php endforeach; ?>
