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


	$('.shar')

	$popup.find('.shareable-img').each(function(){

		$(this).on('click', function(e){

			e.preventDefault();

			// $(this).next('.shareable-popup').addClass('open');

			// console.log("testing bitch")

			if($(this).children('.shareable-popup:visible').length == 0) {


				$(this).find('.shareable-popup').fadeIn("slow");
				$this = $(this).text();
				console.log('length is something ' + $this);

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
