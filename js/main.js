jQuery(document).ready(function($){


  $('.popup').each(function(){
    $('.share-me').hide()

    $(this).on('click', function (e) {
      e.preventDefault();
      let $code = $(this).html();
      console.log($code);
    })
  });
 		
}); 
