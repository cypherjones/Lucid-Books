

jQuery(document).ready(function($){
	$('.shareable-img')
	.on('click', function(){
		$(this)
		.find('.shareable-popup', this)
		.addClass('open');
	})
});