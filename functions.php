<?php 

function create_post_type() {
	register_post_type('video',
		array(
			'labels' => array(
				'name' => __('Producción de Video'),
				'singular_name' => __('Video' )
		 ),
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, culpa! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti mollitia repellat voluptatibus assumenda, autem unde dolores reprehenderit porro. Ullam non libero, voluptates accusamus facilis, impedit deserunt. Accusamus quo eveniet magnam officiis a, veritatis officia veniam architecto et eligendi laudantium odit maxime possimus, cum, nihil ipsum, autem deserunt doloremque nulla vero.',
			'public' => true,
			'featured_video' => 'unGw7IKd4Es',
			'has_archive' => true,
		)
	);
	register_post_type('animacion',
		array(
			'labels' => array(
				'name' => __('Animación 2D'),
				'singular_name' => __('Animación' )
		 ),
			'description' => '<strong>¿Tienes un nuevo producto o estas renovando tu servicio?</strong> ¿Quieres dar a conocer a tus clientes cómo utilizar tu producto o servicios y las ventajas del mismo? Las animaciones 2D no solo son atractivas, sino que también tienen un gran alcance orgánico (sin costo) y un alto engagement (reacciones de las personas que lo ven). Ya te habrás dado cuenta que todos lo están haciendo, sin mencionar a tu competencia.',
			'public' => true,
			'featured_video' => '7teIpLkHf_E',
			'has_archive' => true,
		)
	);
	register_post_type('fotografia',
		array(
			'labels' => array(
				'name' => __('Producción Fotográfica'),
				'singular_name' => __('Fotografía' )
		 ),
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, sinfinus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At est voluptatum aspernatur a cupiditate molestiae magnam soluta saepe, explicabo, vitae dicta assumenda illo dolores debitis quasi error. Illum, dolorem earum!',
			'public' => true,
			'featured_video' => 'I2rafKLz4KE',
			'has_archive' => true,
		)
	);
	register_post_type('marketing',
		array(
			'labels' => array(
				'name' => __('Marketing Digital'),
				'singular_name' => __('Marketing' )
		 ),
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, sinfinus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At est voluptatum aspernatur a cupiditate molestiae magnam soluta saepe, explicabo, vitae dicta assumenda illo dolores debitis quasi error. Illum, dolorem earum!',
			'public' => true,
			'featured_video' => '2FzZDhKSJt8',
			'has_archive' => true,
		)
	);
}

add_action('init', 'create_post_type' );
add_theme_support( 'post-thumbnails' );

remove_filter('term_description','wpautop');
remove_filter ('the_exceprt', 'wpautop');
remove_filter ('the_content', 'wpautop');

function token_scripts($value='') {
	wp_enqueue_style('reset', get_template_directory_uri().'/css/reset.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'token_scripts');

 ?>