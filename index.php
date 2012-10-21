<?php
session_start();

const CLIENT_ID     = 'Es9QaLX5PI';
const CLIENT_SECRET = 'b1Z5FY6TNBjGG2le1vzNIhKSuQR21nTdEP0dJWaAMVy8Z2ss';

const REDIRECT_URI           = 'http://144.202.202.165/SLC/index.php';
const AUTHORIZATION_ENDPOINT = 'https://api.sandbox.slcedu.org/api/oauth/authorize';
const TOKEN_ENDPOINT         = 'https://api.sandbox.slcedu.org/api/oauth/token';

// If the session verification code is not set, redirect to the SLC Sandbox authorization endpoint
if (!isset($_GET['code'])) {
  $url = 'https://api.sandbox.slcedu.org/api/oauth/authorize?client_id=' . CLIENT_ID . '&redirect_uri=' . REDIRECT_URI;
header('Location: ' . $url);
    die('Redirect'); 
} else {
	    
$url = 'https://api.sandbox.slcedu.org/api/oauth/token?client_id=' . CLIENT_ID . '&client_secret=' . CLIENT_SECRET . '&grant_type=authorization_code&redirect_uri='.REDIRECT_URI.'&code='. $_GET['code'];

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_VERBOSE, true); // Display communication with server
curl_setopt($ch, CURLOPT_HEADER, 'Content-Type: application/vnd.slc+json');
curl_setopt($ch, CURLOPT_HEADER, 'Accept: application/vnd.slc+json');

echo $url;

//execute post
$result = curl_exec($ch);

echo "<br /><br />";
print_r($result);
//print_r(curl_getinfo($ch));  
//close connection
curl_close($ch);

// de-serialize the result into an object
$result = json_decode($result);


//echo  $result->access_token;
// set the session with the access_token and verification code
$_SESSION['access_token'] = $result->access_token;

$_SESSION['code'] = $_GET['code'];

// redirect to the start page of the application
header('Location: ' . 'district.php');
}
?>
