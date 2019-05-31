<?php get_header('home');

$pagename = "Inicio";
set_query_var('pagename', $pagename); ?>
<div class="navbar-bottom home">
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
				<a href="/blog" class="navbar-item">Blog</a>
			</div>
		</nav>
	</div>
</div>
<div id="fullpage">
	<div class="home-slide" data-anchor="home">
		<section class="section section-reel">
			<div class="container">
				<a href="https://www.youtube.com/watch?v=2zZdFFMMVUM" data-fancybox ><img data-aos="slide-up" src="<?= get_template_directory_uri(); ?>/img/playicon.svg" alt="Ver Reel" height="128"></a>
				<h1>¿Qué hacemos antes de comprar?</h1>
				<h2>Nada más que vivir.</h2>
				<a href="#nosotros" class="bottom">︾</a>
			</div>
			<div class="overlay"></div>
			<div class="video-container">
				<video playsinline loop autoplay muted nocontrols data-keepplaying>
					<source src="<?= get_template_directory_uri(); ?>/media/bp-video.mp4" type="video/mp4">
					<source src="<?= get_template_directory_uri(); ?>/media/bp-video.webm" type="video/webm">
					Tu navegador no soporta video HTML5. Es hora de dejar el Internet Explorer.
				</video>
			</div>
		</section>
	</div>
	<div class="home-slide" data-anchor="nosotros">
		<section class="section section-nosotros" id="about">
			<div class="columns is-floater the-astronaut container">
				<div class="column is-7" data-aos="slide-left">
					<h1 class="jumbo">¡Hola!</h1>
					<p class="jumbo"><strong>Somos un equipo de comunicadores</strong> que vivimos y pensamos en digital en nuestro día a día.</p>
					<p class="jumbo"><strong>Creamos estrategias digitales,</strong> hacemos branding y contenido de valor para lograr conversiones y reforzar las comunicaciones de tu marca a través de piezas audiovisuales, animaciones 2D y producciones fotográficas.</p>
					<div class="instagram">
						<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/365bd6b42d66535ba4bc64ff20046e79.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>	
					</div>
				</div>
				<div class="image">
					<div class="the-heart"></div>
					<img src="<?= get_template_directory_uri(); ?>/img/astronauta.png" alt="Esto es, supuestamente, una imagen de un astronauta. Si estas leyendo este texto, nuestro programador no sabe dónde puso la imagen." title="¡Hazme click!" class="image image-astronaut">
				</div>
				<div class="yellow-square"></div>
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
							<li data-aos="fade-right"><a class="services-link" aria-service="marketing" href="<?= get_home_url(); ?>/marketing">Marketing Digital</a></li>
							<li data-aos="fade-right"><a class="services-link" aria-service="video" href="<?= get_home_url(); ?>/video">Video</a></li>
							<li data-aos="fade-right"><a class="services-link" aria-service="animacion" href="<?= get_home_url(); ?>/animacion">Animación 2D</a></li>
							<li data-aos="fade-right"><a class="services-link" aria-service="fotografia" href="<?= get_home_url(); ?>/fotografia">Fotografía</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="home-slide" data-anchor="clientes">
		<section class="section section-clientes" >
			<div class="container">
				<?php $clients = ['arie', 'acantilado', 'arqui', 'acceso', 'cafae', 'chs', 'compartamos', 'contugas', 'cirujanos', 'engie', 'expotextil', 'hilarte']; 
					  $clientstwo = ['inkafarma', 'interseguro', 'mincetur', 'rabellz', 'minedu', 'olenka', 'pieza', 'pelikano', 'srburns', 'termix', 'tottus'];
				?>
				<h1 id="anchor-clients">Nuestros<br><strong>Clientes</strong></h1>
				<div class="columns full">
					<div class="slick">
						<div>
							<div class="columns is-multiline">
							<?php foreach($clients as $client): ?>
								<div data-aos="fade-up" data-aos-anchor="#anchor-clients" class="column is-3"><div class="image"><img src="<?= get_template_directory_uri(); ?>/img/cliente-<?= $client?>.jpg" ></div></div>
							<?php endforeach; ?>	
							</div>
						</div>
						<div>
							<div class="columns is-multiline">
							<?php foreach($clientstwo as $client): ?>
								<div data-aos="fade-up" data-aos-anchor="#anchor-clients" class="column is-3"><div class="image"><img src="<?= get_template_directory_uri(); ?>/img/cliente-<?= $client?>.jpg" ></div></div>
							<?php endforeach; ?>	
							</div>
						</div>
					</div>
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
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-mincetur.png">
							<div class="testimonio-text">
								<span>Mincetur</span>
								<h2>Melissa Romani</h2>
							</div>
						</div>
						<p>"Es complicado encontrar proveedores que comprendan exactamente los productos que necesitas. Trabajar con ustedes ha sido un intercambio constante de conocimientos que va más allá de cumplir con un contrato para elaborar materiales audiovisuales. Han logrado el propósito que buscábamos."</p>
					</div>
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-chs.png">
							<div class="testimonio-text">
								<span>CHS Alternativo</span>
								<h2>Silvia Yopla</h2>
							</div>
						</div>
						<p>"Trabajamos un material con corte educativo que implicó que pensemos y repensemos hasta tener el guíon indicado. La creatividad y compromiso del equipo de Black Peppa permitió que tengamos un súper material, claro, didáctico y eficaz."</p>
					</div>
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-cafae.png">
							<div class="testimonio-text">
								<span>CAFAE-SE</span>
								<h2>Johans Herencia</h2>
							</div>
						</div>
						<p>"Trabajamos con Black Peppa hace dos años y nos enrumbamos en nuevos proyectos junto con la institución que represento. Muy profesionales y divertidos, 100% recomendados."</p>
					</div>
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-arqui.png">
							<div class="testimonio-text">
								<span>Arqui+</span>
								<h2>Arq. Olenka Marquina</h2>
							</div>
						</div>
						<p>"Trabajar con gente creativa y que te complementa es la parte más importante cuando pides un servicio relacionado a audiovisuales. Después de más de 5 años de realizar fotos y vídeos con Black Peppa puedo recomendar sus servicios a ojos cerrados."</p>
					</div>
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-compartamos.png">
							<div class="testimonio-text">
								<span>Compartamos Financiera</span>
								<h2>Fiorella Domenack</h2>
							</div>
						</div>
						<p>"<!--Es muy difícil encontrar en una sola propuesta, lo creativo y lo estratégico. Creo que Black Peppa cuenta con ambos atributos.-->Gracias a su avispada creatividad hemos podido co-crear y conseguir productos muy buenos, en plazos de tiempo exigentes. Y además sin perder el objetivo trazado y la planificación que asegura que cada proceso se cumpla con calidad. Sumado a ello su flexibilidad y la pasión por lo que hacen, los convierte en una excelente opción."</p>
					</div>
					<div class="column is-4">
						<div class="testimonio-top">
							<img src="<?= get_template_directory_uri(); ?>/img/testimonio-interseguro.png">
							<div class="testimonio-text">
								<span>Interseguro</span>
								<h2>Carla Vegas</h2>
							</div>
						</div>
						<p>"Ya van varios años trabajando juntos y espero q sean varios más. Siempre súper dispuestos para sacarnos de apuros y con excelentes resultados, captando lo que queremos y también aportando ideas cuando no sabemos lo que queremos. ¡Recomendados mil veces!"</p>
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
					<div class="column has-image">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.4/fullpage.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
	
	// Remove all this fancy JS if it's mobile or tablet..
	if($(window).width() <= 768 || $(window).height() >= 1024) { 
		$('#fullpage').removeAttr('id');
		$('[data-anchor="nosotros"]').attr('id', 'nosotros');
		$('[data-anchor="servicios"]').attr('id', 'servicios'); 
		$('[data-anchor="clientes"]').attr('id', 'clientes'); 
		$('[data-anchor="contacto"]').attr('id', 'contacto'); 

		$(".slick").removeClass('slick');

	}

	// Thanks, I hate it!
	new fullpage('#fullpage', {
		//options here
		licenseKey: 'xxxx-xxxx-xxxx-xxxx',
		autoScrolling: true,
		sectionSelector: '.home-slide',
		anchors: ['home', 'nosotros', 'servicios', 'clientes', 'testimonios', 'contacto'],
		onLeave: function(origin, destination, direction) {
			if (destination.index == 0) {
				$('.navbar-bottom').addClass('home');
			} else if (destination.index != 0 && origin.index == 0) {
				$('.navbar-bottom').removeClass('home');
			}
		}
	});

	// Slick you save my life once again
	$('.slick').slick({
		arrows: false,
		dots: true
	});
</script>
<script src="<?= get_template_directory_uri(); ?>/js/home.js"></script>
<?php get_footer() ?>
