<?php

define("MY_INC_CODE", 1);

session_start();

require('./twitteroauth/twitteroauth.php');

require('./inc/app_tokens_twitter.inc.php');

if(!empty($_GET['oauth_verifier']) && !empty($_SESSION['oauth_token']) && !empty($_SESSION['oauth_token_secret'])){  

	$twitteroauth = new TwitterOAuth($customer_key, $customer_secret, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);  

	$access_token = $twitteroauth->getAccessToken($_GET['oauth_verifier']); 

	$_SESSION["logginTool"]="Twitter";
    $_SESSION["loggedIn"]=1;
	$_SESSION["username"]=$access_token['screen_name'];
	$_SESSION["ID"] = $access_token['user_id'];
	
	header("Location: index.php");
} else {  
	// Something's missing, go back to square 1  
	header('Location: index.php');  
}  

?>