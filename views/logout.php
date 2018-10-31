<?php

/* Session destroy when you push logout-button on checkout (you will be logged out) */
session_start();

session_destroy();

header('Location: ../index.php');

?>