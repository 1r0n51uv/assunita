<?php

define('ROOT_DIR', dirname(__FILE__));
define('DOMINIO_SITO', '');
define('CORE_DIR', ROOT_DIR . '/core/');
define('VIEW_DIR', CORE_DIR . 'view/');
define('RANDOM_DIR', CORE_DIR . 'view/random/');
define('MODEL_DIR', CORE_DIR . 'model/');
define('BEANS_DIR', CORE_DIR . 'beans/');
define('CONTROL_DIR', CORE_DIR . 'control/');
define('STYLE_DIR', DOMINIO_SITO . '/core/style/');
define('UPLOADS_DIR', 'core/uploaded/');
define('IMG_DIR', DOMINIO_SITO .'/img/');
define('UTILS_DIR', CORE_DIR . 'utils/');
define('LIBRARY_DIR', CORE_DIR . 'library/');
define('FACEBOOK_DIR', CONTROL_DIR . '/Facebook/');
define('NEW_DIR', CORE_DIR . 'view/new/');

/*
 * URL Parsing, in pratica qualsiasi richiesta al sito arriva a questo file,
 * e quindi possiamo ricavare la richiesta da $_SERVER['SCRIPT_NAME']
 *
 * Successivamente rimuovo tutto ciò che non dovrebbe stare nella richiesta e faccio split
 *
 */
$_URL = preg_replace("/^(.*?)index.php$/", "$1", $_SERVER['SCRIPT_NAME']);
$_URL = preg_replace("/^" . preg_quote($_URL, "/") . "/", "", urldecode($_SERVER['REQUEST_URI']));
$_URL = preg_replace("/(\/?)(\?.*)?$/", "", $_URL);
$_URL = explode("/", $_URL);
if (preg_match("/^index.(?:html|php)$/i", $_URL[count($_URL) - 1]))
    unset($_URL[count($_URL) - 1]);
// definisco costante IP contenente l'ip del client
if (isset($_SERVER['HTTP_X_REAL_IP'])) {
    define('IP', $_SERVER['HTTP_X_REAL_IP']);
} else {
    define('IP', $_SERVER['REMOTE_ADDR']);
}
session_start(); //facciamo partire la sessione

if (!defined("TESTING")) {
    switch (isset($_URL[0]) ? $_URL[0] : '') {

        //VIEW
        case 'template':
            include_once VIEW_DIR . "template.php";
            break;
        case '':
            include_once VIEW_DIR . "home.php";
            break;
        case 'home':
            include_once VIEW_DIR . "home.php";
            break;
        case 'login':
            include_once VIEW_DIR . "login.php";
            break;
        case 'loginLoader':
            include_once VIEW_DIR . "loginLoader.php";
            break;
        case 'about':
            include_once VIEW_DIR . "about.php";
            break;
        case 'registration':
            include_once VIEW_DIR . "registration.php";
            break;

        //Facebook
        case 'autoload':
            include_once FACEBOOK_DIR . "autoload.php";
            break;
        case 'facebook':
            include_once FACEBOOK_DIR . "Facebook.php";
            break;
        case 'loginFB':
            include_once FACEBOOK_DIR . "FbLogin.php";
            break;
        case 'fb-callback':
            include_once FACEBOOK_DIR . "Fb-callback.php";
            break;

        //Control
        case 'logout':
            include_once CONTROL_DIR . "logout.php";
            break;
        case 'logoutSecond':
            include_once CONTROL_DIR . "logoutSecond.php";
            break;
        case 'regControl':
            include_once CONTROL_DIR . "registrationControl.php";
            break;
        case 'loginControl':
            include_once CONTROL_DIR . "loginByEmailControl.php";
            break;
        default:
            include_once VIEW_DIR ."404.php";
            break;
    }



}

