<section class="card text-center col-10 col-md-4 col-lg-4">
            <h3>Leveransadress:</h3> <!-- Fills in the form-inputs to add upp your deliveryaddress and show on checkout.php -->
            <p>
                <?= $_POST['firstName'] ?><br>
                <?= $_POST['lastName'] ?><br>
                <?= $_POST['postalCodeAndCity'] ?>
                <?= $_POST['postalCodeAndCity'] ?><br>
                Telefonnummer (för leveransbekräftelse):
                <?= $_POST['phoneNumber'] ?><br>
                E-postadress (beställningsbekräftelse):
                <?= $_POST['email'] ?>
            </p>

            <p><b>Tack,
                    <?= $_SESSION["username"] ?> för att du handlar hos oss!<br />
                    Vi hoppas att se dig snart igen,<br />
                    / Varma hälsningar,
                    <i>gänget på galant.</i></b></p>

        </section>