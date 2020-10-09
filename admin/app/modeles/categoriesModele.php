<?php
namespace App\Modeles\Categories;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM categories
          ORDER BY name ASC;";

  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function insert(\PDO $connexion, array $data=null){
  $sql = "INSERT INTO categories
          SET name = :name;";

$rs = $connexion->prepare($sql);
$rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);

$rs->execute();
return $connexion->lastInsertId();
}

function delete(\PDO $connexion, int $id){
  $sql = "DELETE FROM categories
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return intval($rs->execute()); //intval pour forcer à avoir 0 ou 1 comme réponse

}
