<?php

get_header();

$post_type = get_post_type();
if ( $post_type ) {
    $post_type_data = get_post_type_object( $post_type );
    $post_type_slug = $post_type_data->rewrite['slug'];
}
?>
<section class="section section-category <?= $post_type_slug ?>">
	<div class="container">
		<div class="columns">
			<div class="column is-5 text">
				<h1 class="is-bold"><?php post_type_archive_title(); ?></h1>
				<?php get_template_part('partials/servicelist', $post_type_slug) ?>
			</div>
			<div class="column is-6 is-image">
				<div class="image">
					<img src="<?= get_template_directory_uri(); ?>/img/<?= $post_type_slug ?>.png" alt="<?php post_type_archive_title(); ?>">
				</div>
			</div>
			<div class="yellow-square"></div>	
		</div>
	</div>
</section>
<section class="section section-content">
	<div class="container">
		<div class="columns">
			<div class="column">
				<p>Y si te preguntas: <strong>¿Qué tipos de animaciones me pueden servir?</strong> Ahí entramos nosotros, tras una reunión contigo sabremos cuales serían las ideas más idóneas para tu negocio o alguna campaña que tengas en mente, estos son algunos ejemplos:</p>
				<ul>
					<li class="ul-list"><strong>Videos explicativos: </strong> Das a conocer tus productos o servicios de forma sencilla y dinámica utilizando gráficos atractivos y locución en off.</li>
					<li class="ul-list"><strong>Videos tutoriales: </strong> Explicar un procedimiento o mostrar cómo funciona un producto o servicio a tus clientes o colaboradores utilizando imágenes facilita su comprensión y genera mucha atención y recordación. Ya lo sabías, ahora solo falta que nos llames.</li>
					<li class="ul-list"><strong>Videos de Storytelling: </strong> Cuenta historias para transmitir tus mensajes. Las historias ayudan a generar curiosidad en los usuarios y fidelizar aún más a tus clientes.</li>
				</ul>
				<p>Este es un formato que sin duda alguna logrará que tus objetivos de comunicación sean efectivos.</p>
			</div>
			<div class="column is-6" data-aos="flip-left">
				<?php get_template_part('partials/contact') ?>
			</div>
		</div>
		<?php get_template_part('partials/content', $post_type_slug) ?>
		<?php get_template_part('partials/socialmedia') ?>
		</div>
</section>
<?php get_footer() ?>