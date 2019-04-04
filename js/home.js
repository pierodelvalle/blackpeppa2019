(function() {
  $('.services-link').hover(function(){
  	let service = $(this).attr('aria-service');
  	$('.image-screen').addClass(service);
  }, function(){
  	$('.image-screen').removeClass().addClass('image-screen');
  });

  $('.image-astronaut').on('click', function() {
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