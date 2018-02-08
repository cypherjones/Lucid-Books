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
                    $code + $share +
                  '</div>';

      $('body').$pop;


      // console.log($code + $share);
    })
  });
 		
}); 
