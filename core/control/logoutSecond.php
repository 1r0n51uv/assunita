<?php

unset($_SESSION['user']);

$_SESSION['toast-type'] = "error";
$_SESSION['toast-message'] = "Logout Completato";
header('location: ' . 'home')
?>