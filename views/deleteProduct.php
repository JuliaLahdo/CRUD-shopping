<?php

session_start();

include '../includes/database_connection.php';

/* Go through this code if you push delete product in confirm.php, meaning delete specific product from addToCart table from specific userID */
    if(isset($_GET["remove"])){
        $product = $_GET["remove"];

        $statement = $pdo->prepare("DELETE FROM addToCart 
        WHERE product = :product 
        AND userID = :userID");
        
        $statement->execute([
            ":product"  => $product,
            ":userID" => $_SESSION['userID']
        ]);

        header('Location: confirm.php');
    }    

?>