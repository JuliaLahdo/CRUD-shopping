
<?php
session_start();
/**
 * 1. Koppla upp till databasen
 * 2. Hämta användaren från databasen
 * 3. Kolla så att lösenordet i databasen
 *    stämmer överens med lösenordet
 *    som användaren har skrivit in i 
 *    formuläret: password_verify
 */

include 'includes/database_connection.php';

$username = $_POST["username"];
$password = $_POST["password"];

$statement = $pdo->prepare("SELECT * FROM userInfo
  WHERE username = :username");

$statement->execute(
  [
    ":username" => $username
  ]
);
// When select is used, fetch must happen
$fetched_user = $statement->fetch();
// 3. Compare
$is_password_correct = password_verify($password, $fetched_user["password"]);
if($is_password_correct){
  // Save user globally to session
  $_SESSION["username"] = $fetched_user["username"];
  $_SESSION["userID"] = $fetched_user["userID"];
  // Go back to frontpage
  header('Location: index.php');
} else {
  // Handle errors, go back to frontpage and populate $_GET
  header('Location: loginform.php?error=Var vänlig fyll i alla fält för att logga in');
}