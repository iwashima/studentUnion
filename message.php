<!DOCTYPE html>

<?php 
	
	define("MY_INC_CODE", 1);
	
	session_start();
	
	include ("./inc/config.inc.php");
	include ("./inc/db.inc.php");
	include("./inc/session.inc.php");	
	
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
					
					$menu = "Message";
					
					include ("header.php"); 
				
				?>
			
			</div>
			
			<div class="container-fluid">
				<div class="row-fluid">
				
					<?php include("sideMenu.php");	?>
					
						<div id="main">
						
							<?php 
								
								$sqlMessage = "SELECT * FROM tbl_message WHERE 
													tbl_message.logginTool = \"".$_SESSION["logginTool"]."\" AND 
													tbl_message.username   = ".$_SESSION["ID"]." ORDER BY tbl_message.date DESC";
    
								$result = mysql_query($sqlMessage);

								if (! $result) {
					
									die('Could not query:' . mysql_error());
				
								} 
								
								if( mysql_num_rows($result) == 0 ){
								
									echo "<h3>No message available</h3>";
				
								}
								
								else {
								
									echo "<table class=\"table table-striped\">";
									
									echo "<tr><th>Date</th><th>Title</th><th>Message</th></tr>";
								
									while( $resultItem = mysql_fetch_row($result) ) {
									
										echo "<tr><td width=\"25%\">".$resultItem[5].
												"</td><td width=\"25%\">".$resultItem[3].
												"</td><td width=\"50%\">".$resultItem[4]."</td></tr>";
									
									}
								
								}
								
								echo "</table>";

							?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
