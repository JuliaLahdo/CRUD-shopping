<?php
session_start();

include '../includes/database_connection.php';
include '../includes/functions.php';

    /* Setting variables to use in PDO-statements below */
    $userID = $_SESSION['userID'];
    $product = $_POST['productName'];
    $price = $_POST['productPrice'];
    $amount = $_POST['productAmount'];

    $productStatement = $pdo->prepare("SELECT * FROM addToCart
        WHERE product = :product
        AND userID = :userID");

    $productStatement->execute([
        ":product" => $product,
        ":userID" => $userID
    ]);

    $existingProduct = $productStatement->fetch(PDO::FETCH_ASSOC);

    /* If product already exists in database: please update table amount for correct selected product, else: insert product into database */
    if($existingProduct){

        $newAmount = $amount + $existingProduct['amount'];

        $statement = $pdo->prepare("UPDATE addToCart SET amount = :amount
        WHERE selectedProductID = :selectedProductID");

        $statement->execute(
        [
        ":selectedProductID" => $existingProduct['selectedProductID'],
        ":amount" => $newAmount
        ]
        );

        header('Location: ../index.php');

        return;
    } else {
        $statement = $pdo->prepare("INSERT INTO addToCart (userID, product, price, amount) 
        VALUES(:userID, :product, :price, :amount)");

        $statement->execute(
        [
            ":userID" => $_SESSION['userID'],
            ":product" => $product,
            ":price" => $price,
            ":amount" => $amount
        ]
        );

    header('Location: ../index.php');
    }
?>