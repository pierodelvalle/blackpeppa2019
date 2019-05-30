<?php
/**
*Template Name: Landing
*/
get_header('blog'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<main class="page landing">
	<div class="container">
		<h1 class="center">Fotografía de Interiores</h1>
		<div class="columns is-center">
			<div class="column is-10">
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
		</div>
		<div class="columns">
			<div class="column">
				<h1>¿Fotos con tu celular? Nooooo </h1>
				<p>Por más que los celulares de hoy tengan buena resolución, color, nitidez y beauty filter; <strong>esta calidad no superará al ojo de un fotógrafo</strong> en combinación con una buena cámara, lente apropiado, manejo de luz y post producción. </p><p>Si estás list@ para lucir tus proyectos como un arquitect@ profesional y emprendedor@, atrévete y logra tus objetivos con nosotros.</p>
			</div>
			<div class="column is-6" data-aos="flip-left">
				<?php get_template_part('partials/contact') ?>
			</div>
		</div>
	</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
	$('.slick').slick({
		arrows: true,
		dots: true,
		adaptiveHeight: true
	});
</script>
<?php get_footer(); ?>