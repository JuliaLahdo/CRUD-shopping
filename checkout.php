<?php
    //include 'register.php';
    include 'includes/head.php';
    include 'includes/database_connection.php';
?>

<section class="card text-center col-10 col-md-4 col-lg-4">
            <h3>Leveransadress:</h3> <!-- Fills in the form-inputs to add upp your deliveryaddress and show on checkout.php -->
            <p>

            <?php 
                $statement = $pdo->prepare("SELECT firstName, lastName, address, postalcode, city, email, phone FROM userInfo WHERE username = :username");
                
                $statement->execute();
                //And fetch every row that it returns. $products is now an Associative array
                $products = $statement->fetchAll(PDO::FETCH_ASSOC);

            ?>
                <?php /*$_POST['firstName'] ?><br>
                <?= $_POST['lastName'] ?><br>
                <?= $_POST['address'] ?>
                <?= $_POST['postalcode'] ?>
                <?= $_POST['city'] ?><br>
                Telefonnummer (för leveransbekräftelse):
                <?= $_POST['phone'] ?><br>
                E-postadress (beställningsbekräftelse):
                <?= $_POST['email']  */
                ?>
            <p><b>Tack,
                    <?= $_SESSION["username"] ?> för att du handlar hos oss!<br />
                    Vi hoppas att se dig snart igen,<br />
                    / Varma hälsningar,
                    <i>gänget på galant.</i></b></p>

        </section>