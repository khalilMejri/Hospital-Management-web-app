<?php
session_start();
unset($_SESSION['user']);

unset($_SESSION['passwd']);
$_SESSION = array();
session_destroy();

header("Location:login.php");
?>
