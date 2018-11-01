<?php

session_start();

    include '../includes/checkouthead.php';
    include '../includes/functions.php';

?>

<section class="row justify-content-between">
    <h2 class="col-12 text-center">Tack för din beställning!</h2>
        
        <?php
            include '../includes/checkoutOrdered.php';
            include '../includes/checkoutDeliveryAddress.php';
        ?>

</section>

<?php 
    include '../includes/footer.php';
?>