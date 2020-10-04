<?php  ?>

<ul class="list cat-list">
  <?php foreach ($categories as $categorie): ?>
    <li>
        <a href="#" class="d-flex">
            <p><?php echo $categorie['name']; ?></p>
            <p>(<?php echo $categorie['nombrecat']; ?>)</p>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
