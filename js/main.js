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

		});

	});

	$('.next-pop').on('click', this, function(){
		//set the next element variable
		let _next = $('.shareable-popup.fade').next();

		// remove the active classes
		$('.shareable-popup').fadeOut(function(){
			
			$(this).removeClass('in active');

			_next.fadeIn(function(){
				$(this).addClass('in active');
			})
		})
		// debug
		console.log('boo');
	});

}); 
