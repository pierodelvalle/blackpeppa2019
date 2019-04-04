<?php 
/**
*Template Name: Post Archive
*/
get_header('blog');

$post_type = get_post_type();
if ( $post_type ) {
    $post_type_data = get_post_type_object( $post_type );
    $post_type_slug = $post_type_data->rewrite['slug'];
}

 ?>
<section class="section section-blog">
	<div class="container">
		<h1>Blog Super Bacán</h1>
		<?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 12)); ?>
			<?php if ($query->have_posts()): ?>
				<?php while($query->have_posts()): ?>
					<div class="blogpost main">
					<?php $query->the_post(); ?>
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
					  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					  <div class="blogpost-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
					<?php endif; ?>
					<h2><a class="a" href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
					<span>Publicado el <strong><?php the_date(); ?></strong> · Autor: <strong><?php the_author(); ?></strong></span>
					<a href="<?php the_permalink(); ?>" class="a"><?php the_excerpt(); ?></a>
					</div>
				<?php endwhile; ?>
			<?php endif ?>
		<?php get_template_part('partials/socialmedia') ?>
	</div>
</section>
<?php get_footer() ?>