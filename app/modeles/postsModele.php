<?php
/*
./app/modeles/postsModele.php
*/

namespace App\Modeles\Posts;

function findAll(\PDO $connexion) {
  $sql = "SELECT id, title, created_at, image, SUBSTR(content, 1, 100) as resum,
          DATE_FORMAT(created_at, '%b') as mois
          FROM posts
          ORDER BY created_at DESC
          LIMIT 5;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
