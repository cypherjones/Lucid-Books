jQuery(document).ready(function($){

  // control - debugger
  console.log('we\'re rolling')


  $('.popup').each(function(){
    // hide the share buttons
    $('.share-me').hide()
    // open the popup on click
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

  $(document).mouseup(function(e){
    // pop up var
    let $popup = $('.pop');
    // make sure they're there
    if (!$popup.is(e.target) && $popup.has(e.target).length === 0) {
      // now close each one
      $popup.fadeOut(function(){
        $(this).hide();
      });
    };
  });
 		
}); 
