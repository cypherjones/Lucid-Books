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
	$('.shareable-img').each(function(){

		$(this).on('click', function(){
			
			$('.shareable-popup').addClass('open');

		});

	});

	$('.shareable-popup').each(function(){

		$('.close-popup').on('click', function(){

			$('.shareable-popup').removeClass('.open');

		})

	})

});
