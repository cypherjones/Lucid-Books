jQuery(document).ready(function($){

	let $n = ''.
			c = '',
			n = '',
			p = '',
			nId = '',
			$i = '';

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
			n = c + 1;
			p = c - 1;

			$i.find('.next-pop').attr('href', `#popup-${n}`);
 			$i.find('.prev-pop').attr('href', `#popup-${p}`);

 			
			// $index.on('shown.bs.modal', function(e){

			// 		$metaTitle = $i.find('.share-img-box img').attr('alt');
					
			// 		// $('meta[property="og:title"]').attr('content', $metaTitle);

			// 		console.log($metaTitle);
			// });

		});
		$('.next-pop').on('click', function(){
			
 				$cid = $(this).closest('.shareable-popup').attr('id');

 				$metaTitle = $(this).closest('.shareable-popup').find('.share-img-box img').attr('alt');
					
				$('meta[property="og:title"]').attr('content', $metaTitle);

 				console.log($cid);

 			});


		
	});
}); 
