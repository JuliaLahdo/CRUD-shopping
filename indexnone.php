<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
   <header>
       <h4>Du är inloggad som <?= $_SESSION["username"]; ?></h4>
   </header>
   
   <a href="logout.php">Logga ut</a>
    
</body>
</html>