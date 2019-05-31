<form action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="form" id="form" >
	<label for="name">Nombre</label>
	<input type="text" name="name" placeholder="Tu nombre" autocomplete="off">
	<label for="phone">Teléfono</label>
	<input class="is-half" type="text" name="phone" placeholder="Tu teléfono" autocomplete="off">
	<label for="business">Empresa</label>
	<input class="is-half" type="text" name="business" placeholder="Tu empresa" autocomplete="off">
	<label for="email">Email</label>
	<input type="text" name="email" placeholder="Tu email" autocomplete="off">
	<label for="message">Mensaje</label>
	<textarea name="message" placeholder="¡Cuéntanos de tu proyecto!"></textarea>
	<input type="hidden" value="<?php echo $pagename; ?>" name="page">
	<input type="submit">
</form>
<script src="<?php echo get_template_directory_uri(); ?>/js/form.js"></script>