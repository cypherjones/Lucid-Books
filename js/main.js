jQuery(document).ready(function($){

  // control - debugger
  console.log('we\'re rolling')
  // add vars and pop up container
  $pop = '<div class="pop">' +
           '<div class="pop-content">' +
              '<div id="pop-img"><img src="" alt=""></div>' +
              '<div id="pop-share"></div>' +
            '</div>' + 
          '</div>';

  $('body').append($pop);
  $('.pop').hide();


  // popup driver
  $('.popup').each(function() {
    // hide the share buttons
    // $('.share-me').hide()
    // open the popup on click
    $(this).on('click', function (e) {
      // don't open a new page
      e.preventDefault();
      // grab the image
      let $i = $(this),
          $code = $i.find('img').attr('src'),
          $share = $i.next('.share-me').html();
      // add image to popup container
      if ( $('.pop').length > 0 ) {
        // add image here
        $('#pop-img')
        .html(`<img src="${$code}">`);
        // add share html
        $('#pop-share')
        .html($share);
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
