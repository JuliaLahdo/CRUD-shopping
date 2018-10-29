<?php
session_start();
    
/*$_SESSION['saveInputValue'] = [
    'KuddeLisaGrey' => $_POST['KuddeLisaGrey'], 
    'KuddeLisaPink' => $_POST['KuddeLisaPink'],
    'KuddeLisaBeige' => $_POST['KuddeLisaBeige'],
    'KuddeLisaGreen' => $_POST['KuddeLisaGreen'],
    'MattaKatjaGrey' => $_POST['MattaKatjaGrey'],
    'MattaKatjaPink' => $_POST['MattaKatjaPink'],
    'StolHelgEkBrown' => $_POST['StolHelgEkBrown'],
    'StolHelgEkBlack' => $_POST['StolHelgEkBlack'],
    'LampaKiaBlack' => $_POST['LampaKiaBlack'],
    'LampaKiaGold' => $_POST['LampaKiaGold'],
];*/

?>
  

<!DOCTYPE html>
<html lang="sv">

    <?php
    include 'head.php';
    include 'array.php'; 
    include 'function.php'; 
    include 'ifCheckout.php';
    include 'levAddCheckout.php';
    ?>
    
    </section>
    
    <!-- Session destroy when you push button -->
    <section class="text-center finishLink">
            <a href="redirect.php">Logga ut och återgå till startsidan</a>
    </section>
    
    <?php include 'footer.php' ?>


</body>

</html>
