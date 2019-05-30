<?php 

function create_post_type() {
	register_post_type('video',
		array(
			'labels' => array(
				'name' => __('Video'),
				'singular_name' => __('Video' )
		 ),
			'description' => '<p><strong>¿Por qué todas las marcas están haciendo video?</strong></p><p>Comunicas más en menos tiempo. <strong>El video es una herramienta que logra quedarse más tiempo en la memoria de las personas</strong> ya que genera sensaciones y engancha más rápido con el publico objetivo siempre y cuando tengas clara las expectativas de tu potencial cliente. </p><p>El contenido audiovisual en una estrategia de marketing no solo sirve para trabajar branding y el posicionamiento en buscadores, también genera conversiones que es lo todas las marcas estamos buscando.</p><p>Además el video también es muy poderoso en la comunicación interna ya que nos ayuda a transmitir de manera rápida y eficiente las campañas internas que en su gran mayoría tiene en el objetivo de lograr un excelente clima laboral el cual se traduce en mejora de productividad.</p>',
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
			'description' => '<p>Y si te preguntas: <strong>¿Qué tipos de animaciones me pueden servir?</strong> Ahí entramos nosotros,tras una reunión contigo sabremos cuales serían las ideas más idóneas para tu negocio o alguna campaña que tengas en mente,estos son algunos ejemplos:</p><ul><li class="ul-list"><strong>Videos explicativos:</strong>Das a conocer tus productos o servicios de forma sencilla y dinámica utilizando gráficos atractivos y locución en off.</li><li class="ul-list"><strong>Videos tutoriales:</strong> Explicar un procedimiento o mostrar cómo funciona un producto o servicio a tus clientes o colaboradores utilizando imágenes facilita su comprensión y genera mucha atención y recordación. Ya lo sabías,ahora solo falta que nos llames.</li><li class="ul-list"><strong>Videos de Storytelling:</strong> Cuenta historias para transmitir tus mensajes. Las historias ayudan a generar curiosidad en los usuarios y fidelizar aún más a tus clientes.</li></ul><p>Este es un formato que sin duda alguna logrará que tus objetivos de comunicación sean efectivos.</p>',
			'public' => true,
			'featured_video' => '7teIpLkHf_E',
			'has_archive' => true,
		)
	);
	register_post_type('fotografia',
		array(
			'labels' => array(
				'name' => __('Fotografía'),
				'singular_name' => __('Fotografía' )
		 ),
			'description' => '<p>El éxito de una campaña o pieza comunicacional radica en una buena fotografía, y saber su funcionalidad y publico objetivo es la base. A continuación les mostramos algunos tipos de fotografía que trabajamos. </p><ul><li><strong>Comercial:</strong> Son fotos hechas para vender sensaciones y reflejar las necesidades del público objetivo.</li><li><strong>Corporativa:</strong> Llevan el ADN de la compañía, reflejan la cultura y espíritu de los colaboradores en sus diferentes funciones y espacios. Se utilizan para presentaciones, informes anuales, piezas de comunicación interna entre otros.</li><li><strong>Industrial:</strong> Se realizan en plantas y fábricas, se encarga de mostrar no sólo la cultura de la compañía sino también la seguridad ocupacional, gestión sanitaria, y buenas practicas en los procesos de trabajo.</li><li><strong>Interiorismo:</strong> Lo importante es capturar la esencia de la propuesta del arquitecto, respetar la proporcionalidad y temperatura de color del espacio.</li><li><strong>Gastronómica:</strong> ¡Comemos por los ojos! Por eso proyectar la mejor y más deliciosa imagen de los platos es su objetivo</li></ul>',
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
			'description' => '<p>Todas las empresas pueden posicionarse en internet, solo necesitan tener su espacio en el mundo digital de manera acorde a su tamaño y a su historia en el mundo real, logrando así recrear el vinculo empresa-consumidor en este nuevo mundo online. </p><ul><li><strong>Publicidad Digital:</strong> Aplicamos estrategias y creamos anuncios creativos y competitivos en Google ads, Facebook e Instagram ads.</li><li><strong>Redes Sociales:</strong> Administramos de forma integral tus redes sociales. Nos ocupamos tanto de la estrategia, como del contenido, el diseño y la moderación.</li></ul>',
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