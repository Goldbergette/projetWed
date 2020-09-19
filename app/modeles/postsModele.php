<?php
/*
./app/modeles/postsModele.php
*/

namespace App\Modeles\Posts;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM posts
          ORDER BY created_at DESC
          LIMIT 5;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
