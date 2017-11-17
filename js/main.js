

jQuery(document).ready(function($){
	$('.shareable-img').on('click', function(){
		
		$('.shareable-popup', this).addClass('open');

	});
	$('.close-popup').on('click', function(){
		$('.shareable-popup', this).removeClass('open');
	})
});