jQuery(document).ready(function($){

	$('.share-container').each(function(){

		$(this).find('#popup-container', this).each(function(index, value){
			console.log(index)
		})

	});
