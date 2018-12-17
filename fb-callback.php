<?php
session_start();
if(isset($_SESSION['data'])){
    header("Location: index.php");
}


require_once 'config.php';
try{
    $accessToken = $helper->getAccessToken();
} catch (\Facebook\Exceptions\FacebookResponseException $ex) {
    echo 'Response Exception: '.$ex->getMessage();
    exit();
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
    echo 'SDK Exception: '.$e->getMessage();
}

if(!$accessToken){
    header('Location: fb-login.php');
    exit();
}

$oAuth2Client=$fb->getOAuth2Client();
if(!$accessToken -> isLongLived()){
    $accessToken=$oAuth2Client->getLongLivesAccessToken();
}

$response=$fb->get("/me?fields=id,name,email,gender,picture,age_range,locale,timezone,updated_time,verified", $accessToken);
$userData=$response->getGraphNode()->asArray();
$_SESSION['data']=$userData;

header("Location: http://localhost/index.php");
