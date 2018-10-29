<main class="row text-center">
<?php 
    
    $date = date("l"); /* Picks out correct day automatically according to calendar */
    
    include 'functions.php';
    

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
                <!-- Looping through input-fields of each product in array.php, while saving in a session -->
            </p>
            <form action="addToCart.php" method="POST" name="addToCart" id="addToCart">
                <input class='howManyDoYouWant' type='number' name='productAmount' placeholder='Antal' value='<?= $_SESSION['saveInputValue'][$product['input']]; ?>'/>
                <input type="hidden" name='userID' value="<?= $_SESSION["userID"] ?>">
                <input type="hidden" name='productPrice' value="<?= $product['price']; ?>">
                <input type="hidden" name='productName' value="<?= $product['name']; ?>">
                <?php if(isset($_SESSION["username"])){?>
                    <button type="submit"><i class="fas fa-shopping-basket"></i></button>
                    <?php
                } else {?>
                    <a href="<?= 'loginform.php'; ?> "><i class="fas fa-user"></i></a>
                <?php } ?>
                </form>

            
        </div>
        <?php endforeach; ?>

    </main>