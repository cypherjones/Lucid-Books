jQuery(document).ready(function($){

	$('.share-container').each(function(){

		$(this).find('.shareable-img', this).each(function(index, value){
			console.log(`${index}`);
			$(this).attr('data-target', `#popup-${index}`);
		});

		$(this).find('.shareable-popup', this).each(function(index, value){
			$(this).attr('id', `popup-${index}`);
			$(this).find('span').html(`${index}`);
		});

		$('.next-pop').on('click', function(){
			let $n = $(this).closest('.shareable-popup'),
			    $ne = $n.closest('.col-md-3').next('.col-md-3').find('.shareable-popup');
			// let $n = $(this).closest('.shareable-popup').attr('id');
			
			// let $ne = $(this)
			// .closest('.col-md-3')
			// .next('.col-md-3')
			// .find('.shareable-popup').attr('id');

				$n.removeClass('in').css('display', 'none');
				$ne.addClass('in').css('display', 'block');
			// debug
			console.log('still working');
		});
		$('.modal.fade.in').on('click', function(){
			$('body').addClass('foo');
			console.log('remove the modal');
		})
	});
}); 
