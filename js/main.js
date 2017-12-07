jQuery(document).ready(function($){

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

			let c = index,
					n = c + 1,
					p = c - 1,
					$n = `#popup-${n}`;
					return $n;

			// $('.next-pop').on('click', function(){
			// 	console.log(c)
			// })
		});



		$('.next-pop').on('click', function(){
			console.log($n);
		});
	});
}); 
