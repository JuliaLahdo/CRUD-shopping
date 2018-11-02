<?php
    include '../includes/head.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logga in</title>
</head>
<body>

<!-- Form for login -->
<div class="card text-center col-12 col-md-5 col-lg-4">
    <h2>Logga in</h2>
        <form action="login.php" method="POST">
            <label for="username">Användarnamn</label><br>
            <input type="text" name="username" placeholder="Användarnamn"><br>
            <label for="password">Lösenord</label><br>
            <input type="password" name="password" placeholder="Lösenord"><br>
            <input type="submit" value="Logga in">
        </form>
    <a href="registerform.php">Inte medlem än? Bli medlem här!</a>

<?php /* If all form-inputs aren't filled in */
    if (isset($_GET["error"])){
        echo "<p class='error'>" . $_GET["error"] . "</p>";
    }
?>
    
</div>

</body>
</html>