<?php
namespace App\Modeles\Categories;

function findAll(\PDO $connexion) {
  $sql = "SELECT cts.name, COUNT(pts.id) as nombrecat
          FROM categories cts
          JOIN posts pts ON cts.id=pts.categorie_id
          GROUP BY cts.id;";

  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC); // Tableau indexé de tableaux associatifs
}
