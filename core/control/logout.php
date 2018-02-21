<?php

unset($_SESSION['userID']);
unset($_SESSION['userName']);
unset($_SESSION['userSurname']);
unset($_SESSION['userAge']);
unset($_SESSION['userEmail']);
unset($_SESSION['userPic']);
unset($_SESSION['userPicLarge']);
$_SESSION['toast-type'] = "error";
$_SESSION['toast-message'] = "Logout Completato";
header('location: ' . 'home')
?>