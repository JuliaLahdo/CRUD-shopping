<section class="card text-center col-10 col-md-4 col-lg-4">
        <h2>Kundkorg</h2>

            <?php

            if(isset($_GET["error"])){
                echo "<p class='error'>Du måste lägga till en vara i din varukorg för att slutföra din order!</p>";
            }

            include 'database_connection.php'; 

            /* Setting variable to use in PDO-statements below */
            $userID = $_SESSION['userID'];

            /* Fetching added products and its values (price and amount) to display in shopping cart for chosen userID below */

            $statement = $pdo->prepare("SELECT product, price, amount 
            FROM addToCart 
            WHERE userID = :userID");

            $statement->execute(
            [
                ":userID" => $userID
            ]
            );

            $shoppingCart = $statement->fetchAll(PDO::FETCH_ASSOC);

            $sum = 0;

            /* Looping through and showing shoppingcart, showing products with correct prices from reaching out to database above */
            foreach ($shoppingCart as $cart){
                $sum += $cart['amount'] * reducedPrice($cart['price']);
                echo "<p>" . $cart['amount'] . " st ";
                echo $cart['product'] . " för ";
                echo reducedPrice($cart['price']) . " kr/st. Totalt:  ";
                echo reducedPrice(($cart['price']) * ($cart['amount'])) . " kr ";?>
                <a href="deleteProduct.php?remove=<?=$cart['product']?>"><i class="fas fa-trash-alt"></i></a><br>
            <?php } ?></p>

            <p><b>Totalsumma:</b> <?= $sum; ?> SEK</p>

            <br>
            <b><i><p>Är du redo att slutföra din order?</p></i></b>
            <i class="fas fa-arrow-circle-down"></i>
            <br>

            <a type="button" href="<?php if(count($shoppingCart) == 0){
                    echo "?error";
                    }else{
                    echo '../views/checkout.php';}  ?>"><b>Genomför beställning</b></a>

    </section>