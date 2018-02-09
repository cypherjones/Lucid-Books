jQuery(document).ready(function($){


  $('.popup').each(function(){
    $('.share-me').hide()

    $(this).on('click', function (e) {
      // don't open a new page
      e.preventDefault();
      // grab the image
      let $code = $(this).html(),
          $share = $(this).next('.share-me').html(),
          $pop = '<div class="pop">' +
                   '<div class="pop-content">' +
                       $code + $share +
                    '</div>' + 
                  '</div>';

      $('body').append($pop);


      // console.log($code + $share);
    })
  }); 
 		
}); 
