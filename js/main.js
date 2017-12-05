jQuery(document).ready(function($){
	
 $('#popup-container').each(function(){

 	$this = $(this).text();

 	let i = 0;

 	if ($this.length > 0) {
 		i++;
 	}


 	console.log(i);

 });
});
