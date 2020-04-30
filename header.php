<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>" />
			<meta name='viewport' content='width=device-width,initial-scale=1' />
			<title><?php wp_title( '| Kf solution', true, 'right' ); ?></title>
			<link rel="profile" href="http://kfsolution.ch" />
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
			<link rel="stylesheet" href="<?php bloginfo( 'pingback_url' ); ?>" />
			<link rel="icon" type="image/png" href="Images/icon1.png"/>
			<!-- Liens vers le fichier css -->
			<link href="http://kfsolution.ch//wp-content/themes/Kfsolutionv1/profil.css" rel="stylesheet">
			<link href="http://kfsolution.ch//wp-content/themes/Kfsolutionv1/css/formulaire.css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Dancing+Script:700"rel='stylesheet' type='text/css'>
			<!-- CSS -->
			<link href="/wp-content/themes/Kfsolutionv1/style.css" rel="stylesheet">
			<!-- CSS pour les îcones -->
			<link rel="icon" href="../../favicon.ico">
			<link href="/wp-content/themes/Kfsolutionv1/css/bootstrap.css" rel="stylesheet">
			<!-- CSS -->
			<link href="/wp-content/themes/Kfsolutionv1/style.css" rel="stylesheet">
			<link href="/wp-content/themes/Kfsolutionv1/responsive.css" rel="stylesheet">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			<!-- Ukit -->
			<link rel="stylesheet" href="/wp-content/themes/Kfsolutionv1/uikit/css/uikit.css"/>
			<link rel="stylesheet" href="/wp-content/themes/Kfsolutionv1/uikit/css/components/slidenav.css"/>
			<link rel="stylesheet" href="/wp-content/themes/Kfsolutionv1/uikit/css/components/slideshow.css"/>
			<script src="/wp-content/themes/Kfsolutionv1/uikit/js/uikit.js"></script>
			<script src="/wp-content/themes/Kfsolutionv1/uikit/js/uikit.min.js"></script>
			<script src="/wp-content/themes/Kfsolutionv1/uikit/js/components/slideshow.js"></script>
			
			<script type="text/javascript">
				$(document).ready(function(){
					$("#myModal").modal('show');
				});
			</script>
		</head>
		<body>
			<nav class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand" href="http://kfsolution.ch">
							<img src="/wp-content/themes/Kfsolutionv1/Images/Logo-KF.jpg">         
						</a>
					</div>
					<div class="collapse navbar-collapse slider" id="myNavbar">
						<ul class="nav navbar-nav">
							<?php 
								wp_nav_menu( array( 
								'theme_location' => 'primary',
								'menu_class' => 'nav navbar-nav',
								) );
							?>
						</ul>
					</div>
				</div>
			</nav>
		
		
	