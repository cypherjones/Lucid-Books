jQuery(document).ready(function($){


  $('.popup').each(function(){
    $('.share-me').hide()

    $(this).on('click', function (e) {
      e.preventDefault();
      console.log('we have lift off')
    })
  });
 		
}); 
