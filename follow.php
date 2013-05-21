<!DOCTYPE html>

<?php 

	session_start(); 
	
	define("MY_INC_CODE", 1);
	
?>

<html>
	<head>
		<title>Student Union</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css"             media="screen">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		
		<!-- Customised CSS -->
		<link href="css/custom.css"        rel="stylesheet" media="screen" type="text/css">
		
		<script src="js/su.js" type="text/javascript"></script>

	</head>
	
	<body>
		<div class="container">
			<!-- Navigation Bar -->
		
			<div class="masthead">
				<h4 class="muted">Student Union</h4>
				
				<?php 
					
					$menu = "follow";
					
					include ("header.php"); 
				
				?>
			
			</div>
			
			<div class="container-fluid">
				<div class="row-fluid">
				
					<?php include("sideMenu.php");	?>
					
						<div id="main">

						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
