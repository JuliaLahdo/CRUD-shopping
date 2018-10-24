<main class="row text-center">
<?php 
    
    $date = date("l"); /* Picks out correct day automatically according to calendar */
    
    include 'function.php';
    

foreach($products as $product): /* Looping through array.php, images, product name, reduced price after function.php, colors avaliable and inputfield with set session */
    
    ?>
       
        <div class="card col-10 col-md-5 col-lg-4">
            <img src="<?= $product['image']; ?>"/> <!-- Looping through $product['image'] in array.php -->
            <h3>
                <?= $product['name']; ?> <!-- Looping through $product['name'] in array.php -->
            </h3>
            <p>
                <?= reducedPrice($product['price']); ?> kr <!-- Looping through $product['price'] in array.php -->
            </p>
            <p>
                <?= $product['colors']; ?> <!-- Looping through $product['colors'] in array.php -->
            </p>
            <p>
                <input class='howManyDoYouWant' type='number' name='<?= $product['input']; ?>' placeholder='Antal' value='<?= $_SESSION['saveInputValue'][$product['input']]; ?>' form='checkout'/> <!-- Looping through input-fields of each product in array.php, while saving in a session -->
            </p>
            <form action="action.php" method="POST" id="checkout">
                <button type="submit"><i class="fas fa-shopping-basket"></i></button>
            </form>    
            
        </div>
        <?php endforeach; ?>

    </main>