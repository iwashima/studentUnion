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
							
							<form action="validate.php" method="POST"> 

								<table id="login-table" border=1> 
								<tr>
									<th> Username:</th>
									<td>
										<input type="text" id="username" name="username" />
									</td>
								</tr>

								<tr>
									<th> Password:</th>
									<td>
										<input type="password" id="password" name="password" />
									</td>
								</tr>
								
								<tr>
									<th colspan="2"> 
										<input type="submit" value="Login" />
									</th>
								</tr>
								<tr>
									
								</tr>	
							</form>

						</div>
					</div>
												<div>
								<a class="fb_login" href="login_facebook.php">Login using Facebook</a>
								<a class="twitter_login" href="login_twitter.php">Login using Twitter</a>
							</div>
				</div>
			</div>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
