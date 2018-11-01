<?php

session_start();

include '../includes/database_connection.php';

/* This code will execute if you push ANY link when in checkout.php to delete the shoppingcart from the database */
$statement = $pdo->prepare("DELETE FROM addToCart 
WHERE userID = :userID");

$statement->execute([
":userID" => $_SESSION['userID']
]);

header('Location: ../index.php');  

?>