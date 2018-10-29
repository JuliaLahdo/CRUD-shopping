<?php

/**
*NO HTML PLEASE!
*Mission: spara en användare i databasen
* 1. Hantera post variabler: $_POST
* 2. Koppling till databas: PDO
* 3. Spara användaren i databasen
*/

$pdo = new PDO(
    "mysql:host=localhost;dbname=galant;charset=utf8",
    "root",
    "root"
  );

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $personalID = $_POST['personalID'];
  $address = $_POST['address'];
  $postalcode = $_POST['postalcode'];
  $city = $_POST['city'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $statement = $pdo->prepare("INSERT INTO userInfo
    (firstName, lastName, personalID, address, postalcode, city, email, phone, username, password) 
    VALUES (:firstName, :lastName, :personalID, :address, :postalcode, :city, :email, :phone, :username, :password)");

  $statement->execute(
    [
      ":firstName" => $firstName,
      ":lastName" => $lastName,
      ":personalID" => $personalID,
      ":address" => $address,
      ":postalcode" => $postalcode,
      ":city" => $city,
      ":email" => $email,
      ":phone" => $phone,
      ":username" => $username,
      ":password" => $hashed_password
    ]
  );

  /* If input-field in form is empty, redirect to index.php and fill in all fields */ 
  if(empty($_POST["firstName"])){
      header('Location: /registerform.php?error=Du har inte fyllt i ditt förnamn, var vänlig fyll i alla fält');
  }else if(empty($_POST["lastName"])){
      header('Location: /registerform.php?error=Du har inte fyllt i ditt efternamn, var vänlig fyll i alla fält');
  }else if(empty($_POST["personalID"])){
      header('Location: /registerform.php?error=Du har inte fyllt i ditt personnummer, var vänlig fyll i alla fält');
  }else if(empty($_POST["address"])){
      header('Location: /registerform.php?error=Du har inte fyllt i din adress, var vänlig fyll i alla fält');
  }else if(empty($_POST["postalcode"])){
      header('Location: /registerform.php?error=Du har inte fyllt i ditt postnummer, var vänlig fyll i alla fält');
  }else if(empty($_POST["city"])){
      header('Location: /registerform.php?error=Du har inte fyllt i din ort, var vänlig fyll i alla fält');
  }else if(empty($_POST["email"])){
      header('Location: /registerform.php?error=Du har inte fyllt i din email, var vänlig fyll i alla fält');
  }else if(empty($_POST["phone"])){
      header('Location: /registerform.php?error=Du har inte fyllt i ditt mobilnummer, var vänlig fyll i alla fält');
  }else if(empty($_POST["username"])){
      header('Location: /registerform.php?error=Du har inte fyllt i ditt valda användarnamn, var vänlig fyll i alla fält');
  }else if(empty($_POST["password"])){
      header('Location: /registerform.php?error=Du har inte fyllt i ditt valda lösenord, var vänlig fyll i alla fält');
  }else
      header ('Location: index.php');
?>