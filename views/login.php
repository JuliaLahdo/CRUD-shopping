
<?php
session_start();

include '../includes/database_connection.php';

/* Setting variables to use in PDO-statements below */
$username = $_POST['username'];
$password = $_POST['password'];

$statement = $pdo->prepare("SELECT * FROM userInfo
  WHERE username = :username");

$statement->execute(
  [
    ":username" => $username
  ]
);

$fetched_user = $statement->fetch();

/* Compare posted password with database password for specific username */
$is_password_correct = password_verify($password, $fetched_user['password']);
if($is_password_correct){

    /* Setting sessions for username and userID */
    $_SESSION['username'] = $fetched_user['username'];
    $_SESSION['userID'] = $fetched_user['userID'];

    /* If all fields are correctly filled in */
    header('Location: ../index.php');
} else {

    /* If fields aren'y correctly filled in, please fill in all fields to continue login */
    header('Location: loginform.php?error=Var vänlig fyll i alla fält för att logga in');
}