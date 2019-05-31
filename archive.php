<?php

get_header();

$post_type = get_post_type();
if ( $post_type ) {
    $post_type_data = get_post_type_object( $post_type );
    $post_type_slug = $post_type_data->rewrite['slug'];
}

$pagename = ucfirst($post_type_data->rewrite['slug']);
set_query_var('pagename', $pagename);
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
				<?= $post_type_data->description ?>
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