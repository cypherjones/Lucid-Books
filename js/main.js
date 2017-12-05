jQuery(document).ready(function($){

	$('.share-container').each(function(){

		$(this).find('.shareable-img', this).each(function(index, value){
			console.log(`${index}`);
			$(this).attr('data-target', `#popup-${index}`);
		});

		$(this).find('.shareable-popup', this).each(function(index, value){
			$(this)
			.attr('id', `popup-${index}`)
			.addClass('active');

			$(this).find('.next-pop').on('click', function(){
				console.log('boo');
			});

		});
	});
}); 
