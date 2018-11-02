<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Google Fonts Dosis -->
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

    <!-- Linking to CSS-sheet -->
    <link rel="stylesheet" href="/css/style.css" type="text/css">

    <title>galant</title>

</head>
<body>

    <div class="container-fluid">

        <header role="banner">
    <!-- Navbar start -->
            <nav class="navbar fixed-top" role="navigation">
               
                <ul class="col-4 nav-item dropdown">
                    <li>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MENY
                        </a>
                        <div class="dropdown-menu menu_dropdown" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Allt för hemmet</a>
                            <a class="dropdown-item" href="#">Om oss</a>
                            <a class="dropdown-item" href="#">Våra butiker</a>
                            <a class="dropdown-item" href="#">Kontakt</a>
                        </div>
                    </li>
                </ul>

                <div class="col-4 headerLogo">
                    <a href="../views/deleteCart.php"><h1>galant</h1></a></div>
    
                <div class="col-3 userLogo">         
                    <a href="../views/deleteCart.php"><i class="fas fa-user"></i></a>
                </div>  

                <div class="col-1 shoppingBag">
                    <a href="../views/deleteCart.php"><i class="fas fa-shopping-basket"></i></a>
                </div>

                <?php if (isset($_SESSION['username'])){ ?>
                        <p>Du är inloggad som <b><?= $_SESSION['username']; ?></b></p>
                          
                <?php } ?>


            </nav> <!-- End of navbar -->

        </header>