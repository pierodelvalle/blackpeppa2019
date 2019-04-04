(function() {

$(document).ready(function() {
	$('.overlay-enter').addClass('animate');
});

$("a:not([href^='#']):not([data-fancybox])").click(function(e){
	$('.overlay-exit').addClass('animate');
});

$('#menu-button').click(function(e) {
	e.preventDefault();
	$('.navbar-content').slideToggle();
});

})();