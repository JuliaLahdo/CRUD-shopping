<?php

session_start();

    include 'includes/head.php';

?>
<section class="row">
    <section class="card text-center col-10 col-md-4 col-lg-4">
        <h1>Kundkorg</h1>

            <?php

            include 'includes/database_connection.php'; 

            $userID = $_SESSION["userID"];

            $statement = $pdo->prepare("SELECT product, price, amount FROM addToCart WHERE userID = :userID");

            $statement->execute(
            [
                ":userID" => $userID
            ]
            );

            $shoppingCart = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($shoppingCart as $cart){
                echo $cart ["amount"] . " st ";
                echo $cart["product"] . " ";
                echo $cart ["price"] . " kr/st";
                echo "<br>";
            }?>

<?php 
        /*$prodCount = 0;*/ /* Variable for counting how many products in total at checkout */
        /*$priceTotal = 0;*/ /* Variable for counting what the total pricesum is of the number of products added in checkout */
    
        /*foreach($_POST as $prodName => $productAmount) {*/
            /* If productAmount is greater than 0 & that the named variables exist, take the sum of function reducedPrice * $productAmount and print this */
            /*if ($productAmount > 0 && array_key_exists($prodName, $products)) {
                $rowSum = reducedPrice($products[$prodName]['price']) * $productAmount;
                print ('<p>'.$productAmount.'st '.$products[$prodName]['name'].' för '.reducedPrice($products[$prodName]['price']).'kr/st. Totalt: '.$rowSum.'kr</p>');*/

                /* $prodCount = $prodCount + $productAmount;
                * $priceTotal = priceTotal + $rowSum; */
                /*$prodCount += $productAmount;
                $priceTotal +=  $rowSum;
            }
        }*/
?>
  
        <p>Är du redo att slutföra din order?</p>
        <a type="button" href="confirm.php">BESTÄLL</a>

    </section>
</section>