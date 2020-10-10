<?php
 ?>

 <h1>Modification d'un enregistrement</h1>

 <div>
   <a href="categories">Retour aux catégories</a>
 </div>
  <form  action="categories/edit/<?php echo $categories['id']; ?>" method="post" class="edit">
    <div>
      <label for="name">Titre</label>
      <input type="text" name="name" id="name" value="<?php echo $categories['name']; ?>">
    </div>
       <div>
      <input type="submit">
    </div>
  </form>
