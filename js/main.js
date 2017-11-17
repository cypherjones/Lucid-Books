

jQuery(document).ready(function($){
	$('.shareable-img')
	.on('click', function(){
		$(this)
		.find('.shareable-popup', this)
		.addClass('open');
	})
	$('.close-popup')
	.on('click', function(){

		$(this)
		.parent()
		.find('.shareable-popup', this)
		.removeClass('open');

	})
});