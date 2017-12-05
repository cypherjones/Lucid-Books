jQuery(document).ready(function($){

	$('.share-container').each(function(){

		$(this).find('.shareable-img', this).each(function(index, value){
			console.log(`${index}`);
			$(this).attr('data-target', `#popup-${index}`);
		});

		$(this).find('.shareable-popup', this).each(function(index, value){
			$(this).attr('id', `popup-${index}`);
		});

		$('.next-pop').on('click', function(){
			let $n = $(this).closest('.shareable-popup').attr('id');
			let _n = $(this).next('.shareable-popup');

			let $m = _n.closest('.shareable-popup').next('.shareable-popup').attr('id');

			console.log($n + $m);
		})



	});
}); 
