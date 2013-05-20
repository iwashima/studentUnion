<?php

	include ("./inc/config.inc.php");
	include ("./inc/db.inc.php");

?>
	
<?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) { ?>

	<div class="span2">
		<div class="sidebar-nav">
			<div class="well" style="padding: 8px 0;">
				<ul class="nav nav-list"> 
					<li class="nav-header">Main</li>

					<?php
					
					    $sqlQuery = "SELECT * FROM tbl_menu WHERE tbl_menu.active = 1";
    
						$result = mysql_query($sqlQuery);
    
						if (! $result) {
			
							die('Could not query:' . mysql_error());
		
						}
		
						while( $resultItem = mysql_fetch_row($result) ) {
						
							echo "<li";
							
							if ( $menu == $resultItem[1] ) { echo "class=\"active\" "; }

							echo "><a href=\"".$resultItem[2]."\">";
							
							echo "<i class=\"".$resultItem[3]."\"></i> ";
							
							echo $resultItem[1]."</a></li>";
							
						}	
					?>
				</ul>
			</div>
		</div>
	</div>
		
	<div class="span10">

<?php } else { ?>

	<div class="span12">
	
<?php } ?>
