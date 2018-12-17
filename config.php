<?php
require_once 'Facebook/autoload.php';
$fb=new \Facebook\Facebook([
   'app_id' => '1795864157090496',
    'app_secret' => '46fa576d99d49d09207e3201c0e15883',
    'default_graph_version' => 'v2.10'
]);

$helper=$fb->getRedirectLoginHelper();
?>