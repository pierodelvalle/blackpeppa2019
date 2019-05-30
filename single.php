<?php get_header('blog'); ?>
<section class="section section-blog">
	<div class="container">
		<a href="/blog">← Regresar a Blog</a>
	<?php while ( have_posts() ) : ?>
		<div class="blogpost">
		<?php the_post(); ?>
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		  <img src="<?php echo $image[0]; ?>" style="width: 100%; margin-top: 20px">
		<?php endif; ?>
		<h2><a class="link" href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
		<span>Publicado el <strong><?php the_date(); ?></strong> · Autor: <strong><?php the_author(); ?></strong></span>
		<div><?php the_content(); ?></div>
		</div>
	<?php endwhile; ?>
	</div>
</section>
<?php get_footer(); ?>