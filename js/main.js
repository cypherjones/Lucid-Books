jQuery(document).ready(function($){

	$('.share-container').each(function(){

		$(this).find('#popup-container', this).each(function(){
			console.log('yes, sir');
		})

	});
});
