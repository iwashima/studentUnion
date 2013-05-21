<?php 

	define("MY_INC_CODE", 1);
	
	session_start();
	
	include ("./inc/config.inc.php");
	include ("./inc/db.inc.php");
	
	
	$username = preg_replace('#[^a-z]#', '', $_POST["username"]);
	$password = $_POST["password"];
	
	$sql = "SELECT id, name, surname FROM tbl_users WHERE tbl_users.username = \"$username\" AND tbl_users.password = \"$password\";";

	$result = mysql_query($sql);

	if (! $result) {

		die('Could not query:' . mysql_error());

	}	

	if( mysql_num_rows($result) == 0 ){
								
		header('Location: login.php?err=101');
				
	}
	
	else {
	
		$resultItem = mysql_fetch_row($result);
		
		$_SESSION["logginTool"]="Database";
		$_SESSION["loggedIn"]=1;
		$_SESSION["username"]=$resultItem[1]." ".$resultItem[2];
		$_SESSION["ID"] = $resultItem[0];
		  
		header('Location: index.php');

	}
	
	print_r($_SESSION);
?>