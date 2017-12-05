jQuery(document).ready(function($){

	$('.share-container').each(function(){

		$(this).find('.shareable-img', this).each(function(){
			console.log('yes, sir');
		})

	});
});
