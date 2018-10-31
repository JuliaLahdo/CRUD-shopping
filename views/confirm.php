<?php

session_start();

    include '../includes/head.php';
    include '../includes/functions.php';

?>
<section class="row">
    <section class="card text-center col-10 col-md-4 col-lg-4">
        <h2>Kundkorg</h2>

            <?php

            include '../includes/database_connection.php'; 

            /* Setting variable to use in PDO-statements below */
            $userID = $_SESSION["userID"];

            /* Fetching added products and its values (price and amount) to display in shopping cart for chosen userID below */

            $statement = $pdo->prepare("SELECT product, price, amount FROM addToCart WHERE userID = :userID");

            $statement->execute(
            [
                ":userID" => $userID
            ]
            );

            $shoppingCart = $statement->fetchAll(PDO::FETCH_ASSOC);
            $sum = 0;

            /* Looping through and showing shoppingcart, showing products from reaching out to database above */
            foreach ($shoppingCart as $cart){
                $sum += $cart["amount"] * reducedPrice($cart["price"]);
                echo "<p>" . $cart["amount"] . " st ";
                echo $cart["product"] . " för ";
                echo reducedPrice($cart["price"]) . " kr/st. Totalt:  ";
                echo reducedPrice(($cart["price"]) * ($cart["amount"])) . " kr ";?>
                <a href="deleteProduct.php?remove=<?=$cart['product']?>"><i class="fas fa-trash-alt"></i></a><br>
            <?php } ?></p>

            <p><b>Totalsumma:</b> <?= $sum; ?> SEK</p>
  
        <p>Är du redo att slutföra din order?</p>
        <a type="button" href="checkout.php">Genomför beställning</a>

    </section>

    <section class="card text-center col-10 col-md-4 col-lg-4">
        
        <h2>Leveransadress</h2>

            <?php

            include '../includes/database_connection.php'; 

            /* Setting variable to use in PDO-statements below */
            $userID = $_SESSION["userID"];

            /* Fetching chosen values to display deliveryaddress and contact information below */
            $statement = $pdo->prepare("SELECT firstName, lastName, address, postalcode, city, email, phone FROM userInfo WHERE userID = :userID");

            $statement->execute(
            [
                ":userID" => $userID
            ]
            );

            $allUserInfo = $statement->fetchAll(PDO::FETCH_ASSOC);

            /* Looping through and showing chosed values to display deliveryaddress and contact information from reaching out to database above */
            foreach ($allUserInfo as $userInfo){
                echo "<p>" . $userInfo ["firstName"] . " ";
                echo $userInfo ["lastName"] . " <br> ";
                echo $userInfo ["address"] . " <br> ";
                echo $userInfo ["postalcode"] . " ";
                echo $userInfo ["city"] . " <br> <br> ";
                echo "Email (för bekräftelse av köp): " . $userInfo["email"] . " <br> ";
                echo "Mobilnummer (för leveransbekräftelse): " . $userInfo ["phone"] . " <br> ";?>
                <br>
            <?php } ?> </p>

        </section>

    </section>

<?php 
    include '../includes/footer.php';
?>
