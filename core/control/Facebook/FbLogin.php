<?php

require_once FACEBOOK_DIR . 'autoload.php';


$fb = new Facebook\Facebook([
    'app_id' => '194721887735996', // Replace {app-id} with your app id
    'app_secret' => '5dee67685d453620e25f4235915d4290',
    'default_graph_version' => 'v2.10',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions =array(
    "scope"        => 'email,user_birthday');

$loginUrl = $helper->getLoginUrl('https://assunita.it/fb-callback', $permissions);

header("location: " . $loginUrl)
?>

