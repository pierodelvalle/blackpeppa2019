<?php get_header('home') ?>
<div class="navbar-bottom">
	<div class="container">
		<nav class="navbar">
			<div class="navbar-brand">
				<a href="#home"><img class="mobile" src="<?= get_template_directory_uri(); ?>/img/bp-logo-blanco-small.svg" alt="Black Peppa Digital" height="50"></a>
				<a href="#home"><img class="desktop" src="<?= get_template_directory_uri(); ?>/img/bp-logo-blanco.svg" alt="Black Peppa Digital" height="50"></a>
				<span id="menu-button"><div></div><div></div><div></div></span>
			</div>
			<div class="navbar-content">
				<a href="#nosotros" class="navbar-item">Nosotros</a>
				<a href="#servicios" class="navbar-item">Servicios</a>
				<a href="#clientes" class="navbar-item">Clientes</a>
				<a href="#contacto" class="navbar-item">Contacto</a>
				<a href="<?= get_site_url(); ?>/blog" class="navbar-item">Blog</a>
			</div>
		</nav>
	</div>
</div>
<div id="home">
	<div class="home-slide" data-anchor="home">
		<section class="section section-reel">
			<div class="container">
				<a href="https://www.youtube.com/watch?v=2zZdFFMMVUM" data-fancybox ><img data-aos="slide-up" src="<?= get_template_directory_uri(); ?>/img/playicon.svg" alt="Ver Reel" height="128"></a>
				<h1>¿Qué hacemos antes de comprar?</h1>
				<h2>Nada más que vivir.</h2>
				<a href="#nosotros" class="bottom">︾</a>
			</div>
		</section>
	</div>
	<div class="home-slide" data-anchor="nosotros">
		<section class="section section-nosotros" >
			<div class="columns is-floater the-astronaut container">
				<div class="column is-6" data-aos="slide-left">
					<h1 class="jumbo">¡Hola!</h1>
					<p class="jumbo"><strong>Somos un equipo de comunicadores</strong> que vivimos y pensamos en digital en nuestro día a día.</p>
					<p class="jumbo"><strong>Creamos estrategias digitales</strong> para lograr conversiones, hacer branding y reforzar las comunicaciones de tu marca a través de piezas audiovisuales, animaciones 2D y producciones fotográficas.</p>
				</div>
				<div class="image">
					<img src="<?= get_template_directory_uri(); ?>/img/astronauta.png" alt="Esto es, supuestamente, una imagen de un astronauta. Si estas leyendo este texto, nuestro programador no sabe dónde puso la imagen." title="¡Hazme click!" class="image image-astronaut">
				</div>
				<div class="yellow-square"></div>
			</div>
			<div class="container instagram">
				<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/365bd6b42d66535ba4bc64ff20046e79.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
			</div>
		</section>
	</div>
	<div class="home-slide" data-anchor="servicios">
		<section class="section" >
			<div class="container">
				<div class="columns is-floater the-macintosh">
					<div class="column">
						<div class="image">
							<img src="<?= get_template_directory_uri(); ?>/img/macintosh.png" alt="Nuestros Servicios">
							<div class="image-screen"></div>
						</div>
					</div>
					<div class="column">
						<ul class="services-list">
							<li data-aos="fade-right"><a class="services-link" aria-service="marketing" href="<?= get_site_url(); ?>/marketing">Marketing Digital</a></li>
							<li data-aos="fade-right"><a class="services-link" aria-service="video" href="<?= get_site_url(); ?>/video">Producción de Video</a></li>
							<li data-aos="fade-right"><a class="services-link" aria-service="animacion" href="<?= get_site_url(); ?>/animacion">Animación 2D</a></li>
							<li data-aos="fade-right"><a class="services-link" aria-service="fotografia" href="<?= get_site_url(); ?>/fotografia">Producción Fotográfica</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="home-slide" data-anchor="clientes">
		<section class="section section-clientes" >
			<div class="container">
				<?php $clients = ['arie', 'acantilado', 'arqui', 'cafae', 'chs', 'compartamos', 'contugas', 'engie', 'hilarte', 'inkafarma', 'interseguro', 'mincetur', 'minedu', 'pieza', 'srburns', 'tottus']; ?>
				<h1 id="anchor-clients">Nuestros<br><strong>Clientes</strong></h1>
				<div class="columns is-multiline">
				<?php for ($i = 0; $i < 16; $i++): ?>
					<div data-aos="fade-up" data-aos-anchor="#anchor-clients" class="column is-3"><div class="image"><img src="<?= get_template_directory_uri(); ?>/img/cliente-<?= $clients[$i]?>.jpg" ></div></div>
				<?php endfor; ?>	
				</div>
				<div class="yellow-square"></div>
			</div>
		</section>
	</div>
	<div class="home-slide">
		<section class="section section-testimonios">
			<div class="container">
				<h1 class="is-bold is-centered">Testimonios</h1>
				<div class="columns is-multiline">
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-mincetur.jpg">
							<div class="testimonio-text">
								<span>Mincetur</span>
								<h2>Melissa Romani</h2>
							</div>
						</div>
						<p>Es complicado encontrar proveedores que comprendan exactamente los productos que necesitas. Trabajar con ustedes ha sido un intercambio constante de conocimientos que va más allá de cumplir con un contrato para elaborar materiales audiovisuales. Han logrado el propósito que buscábamos.</p>
					</div>
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-chs.jpg">
							<div class="testimonio-text">
								<span>CHS Alternativo</span>
								<h2>Silvia Yopla</h2>
							</div>
						</div>
						<p>Trabajamos un material con corte educativo que implicó que pensemos y repensemos hasta tener el guíon indicado. La creatividad y compromiso del equipo de Black Peppa permitió que tengamos un súper material, claro, didáctico y eficaz.</p>
					</div>
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-cafae.jpg">
							<div class="testimonio-text">
								<span>CAFAE-SE</span>
								<h2>Johans Herencia</h2>
							</div>
						</div>
						<p>Trabajamos con Black Peppa hace dos años y nos enrumbamos en nuevos proyectos junto con la institución que represento. Muy profesionales y divertidos, 100% recomendados.</p>
					</div>
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-arqui.jpg">
							<div class="testimonio-text">
								<span>Arqui+</span>
								<h2>Arq. Olenka Marquina</h2>
							</div>
						</div>
						<p>Trabajar con gente creativa y que te complementa es la parte más importante cuando pides un servicio relacionado a audiovisuales. Después de más de 5 años de realizar fotos y vídeos con Black Peppa puedo recomendar sus servicios a ojos cerrados.</p>
					</div>
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-acantilado.jpg">
							<div class="testimonio-text">
								<span>Acantilado de Barranco</span>
								<h2>Victor González</h2>
							</div>
						</div>
						<p>Un gusto trabajar con ustedes. Las fotos, videos y la gestión de nuestra fanpage. Siempre están para lo que deseamos o nos sugieren lo mejor para estar a la vanguardia. Esperamos seguir contando siempre con ustedes.</p>
					</div>
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-claudia.jpg">
							<div class="testimonio-text">
								<span>Joyas Claudia Lira</span>
								<h2>Marlis Lira</h2>
							</div>
						</div>
						<p>Hicimos un video institucional con Black Peppa hace poco más de un año&#8230; nos encantó el resultado. Captaron nuestro concepto inmediatamente, fueron creativos, profesionales y rápidos. ¡Los recomiendo!</p>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="home-slide" data-anchor="contacto">
		<section class="section section-contacto" >
			<div class="container">
				<div class="text is-bold">
					<h1>¡Hablemos!</h1>
					<h2><a href="">mladera@blackpeppa.pe</a> | 554 7984 | 940 058 068</h2>
				</div>
				<div class="columns">
					<div class="column is-6" data-aos="flip-left" data-aos-anchor="#anchor-form">
						<?php get_template_part('partials/contact') ?>
					</div>
					<div class="column">
						<div class="image">
							<img class="image-phone" src="<?= get_template_directory_uri(); ?>/img/fono-asa.png">
							<img class="image-base" src="<?= get_template_directory_uri(); ?>/img/fono-base.png">
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div> <!-- End of #home wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.4/vendors/scrolloverflow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.4/fullpage.min.js"></script>
<script>
	if($(window).width() <= 1400){ $('#home').removeAttr('id'); }
	new fullpage('#home', {
		//options here
		autoScrolling: true,
		scrollHorizontally: false,
		sectionSelector: '.home-slide',
		scrollOverflow: true,
		anchors: ['home', 'nosotros', 'servicios', 'clientes', 'contacto']
	});
</script>
<script src="<?= get_template_directory_uri(); ?>/js/home.js"></script>
<?php get_footer() ?>
