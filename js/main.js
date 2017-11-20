jQuery(document).ready(function($){
	// $('.shareable-img')
	// .on('click', function(){
	// 	$(this)
	// 	.find('.shareable-popup', this)
	// 	.addClass('open');
	// });

	// $('.close-popup')
	// .on('click', function(){

	// 	$(this)
	// 	.parent('.shareable-img')
	// 	.find('.shareable-popup', this)
	// 	.removeClass('open');

	// })
	$popup = $('#share-pop');

	$popup.find('.shareable-img').each(function(){

		$(this).on('click', function(e){

			e.preventDefault();

			// $(this).next('.shareable-popup').addClass('open');

			// console.log("testing bitch")

			$(this).next('shareable-popup').each(function(){

				if($(this:visible).length == 0 ) {
					console.log('count');
				}

			})

			if($(this).next('.shareable-popup:visible').length == 0) {

				$('shareable-popup').fadeIn("slow");

				console.log('length is something')

			}
		});
	});
	$('.close-popup').each(function(){
		$(this).on('click', function(){
			$('.shareable-popup').removeClass('open');
			console.log('closed');
		});
	});
 


});
