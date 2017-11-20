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
	const $popup = $('.shareable-popup');
	  

	$('#popup-container').each(function(){

		$(this).children('.shareable-img').on('click', function(){

			console.log('foo');

		})
	})


	$('#popup-container').find('.shareable-img').each(function(i){


		$(this).on('click', function(){
			
			console.log('got a clicker');

			if($(this).children('.shareable-popup:visible').length == 0) {


				$popup.find('.shareable-popup img').fadeIn("slow");
				$this = $popup.find().html();
				console.log('length is something ' + $this);

			}
			
		})
	})


	$popup.find('.shareable-img').each(function(){

		let thisImg = $(this).find('')

		$(this).on('click', function(e){

			e.preventDefault();

			// $(this).next('.shareable-popup').addClass('open');

			// console.log("testing bitch")

			if($(this).children('.shareable-popup:visible').length == 0) {


				$popup.find('.shareable-popup img').fadeIn("slow");
				$this = $popup.find().html();
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
