jQuery(document).ready(function($){

  // control - debugger
  console.log('we\'re rolling')
  // add vars and pop up container
  $pop = '<div class="pop">' +
           '<div class="pop-content">' +
               // $code + $share +
            '</div>' + 
          '</div>';

  $('body').append($pop);
  $('.pop').hide();


  // popup driver
  $('.popup').each(function() {
    // hide the share buttons
    $('.share-me').hide()
    // open the popup on click
    $(this).on('click', function (e) {
      // don't open a new page
      e.preventDefault();
      // grab the image
      let $i = $(this),
          $code = $i.html(),
          $share = $i.next('.share-me').html();
      // 
      if ( $('.pop').length > 0 ) {
        $('.pop-content')
        .append($code + $share);
      }
      // show the popup
      $('.pop').fadeIn(function(){
        $(this).show();
      })
      // console.log($code + $share);

    })
    // close if we click outside of the popup
  $(document).mouseup(function(e){
    // pop up var
    let $popup = $('.pop-content'),
        $pop = $('.pop');
    // make sure they're there
    if (!$popup.is(e.target) && $popup.has(e.target).length === 0) {
      // now close each one
      // $popup.fadeOut(function(){
      //   $(this).hide();
      // });
      $pop.fadeOut(function(){
        $(this).hide();
      });
    };
  });
  }); 

 		
}); 
