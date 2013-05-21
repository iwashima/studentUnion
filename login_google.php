<?php

	include("./inc/app_tokens_google.inc.php");
	
	require_once 'google-api-php-client/src/Google_Client.php';
	require_once 'google-api-php-client/src/contrib/Google_PlusService.php';
	require_once 'google-api-php-client/src/contrib/Google_Oauth2Service.php';

	// Set your cached access token. Remember to replace $_SESSION with a
	// real database or memcached.
	session_start();

	$client = new Google_Client();
	$client->setApplicationName('Google+ PHP Starter Application');
	// Visit https://code.google.com/apis/console?api=plus to generate your
	// client id, client secret, and to register your redirect uri.
	$client->setClientId($clientID);
	$client->setClientSecret($clientSecret);
	$client->setRedirectUri("http://student.no-ip.org/StudentUnion/login_google.php");
	$client->setDeveloperKey('3034');
	$plus = new Google_PlusService($client);
	$oauth2 = new Google_Oauth2Service($client);
	
	if (isset($_GET['code'])) {
	
		$client->authenticate($_GET['code']);
		$_SESSION['token'] = $client->getAccessToken();
		$redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
		header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
		return;
  	}
	
	if (isset($_SESSION['token'])) {
	  $client->setAccessToken($_SESSION['token']);
	}
	
	if ($client->getAccessToken()) {

	  // We're not done yet. Remember to update the cached access token.
	  // Remember to replace $_SESSION with a real database or memcached.
		$_SESSION['token'] = $client->getAccessToken();
	  
		$user = $oauth2->userinfo->get();
	
		$_SESSION["logginTool"]="Google";
		$_SESSION["loggedIn"]=1;
		$_SESSION["username"]=$user['name'];
		$_SESSION["ID"] = $user['id'];
		  
		header('Location: index.php');

	} else {
	  $authUrl = $client->createAuthUrl();
	  header('Location: ' . $authUrl);
	}	
?> 