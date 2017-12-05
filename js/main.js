jQuery(document).ready(function($){

	$('.share-container').each(function(){

		$(this).find('.shareable-img', this).each(function(index, value){
			console.log(`${index}`);
			$(this).attr('data-target', `#popup-${index}`);
		});

		$(this).find('.shareable-popup', this).each(function(index, value){
			$(this).attr('id', `popup-${index}`);

			$(this).each(function(){

			let n = $(this);
			let $next = n.eq(n.index(this) + 1);

			let l = n.attr('id');
			let m = $next.attr('id');

			console.log(`${l} is before ${m}`)
			})
		});

			



	});
}); 
