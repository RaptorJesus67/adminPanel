<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?php echo ADMIN_URI; ?>css/desktopStyle.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo ADMIN_URI; ?>css/strudel.css" />
		<?php require_once(BASE_CLIENT . "javascript/js.html"); ?>
	</head>
</html>
<body>
	<header>
		<div class='headerTable'>
			<div class='tr'>
				<div class='headerLeft th'>
					<a href='<?php echo ADMIN_URI; ?>'>
						<img src='<?php echo ADMIN_URI; ?>images/KCPStudios.jpg' class='siteLogo' />
					</a>
				</div>
				<div class='headerCenter th'>
					<h2><?php echo $this->siteName; ?></h2>
				</div>
				<div class='headerRight th'>
					
				</div>
			</div>
		</div>
	</header>
	
	<!-- NAVIGATION -->
	<nav>
		
		<!-- NAV PROFILE -->
		<div class='navUserProfile'>
			<div id='navProfilePicWrapper'>
				<img src="<?php echo ADMIN_URI;?>images/defaultPic.jpg" id="navProfilePic" />
			</div>
			<p id="navProfileName">Profile Name</p>
		</div>
		
		
		<!-- MAIN NAVIGATION LINKS -->
		<ul class='navListContainer'>
			<a href="<?php echo ADMIN_URI; ?>">
				<li>
					<div class='navLiWrapper'>
						<img src="<?php echo ADMIN_URI; ?>images/Dashboard.png" id="navDashboardImg" class='navThumbnail'/>
						<p>Dashboard</p>
					</div>
				</li>
			</a>
			<a href="<?php echo ADMIN_URI; ?>band">
				<li>
					<div class='navLiWrapper'>
						<img src="<?php echo ADMIN_URI; ?>images/Bands Page Logo.png" id="navDashboardImg" class='navThumbnail'/>
						<p>Bands</p>
					</div>
				</li>
			</a>
			<a href="<?php echo ADMIN_URI; ?>album">
				<li>
					<div class='navLiWrapper'>
						<img src="<?php echo ADMIN_URI; ?>images/Albums Page Logo.png" id="navDashboardImg" class='navThumbnail'/>
						<p>Albums</p>
					</div>
				</li>
			</a>
			<a href="<?php echo ADMIN_URI; ?>genre">
				<li>
					<div class='navLiWrapper'>
						<img src="<?php echo ADMIN_URI; ?>images/Genres Page Logo.png" id="navDashboardImg" class='navThumbnail'/>
						<p>Genres</p>
					</div>
				</li>
			</a>
		</ul>
		
	</nav>
	
