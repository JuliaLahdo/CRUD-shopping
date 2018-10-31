<?php
    include '../includes/head.php'
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- Will post form to register.php -->
<div class="card text-center col-12 col-md-5 col-lg-4">
    <h2>Register</h2>
        <form action="register.php" method="POST">
            <label for="firstname">Förnamn</label><br>
            <input type="text" name="firstName" placeholder="Förnamn" id="registerFirstName"><br>
            <label for="lastname">Efternamn</label><br>
            <input type="text" name="lastName" placeholder="Efternamn" id="registerLastName"><br>
            <label for="personalID">Personnummer</label><br>
            <input type="text" name="personalID" placeholder="ÅÅÅÅMMDD-XXXX" id="registerPersonalID"><br>
            <label for="address">Adress</label><br>
            <input type="text" name="address" placeholder="Adress" id="registerAddress"><br>
            <label for="postalcode">Postnummer</label><br>
            <input type="text" name="postalcode" placeholder="Postnummer" id="registerPostalcode"><br>
            <label for="city">Ort</label><br>
            <input type="text" name="city" placeholder="Ort" id="registerCity"><br>
            <label for="email">E-post</label><br>
            <input type="text" name="email" placeholder="E-post" id="registerEmail"><br>
            <label for="phone">Mobil</label><br>
            <input type="text" name="phone" placeholder="Mobil" id="registerPhone"><br>
            <label for="username">Användarnamn</label><br>
            <input type="text" name="username" placeholder="Användarnamn" id="registerUsername"><br>
            <label for="password">Lösenord</label><br>
            <input type="password" name="password" placeholder="Lösenord" id="registerPassword"><br>
            <input type="submit" name="submit" value="Slutför registrering">
        </form>

        <?php /* If all form-inputs aren't filled in */
    if (isset($_GET["error"])){
        echo $_GET["error"];
    }
?>
        </div>
 
</body>
</html>

