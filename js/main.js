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
	  


	$('.shareable-img').each(function(i){
		// set var for img loop
	  let num = i++;
	  // add the var loop number to img
		$(this).find('img').attr('data-num', num);
		//find the nearest popup
		$currentPop = $popup.find('.shareable-popup').each(function(){
			$popThis = $(this);
			console.log($popThis);
		});

		$(this).on('click', function(){
			console.log('got a clicker' + num);
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
