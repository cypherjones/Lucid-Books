jQuery(document).ready(function($){

	let sum = 0;
	
 $('#popup-container').each(function(index, value){

 		sum+= value; 

 });
 console.log(sum);
});
