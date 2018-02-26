<?php

include_once MODEL_DIR . 'UserManager.php';
include_once BEANS_DIR . "User.php";


if ((isset($_POST['Email']) && $_POST['Email'] != null) && (isset($_POST['Pass']) && $_POST['Pass'] != null)) {

    $email = $_POST['Email'];
    $pass = $_POST['Pass'];


    $userManager = new UserManager();

    $utente = $userManager->loginForm($email, $pass);

    if ($utente != null) {
        $_SESSION['user'] = serialize($utente);
        $_SESSION['toast-type'] = "success";
        $_SESSION['toast-message'] = "Bentornato " . $utente->getNome();
        header("location: " . 'home');

    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Email/Password errata";
        header("location: " . 'login');
    }



} else {
    echo "non va";
}