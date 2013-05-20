<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<ul class="nav">
				<li <?php if ( $menu == "index"  ) echo "class=\"active\""; ?> ><a href="index.php" >Home      </a></li>
				<li <?php if ( $menu == "about"  ) echo "class=\"active\""; ?> ><a href="about.php" >About Us  </a></li>
				<li <?php if ( $menu == "follow" ) echo "class=\"active\""; ?> ><a href="follow.php">Follow Us </a></li>
			</ul>
			<ul class="nav pull-right">
				<?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) { ?>
				
					<li><a href="logout.php" onclick="return logout();" >Logout <?php echo $_SESSION['username']; ?>   </a></li>
				
				<?php } else { ?>
					
					<li <?php if ( $menu == "register" ) echo "class=\"active\""; ?> ><a href="register.php">Register</a></li>
					<li <?php if ( $menu == "login" )    echo "class=\"active\""; ?> ><a href="login.php"   >Login   </a></li>
				
				<?php } ?>
			</ul>
		</div>
	</div>	
</div>
