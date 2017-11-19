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
			$(this).next('.shareable-popup').addClass('open');
			$('.shareable-popup.open').fadeIn(300);
			console.log("testing bitch")
		});

	});
	$('.close-popup').each(function(){
		$(this).on('click', function(){
			$('.shareable-popup').removeClass('open');
		});
	});
 


});
