<?php

session_start();

include 'head.php'

/**
    * 1. Koppla upp till databasen
    * 2. Hämta användaren från databasen
    * 3. Kolla så att lösenordet i databasen
    *       stämmer överens med lösenordet som 
    *        användaren har skrivit in i 
    *        formuläret: password_verify
    *
    *
    */

// 1. Koppla upp till databasen (gör en include)

?>
<h2>Login</h2>
   <form action="login.php" method="POST">
       <input type="text" name="username" placeholder="Användarnamn">
       <input type="password" name="password" placeholder="Lösenord">
       <input type="submit" value="Logga in">
   </form>
   
   <a href="register.php">Inte medlem än? Bli medlem här!</a>
   
<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=galant;charset=utf8",
    "root",
    "root"
);

if(isset($_POST["username"])){
$username = $_POST["username"];
$password = $_POST ["password"];

//
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// No white space between $pdo and prepare
$statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$statement->execute(
[
    ":username" => $username
]
);

// 2. Hämta användare från databasen

$fetchedUser = $statement->fetch();

// 3. Compare

$isPasswordCorrect = password_verify($password, $fetchedUser["password"]);


if($isPasswordCorrect){
    // Save user globally to session
    $_SESSION["username"] = $fetchedUser["username"];
    header('Location: index.php'); // VART DU NU VILL GÅ
} else {
    // Handle errors
    header('Location: login.php?login_failed=true'); // VART DU NU VILL GÅ
}
    
}    
?>