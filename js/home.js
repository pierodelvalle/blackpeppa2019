(function() {
  $('.services-link').hover(function(){
  	let service = $(this).attr('aria-service');
  	$('.image-screen').addClass(service);
  }, function(){
  	$('.image-screen').removeClass().addClass('image-screen');
  });

  var spin = 0;
  var limit = 20;
  $('.the-astronaut div.image').on('click', function() {
    spin++;
    switch (spin) {
      case limit-5:
        alert("OK, eso es suficiente. Me estoy mareando.");
        return;
      case limit-4:
        alert("¿No tienes algo mejor que hacer?");
        return;
      case limit-3:
        alert("Vale, una vuelta más pero de ahí ya basta.");
        $(this).addClass('animated').on('animationend', function() {
          $(this).removeClass('animated')
        })
        return
      case limit-2:
        alert("¿Que te dije?");
        return
      case limit-1:
        alert("No.");
        return
      case limit:
        alert("Me voy.");
        $('.the-astronaut img.image').attr('title', "No.");
        $(this).addClass('leave');
    }

  	$(this).addClass('animated').on('animationend', function() {
  		$(this).removeClass('animated')
  	})

  })

  $('.section-contacto .image').hover(function() {
    $('.image-phone').addClass('animated')
  }, function() {
    $('.image-phone').removeClass('animated')
  })

})();