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
		// $(this).on('click', function(e){
		// 	e.preventDefault();
		// 	$(this).next('.shareable-popup').addClass('open');
		// 	console.log("testing bitch")
		// })

	})

	$('.shareable-img').each(function(){
		$(this).on('click', function(e){
			e.preventDefault();
			$('.shareable-popup').addClass('open');
		})
	})
	$('.close-popup').each(function(){
		$(this).on('click', function(){
			$('.shareable-popup').removeClass('open');
		});
	});
 


});
