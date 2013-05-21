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
							<div class="container-fluid">
								<div class="row-fluid">
									<div class="span4">
										<h5>My Tweets</h5>
										<p>
											<a class="twitter-timeline" height="350" 
													href="https://twitter.com/CCT_2010619"  
													data-widget-id="319033873705082880">Tweets by @CCT_2010619
											</a>
										</p>
									</div><!-- .span4 -->

									<div class="span4">
										<h5>Single hashtag</h5>
										<p>
											<a class="twitter-timeline" height="350"
													href="https://twitter.com/search?q=%23pfsense"  
													data-widget-id="319038351271399424">Tweets about "#pfsense"
											</a>
										</p>
									</div><!-- .span4 -->

									<div class="span4">
										<h5>List of authors</h5>
										<p>
											<a class="twitter-timeline" height="350"
													href="https://twitter.com/CCT_2010619/pfsense"  
													data-widget-id="319042589905002496">Tweets from @CCT_2010619/pfsense
											</a>
										</p>
									</div><!-- .span4 -->
								</div>
							</div><!-- .row -->

						</div>
					</div>
				</div>
			</div>
		</div>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
