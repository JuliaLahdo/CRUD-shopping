<?php /* Session destroy when you push avsluta-button on checkout */
session_start();

session_destroy();

header('Location: index.php');

?>