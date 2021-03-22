<?php
require_once 'vendor/autoload.php';
if (!session_id())
{
    session_start();
}
$facebook = new \Facebook\Facebook([
  'app_id'      => '1563985527128441',
  'app_secret'     => 'ee7125f96924634c241b0d8003738be2',
  'default_graph_version'  => 'v10.0'
]);
$facebook_output = '';
$facebook_helper = $facebook->getRedirectLoginHelper();

if(isset($_GET['code'])){
 if(isset($_SESSION['access_token'])){
  $access_token = $_SESSION['access_token'];
 }else{
  $access_token = $facebook_helper->getAccessToken();

  $_SESSION['access_token'] = $access_token;

  $facebook->setDefaultAccessToken($_SESSION['access_token']);
 }

 $_SESSION['user_name'] = '';
 $_SESSION['user_email_address'] = '';

 $graph_response = $facebook->get("/me?fields=name,email", $access_token);

 $facebook_user_info = $graph_response->getGraphUser();

 if(!empty($facebook_user_info['name'])){
  $_SESSION['user_name'] = $facebook_user_info['name'];
 }

 if(!empty($facebook_user_info['email'])){
  $_SESSION['user_email_address'] = $facebook_user_info['email'];
 }
 
}else{
 // Get login url
    $facebook_permissions = ['email']; // Optional permissions

    $facebook_login_url = $facebook_helper->getLoginUrl('https://localhost/facebook-login/', $facebook_permissions);
    
    // Render Facebook login button
    $facebook_login_url = '<div align="center"><button class="btn"><a href="'.$facebook_login_url.'"><img class="ic-facebook" src="https://image.flaticon.com/icons/svg/174/174848.svg">Login with Facebook</button></a></div>';
}
?>