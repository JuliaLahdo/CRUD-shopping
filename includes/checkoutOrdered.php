<section class="card text-center col-10 col-md-4 col-lg-4">
            <h3>Din beställning:</h3>

                <?php

                    include 'database_connection.php'; 
                    /* Setting variable to use in PDO-statements below */
                    $userID = $_SESSION['userID'];
                    
                    /* Fetching added products and its values (price and amount) to display ordered products for chosen userID below */
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

                    /* Looping through and showing ordered products, showing products with correct prices from reaching out to database above */
                    foreach ($shoppingCart as $cart){
                        $sum += $cart['amount'] * reducedPrice($cart['price']);
                        echo "<p>" . $cart['amount'] . " st ";
                        echo $cart['product'] . " för ";
                        echo reducedPrice($cart['price']) . " kr/st. Totalt:  ";
                        echo reducedPrice(($cart['price']) * ($cart['amount'])) . " kr ";?>
                    <?php } ?></p>
                    <p><b>Totalsumma:</b> <?= $sum; ?> SEK</p>
                    <p><i>Din order skickas från vårt lager inom 1-2 arbetsdagar.</i></p>
        </section>