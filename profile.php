<?php
    session_start();
    include 'head.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
   
<?php
        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $postalCodeAndCity = $_POST['postalCodeAndCity'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $personalIdentityNumber = $_POST['personalIdentityNumber'];
     
        
    if($_POST["password"] !== $_POST["passwordVerify"]){
    header('Location: /register.php?error=Lösenorden stämmer inte överens, försök igen');
} else {?>
        <div class="card col-12 col-md-6 col-lg-4 text-center">
           <h2>Dina uppgifter</h2>
            <?= $_POST['firstName'] ?>
            <?= $_POST['lastName'] ?><br>
            <?= $_POST['address'] ?>
            <?= $_POST['postalCodeAndCity'] ?><br>
            Telefonnummer (för leveransbekräftelse):
            <?= $_POST['phoneNumber'] ?><br>
            E-postadress (beställningsbekräftelse):
            <?= $_POST['email'];?>
<?php } 


/*if(isset($_POST["username"])){*/
$username = $_POST["username"];
$password = $_POST["password"];
    $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $postalCodeAndCity = $_POST['postalCodeAndCity'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $personalIdentityNumber = $_POST['personalIdentityNumber'];

//$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
$pdo = new PDO(
"mysql:host=localhost;dbname=galant;charset=utf8",
"root",
"root"
);

// firstName, lastName, personalIdentityNumber, address, postalCodeAndCity, email, phoneNumber
// , :personalIdentityNumber, :address, :postalCodeAndCity, :email, :phoneNumber
// No white space between $pdo and prepare
$statement = $pdo->prepare(
    "INSERT INTO userLogin
    (username, password, email, phoneNumber, firstName, lastName, personalIdentityNumber, postalCodeAndCity, address) 
    VALUES (:username, :password, :email, :phoneNumber, :firstName, :lastName, :personalIdentityNumber, :postalCodeAndCity, :address)");
    
$statement->execute(
[
    ":firstName" => $firstName,
    ":lastName" => $lastName,
    ":personalIdentityNumber" => $personalIdentityNumber,
    ":address" => $address,
    ":postalCodeAndCity" => $postalCodeAndCity,
    ":email" => $email,
    ":phoneNumber" => $phoneNumber,
    ":username" => $username,
    ":password" => $password
]
);

/*}*/
            ?>
       </div>
    
</body>
</html>