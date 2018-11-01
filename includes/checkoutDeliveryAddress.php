<section class="card text-center col-10 col-md-4 col-lg-4">
            <h3>Leveransadress</h3>

                <?php

                    include 'database_connection.php'; 

                    /* Setting variable to use in PDO-statements below */
                    $userID = $_SESSION['userID'];

                    /* Fetching chosen values to display deliveryaddress and contact information below */
                    $statement = $pdo->prepare("SELECT firstName, lastName, address, postalcode, city, email, phone 
                    FROM userInfo 
                    WHERE userID = :userID");

                    $statement->execute(
                    [
                        ":userID" => $userID
                    ]
                    );

                    $allUserInfo = $statement->fetchAll(PDO::FETCH_ASSOC);

                    /* Looping through and showing chosen values to display deliveryaddress and contact information from reaching out to database above */
                    foreach ($allUserInfo as $userInfo){
                        echo "<p>" . $userInfo['firstName'] . " ";
                        echo $userInfo['lastName'] . " <br> ";
                        echo $userInfo['address'] . " <br> ";
                        echo $userInfo['postalcode'] . " ";
                        echo $userInfo['city'] . " <br> <br> ";
                        echo "Email (för bekräftelse av köp): " . $userInfo['email'] . " <br> ";
                        echo "Mobilnummer (för leveransbekräftelse): " . $userInfo ['phone'] . " <br> ";?>
                        <br>
                    <?php } ?> </p>
                    <a type="button" href="deleteCart.php">Avsluta och återgå till startsidan</a> 
        </section>