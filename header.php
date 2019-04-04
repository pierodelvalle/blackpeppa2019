<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Primary Meta Tags -->
	<title>Black Peppa Digital</title>
	<meta name="title" content="Black Peppa Digital">
	<meta name="description" content="Somos un equipo de comunicadores que vivimos y pensamos en digital en nuestro día a día. Creamos estrategias digitales para lograr conversiones, hacer branding y reforzar las comunicaciones de tu marca a través de piezas audiovisuales, animaciones 2D y producciones fotográficas.">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?= get_site_url(); ?>/">
	<meta property="og:title" content="Black Peppa Digital">
	<meta property="og:description" content="Somos un equipo de comunicadores que vivimos y pensamos en digital en nuestro día a día. Creamos estrategias digitales para lograr conversiones, hacer branding y reforzar las comunicaciones de tu marca a través de piezas audiovisuales, animaciones 2D y producciones fotográficas.">
	<meta property="og:image" content="<?= get_template_directory_uri(); ?>/img/bp-card.jpg">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?= get_site_url(); ?>/">
	<meta property="twitter:title" content="Black Peppa Digital">
	<meta property="twitter:description" content="Somos un equipo de comunicadores que vivimos y pensamos en digital en nuestro día a día. Creamos estrategias digitales para lograr conversiones, hacer branding y reforzar las comunicaciones de tu marca a través de piezas audiovisuales, animaciones 2D y producciones fotográficas.">
	<meta property="twitter:image" content="<?= get_template_directory_uri(); ?>/img/bp-card.jpg">
	<!-- Rest of stuff -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<header class="header">
		<div class="container">
			<nav class="navbar">
				<div class="navbar-brand">
					<a href="<?= get_site_url(); ?>/"><img class="mobile" src="<?= get_template_directory_uri(); ?>/img/bp-logo-blanco-small.svg" alt="Black Peppa Digital" height="50"></a>
					<a href="<?= get_site_url(); ?>/"><img class="desktop" src="<?= get_template_directory_uri(); ?>/img/bp-logo-blanco.svg" alt="Black Peppa Digital" height="50"></a>
					<span id="menu-button"><div></div><div></div><div></div></span>
				</div>
				<div class="navbar-content">
					<a href="<?= get_site_url(); ?>/marketing" class="navbar-item">Marketing Digital</a>
					<a href="<?= get_site_url(); ?>/video" class="navbar-item">Producción de Video</a>
					<a href="<?= get_site_url(); ?>/animacion" class="navbar-item">Animación 2D</a>
					<a href="<?= get_site_url(); ?>/fotografia" class="navbar-item">Producción Fotográfica</a>
				</div>
			</nav>
		</div>
	</header>