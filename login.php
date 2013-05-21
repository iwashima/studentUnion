<!DOCTYPE html>
<html>
	<head>
		<title>Student Union</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css"             media="screen">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		
		<!-- Customised CSS -->
		<link href="css/custom.css"        rel="stylesheet" media="screen" type="text/css">

	</head>
	
	<body>

		<div class="container">
			<!-- Navigation Bar -->
		
			<div class="masthead">
				<h4 class="muted">Student Union</h4>

				<?php 
					
					$menu = "login";
					
					include ("header.php"); 
				
				?>
				
			</div>
			
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div id="main">
							
							<?php if ( isset($_GET) && $_GET["err"] != "" ) { echo "<h5 style=\"color: red;\">Incorrect Username / Password !</h5>"; } ?>
							
							<form name="login" action="validate.php" method="POST"> 

								<table id="login-table"> 
								<tr>
									<th> Username:</th>
									<td>
										<input type="text" id="username" name="username" placeholder="Username - test" />
									</td>
								</tr>

								<tr>
									<th> Password:</th>
									<td>
										<input type="password" id="password" name="password" placeholder="Password - test" />
									</td>
								</tr>
								<tr>
									<th colspan="2"> 
										<a href="#" onclick="document.forms[0].submit(); return false;" class="btn btn-primary btn-medium">
											Login using DB
										</a>
									</th>	
								</tr>
								<tr>
									<th colspan="2">
										<br />
										OR
										<br />&nbsp
									</th>
								</tr>
								<tr>
									<th colspan="3">
									<div class="btn-group btn-group-vertical"</div>
										<a href="login_facebook.php" class="btn btn-primary btn-medium">
											<img src="./img/facebook.png" /> Login using Facebook
										</a>

										<a href="login_twitter.php" class="btn btn-primary btn-medium">
											<img src="./img/twitter.png" /> Login using Twitter
										</a>

										<a href="login_google.php" class="btn btn-primary btn-medium">
											<img src="./img/google.png" /> Login using Google
										</a>
									</th>
								</tr>								
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
