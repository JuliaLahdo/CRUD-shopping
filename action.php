<?php

$pdo = new PDO(
  "mysql:host=localhost;dbname=galant;charset=utf8",
  "root",
  "root"
);

var_dump($_POST);

$statement = $pdo->prepare(INSERT INTO products (product_name, price)) 
VALUES ("Kotte 2000", 10)

//header('Location: /index.php');

?>