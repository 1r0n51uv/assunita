<?php



require_once FACEBOOK_DIR . 'autoload.php';


$fb = new Facebook\Facebook([
    'app_id' => '194721887735996', // Replace {app-id} with your app id
    'app_secret' => '5dee67685d453620e25f4235915d4290',
    'default_graph_version' => 'v2.10',
]);

$helper = $fb->getRedirectLoginHelper();
$_SESSION['FBRLH_state']=$_GET['state'];
try {
    $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (! isset($accessToken)) {
    if ($helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo "Error: " . $helper->getError() . "\n";
        echo "Error Code: " . $helper->getErrorCode() . "\n";
        echo "Error Reason: " . $helper->getErrorReason() . "\n";
        echo "Error Description: " . $helper->getErrorDescription() . "\n";
    } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request';
    }
    exit;
}

// Logged in
//echo '<h3>Access Token</h3>';
//var_dump($accessToken->getValue());

// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
//echo '<h3>Metadata</h3>';
//var_dump($tokenMetadata);

// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId('194721887735996'); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();

if (! $accessToken->isLongLived()) {
    // Exchanges a short-lived access token for a long-lived one
    try {
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        //echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
        exit;
    }

    //echo '<h3>Long-lived</h3>';
    //var_dump($accessToken->getValue());
}

$_SESSION['fb_access_token'] = (string) $accessToken;

// User is logged in with a long-lived access token.
// You can redirect them to a members-only page.
//header('Location: https://example.com/members.php');

try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=id,first_name,middle_name,last_name,email,birthday,picture', $accessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    //echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    //echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

$user = $response->getGraphUser();

$id = $user['id'];
$name = $user['first_name'] . ' ' . $user['middle_name'];
$surname = $user['last_name'];
$email = $user['email'];
$age = $user['birthday'];
$picturelarge = "https://graph.facebook.com/" . $id ."/picture?type=large";
$picture = "https://graph.facebook.com/" . $id ."/picture?type=small";

$BIRTH_YEAR = date_format($age, 'Y');
$date = new DateTime();
$CURRENT_YEAR = date_format($date, 'Y');
$age = $CURRENT_YEAR - $BIRTH_YEAR;

$_SESSION['userID'] = $id;
$_SESSION['userName'] = serialize($name);
$_SESSION['userSurname'] = serialize($surname);
$_SESSION['userAge'] = serialize($age);
$_SESSION['userEmail'] = serialize($email);
$_SESSION['userPic'] = serialize($picture);
$_SESSION['userPicLarge'] = serialize($picturelarge);


$_SESSION['toast-type'] = "success";
$_SESSION['toast-message'] = "Bentornato " . $name;
header("location: " . 'home');

//include VIEW_DIR . "loginLoader.php";


?>


