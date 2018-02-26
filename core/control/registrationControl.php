<?php

include_once MODEL_DIR . 'UserManager.php';
include_once BEANS_DIR . 'User.php';


if (isset($_POST['Name']) && $_POST['Name'] != null) {
    $name = $_POST['Name'];
} else {

}

if (isset($_POST['Surname']) && $_POST['Surname'] != null) {
    $surname = $_POST['Surname'];
}

if (isset($_POST['Email']) && $_POST['Email'] != null) {
    $email = $_POST['Email'];
}

if (isset($_POST['Nascita']) && $_POST['Nascita'] != null) {
    $birth = $_POST['Nascita'];
}

if (isset($_POST['Pass']) && $_POST['Pass'] != null) {
    $pass = $_POST['Pass'];
}


$userManager = new UserManager();

if ($userManager->checkByEmail($email) == 0) {
    if ($userManager->insertUserByForm($name, $surname, $email, $birth, $pass) == 0) {

        $_SESSION['toast-type'] = "success";
        $_SESSION['toast-message'] = "Registrazione completata";
        header("location: " . 'home');

    } else {

        echo "a mare";
    }

} else {
    $_SESSION['toast-type'] = "error";
    $_SESSION['toast-message'] = "Email esistente";
    header("location: " . 'registration');
}




