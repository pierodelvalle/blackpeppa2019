<!DOCTYPE html>
<html lang="es">
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
	<!-- Start Favicon Stuff -->
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#f2e44c">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#f2e44c">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141028592-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-141028592-1');
	</script>
</head>
<body>
	<header class="header">
		<div class="container">
			<nav class="navbar">
				<div class="navbar-brand">
					<a href="/"><img class="mobile" src="<?= get_template_directory_uri(); ?>/img/bp-logo-blanco-small.svg" alt="Black Peppa Digital" height="50"></a>
					<a href="/"><img class="desktop" src="<?= get_template_directory_uri(); ?>/img/bp-logo-negro.svg" alt="Black Peppa Digital" height="50"></a>
					<span id="menu-button"><div></div><div></div><div></div></span>
				</div>
				<div class="navbar-content">
					<a href="/marketing" class="navbar-item">Marketing Digital</a>
					<a href="/video" class="navbar-item">Video</a>
					<a href="/animacion" class="navbar-item">Animación 2D</a>
					<a href="/fotografia" class="navbar-item">Fotografía</a>
				</div>
			</nav>
		</div>
	</header>