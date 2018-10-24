<?php /* If input-field in form is empty, redirect to index.php and fill in all fields */ 
  /*if(empty($_POST["name"])){
      header('Location: /index.php?error=Du har inte fyllt i namn, var vänlig fyll i alla fält');
  }else if(empty($_POST["address"])){
      header('Location: /index.php?error=Du har inte fyllt i din adress, var vänlig fyll i alla fält');
  }else if(empty($_POST["postalcode"])){
      header('Location: /index.php?error=Du har inte fyllt i ditt postnummer, var vänlig fyll i alla fält');
  }else if(empty($_POST["city"])){
      header('Location: /index.php?error=Du har inte fyllt i din ort, var vänlig fyll i alla fält');
  }else if(empty($_POST["phonenumber"])){
      header('Location: /index.php?error=Du har inte fyllt i ditt telefonnummer, var vänlig fyll i alla fält');
  }else if(empty($_POST["email"])){
      header('Location: /index.php?error=Du har inte fyllt i din email, var vänlig fyll i alla fält');
  }else*/{ 
   ?>
    <section class="row">
        <section class="card text-center col-10 col-md-4 col-lg-4">
            <h2>Tack för din beställning!</h2>


        <?php 
    
        $prodCount = 0; /* Variable for counting how many products in total at checkout */
        $priceTotal = 0; /* Variable for counting what the total pricesum is of the number of products added in checkout */
    
        foreach($_POST as $prodName => $productAmount) {
            /* If productAmount is greater than 0 & that the named variables exist, take the sum of function reducedPrice * $productAmount and print this */
            if ($productAmount > 0 && array_key_exists($prodName, $products)) {
                $rowSum = reducedPrice($products[$prodName]['price']) * $productAmount;
                print ('<p>'.$productAmount.'st '.$products[$prodName]['name'].' för '.reducedPrice($products[$prodName]['price']).'kr/st. Totalt: '.$rowSum.'kr</p>');

                /* $prodCount = $prodCount + $productAmount;
                * $priceTotal = priceTotal + $rowSum; */
                $prodCount += $productAmount;
                $priceTotal +=  $rowSum;
            }
        }
    ?>
    
    <section class="totals">
        <p>Du har beställt: <?= $prodCount ?>st produkter</p> <!-- echoing out sum of $prodCount and sum of $priceTotal -->
        <p>Totalsumma: <?= $priceTotal ?>kr</p>
    </section>
</section>

        <?php };
?>