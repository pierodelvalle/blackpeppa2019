<div class="gallery-list">
	<?php 
	$query = new WP_Query(array('post_type' => 'fotografia', 'posts_per_page' => 12));

	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post(); ?>
		<a style="background-image: url('<?= types_render_field('foto-galeria', array('url'=>'true','index' => '0')); ?>');" 
		   data-fancybox="<?php the_title(); the_content(); ?>"
		   data-caption="<?php the_title(); ?><br>Cliente: <?php the_content(); ?>"
		   href="<?= types_render_field('foto-galeria', array('url'=>'true','index' => '0')); ?>" >
		   <span> <?php the_content(); ?></span>
		</a>
		<?php 
			$x = 1;
			while (true): 
				if (types_render_field('foto-galeria', array('index' => $x)) == false) { break; } ?>
				<a style="display: none"
				   data-fancybox="<?php the_title(); the_content(); ?>"
				   data-caption="<?php the_title(); ?>"
				   href="<?php echo(types_render_field( 'foto-galeria', array( 'url' => true, 'index' => $x) )) ?>"></a>
			<?php
				$x++; 
			endwhile;
		endwhile; 
	else: 
		_e('Nothing here!');
	endif ?>
</div>