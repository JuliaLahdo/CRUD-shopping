<!-- Form -->       
<div class="orderInfo col-10 col-md-6 col-lg-8 text-center">       
        <h2>Slutför din order här:</h2>
        <form action="checkout.php" method="POST" id="checkout">
            <label for="name">Namn</label><br />
            <input type="text" name="name" /><br />
            <label for="address">Adress</label><br />
            <input type="text" name="address" /><br />
            <label for="postalcode">Postnummer</label><br />
            <input type="text" name="postalcode" /><br />
            <label for="city">Ort</label><br />
            <input type="text" name="city" /><br />
            <label for="phonenumber">Telefonnummer</label><br />
            <input type="text" name="phonenumber" /><br />
            <label for="email">E-postadress</label><br />
            <input type="text" name="email"/><hr>
            <input type="submit" value="Slutför"/>
        </form>
        
    

<?php /* If all form-inputs aren't filled in */
    if (isset($_GET["error"])){
        echo $_GET["error"];
    }
    ?>