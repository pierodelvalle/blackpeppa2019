<?php
/**
*Template Name: Landing
*/
get_header('blog');

$pagename = "Interiores";
set_query_var('pagename', $pagename);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<main class="page landing">
	<div class="container">
		<div class="columns">
			<div class="column">
				<h1>¿Fotos con tu celular? No.</h1>
			</div>
		</div>
		<div class="columns">
			<div class="column is-7">
				<div class="slick">
					<img src="<?= get_template_directory_uri(); ?>/img/interiores/antonioraimondi.jpg" alt="">
					<img src="<?= get_template_directory_uri(); ?>/img/interiores/casacor2016.jpg" alt="">
					<img src="<?= get_template_directory_uri(); ?>/img/interiores/casacor2018.jpg" alt="">
					<img src="<?= get_template_directory_uri(); ?>/img/interiores/interiores.jpg" alt="">
					<img src="<?= get_template_directory_uri(); ?>/img/interiores/interiores2.jpg" alt="">
					<img src="<?= get_template_directory_uri(); ?>/img/interiores/jockey.jpg" alt="">
					<img src="<?= get_template_directory_uri(); ?>/img/interiores/nido.jpg" alt="">
					<img src="<?= get_template_directory_uri(); ?>/img/interiores/olenka.jpg" alt="">
					<img src="<?= get_template_directory_uri(); ?>/img/interiores/residencial.jpg" alt="">
				</div>
			</div>
			<div class="column" data-aos="flip-left">
				<?php get_template_part('partials/contact') ?>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<h2>Fotografía de Interiores</h2>
				<p>Por más que los celulares de hoy tengan buena resolución, color, nitidez y beauty filter; <strong>esta calidad no superará al ojo de un fotógrafo</strong> en combinación con una buena cámara, lente apropiado, manejo de luz y post producción. Si estás list@ para lucir tus proyectos como un arquitect@ profesional y emprendedor@, atrévete y logra tus objetivos con nosotros.</p>
			</div>
		</div>
	</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
	$('.slick').slick({
		arrows: true,
		dots: true,
		autoplay: true,
		autoplaySpeed: 2000,
		adaptiveHeight: true
	});
</script>
<?php get_footer(); ?>