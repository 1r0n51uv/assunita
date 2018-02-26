<?php

include_once MODEL_DIR . "UserManager";
include_once BEANS_DIR . "User.php";

echo "pp";


if ((isset($_POST['Email']) && $_POST['Email'] != null) && (isset($_POST['Pass']) && $_POST['Pass'] != null)) {

    $email = $_POST['Email'];
    $pass = $_POST['Pass'];


$manager = new UserManager();

$utente = $manager->loginForm($email, $pass);

$_SESSION['user'] = serialize($utente);
$_SESSION['toast-type'] = "error";
$_SESSION['toast-message'] = "Bentornato " . $utente->getNome();
header("location: " . 'home');


}