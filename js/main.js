jQuery(document).ready(function($){


  $('.popup').each(function(){
    $('.share-me').hide()

    $(this).on('click', function (e) {
      // don't open a new page
      e.preventDefault();
      // grab the image
      let $code = $(this).html(),
          $share = $(this).closest('.share-me').html();
      console.log($code + $share);
    })
  });
 		
}); 
