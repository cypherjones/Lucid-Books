

jQuery(document).ready(function($){
	$('.shareable-img').on('click', function(){
		
		$('.shareable-popup').addClass('open');

	});
	$('.close-popup').on('click', function(){
		$('.shareable-popup').removeClass('open');
	})
});