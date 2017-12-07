jQuery(document).ready(function($){

	let $n = ''.
			c = '',
			n = '',
			p = '',
			nId = '';

	$('.share-container').each(function(){

		$(this).find('.shareable-img', this).each(function(index, value){
			// debug
			// console.log(`${index}`);
			$(this).attr('data-target', `#popup-${index}`);
		});

		$(this).find('.shareable-popup', this).each(function(index, value){
			// add id loop num to the element
			let $index = $(this).attr('id', `popup-${index}`);
			// debug by showing the current index num
			$(this).find('.cap').html(`${index}`);

			c = index,
			$i = $(this);
			// n = c + 1;
			// p = c - 1;

			// $n = `#popup-${n}`;

					n = $i.closest('.col-md-3').next('.col-md-3').find('.shareable-popup').attr('id'),
 					p = $i.closest('.col-md-3').prev('.col-md-3').find('.shareable-popup').attr('id');

					let $n = $i.find('.next-pop').closest('.col-md-3').next('.col-md-3').find('.shareable-popup').attr('id');
 					
 					$p = '';
 
 					$i.find('.next-pop').attr('href', $n);
 					$i.find('.prev-pop').attr('href', p);



			$index.on('hide.bs.modal', function(e){
					console.log('foo');
			});

			$('.next-pop').on('click', function(){

				let $ne = $(this).closest('.col-md-3').next('.col-md-3').find('.shareable-popup').attr('id'),
						$c = $(this);
						
					
				
			})

		});
		


		
	});
}); 
