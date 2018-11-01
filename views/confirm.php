<?php

session_start();

    include '../includes/head.php';
    include '../includes/functions.php';

?>

<section class="row">

<?php 
    include '../includes/confirmShoppingcart.php';
    include '../includes/confirmDeliveryAddress.php';
?>

</section>

<?php 
    include '../includes/footer.php';
?>
