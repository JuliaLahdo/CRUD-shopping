<?php
include 'head.php'
?>

<?php

/**
*NO HTML PLEASE!
*Mission: spara en användare i databasen
* 1. Hantera post variabler: $_POST
* 2. Koppling till databas: PDO
* 3. Spara användaren i databasen
*/

$pdo = new PDO(
  "mysql:host=localhost;dbname=fed18;charset=utf8",
  "root",
  "root"
);

?>

<!-- Will post form to register.php -->
<h2>Register</h2>
   <form action="profile.php" name="form" method="POST">
      <input type="text" name="firstName" placeholder="Förnamn" id="registerFirstName">
      <input type="text" name="lastName" placeholder="Efternamn" id="registerLastName"><br>
      <input type="text" name="personalIdentityNumber" placeholder="ÅÅÅÅMMDDXXXX" id="registerPersonalIdentityNumber">
      <input type="text" name="address" placeholder="Adress" id="registerAddress"><br>
      <input type="text" name="postalCodeAndCity" placeholder="Postnummer & ort" id="registerPostalCodeAndCity">
      <input type="text" name="email" placeholder="E-post" id="registerEmail"><br>
      <input type="text" name="phoneNumber" placeholder="Mobil" id="registerPhoneNumber">
       <input type="text" name="username" placeholder="Användarnamn" id="registerUsername"><br>
       <input type="password" name="password" placeholder="Lösenord" id="registerPassword">
       <input type="password" name="passwordVerify" placeholder="Bekräfta lösenord" id="registerConfirmPassword"><br>
       <input type="submit" value="Slutför registrering">
   </form>
   
<?php /* If your passwords don't match */
    if (isset($_GET["error"])){
        echo "Lösenorden stämmer ej överens, försök igen";
    }
?>

<?php //if(registerPassword === registerConfirmPassword){}

// Lagra användarna i users
// :username :password är placeholders

//header ('Location: index.php');
    


?>