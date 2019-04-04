<div class="gallery-list">
	<?php 
	global $post_type_slug; // Forgive me lord for I have sinned
	$query = new WP_Query(array('post_type' => $post_type_slug, 'posts_per_page' => 12));

	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post(); ?>
		<a style="background-image: url('https://i.ytimg.com/vi/<?= types_render_field( $post_type_slug."-url" ); ?>/maxresdefault.jpg');" 
		   data-fancybox
		   data-caption="<?php the_title(); ?><br>Cliente: <?php the_content(); ?>"
		   href="https://www.youtube.com/embed/<?= types_render_field($post_type_slug.'-url'); ?>" >
		</a>
		<?php endwhile; 
	else: 
		_e('Nothing here!');
	endif ?>
</div>