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


  $.fn.almComplete = function(alm) {
    // popup driver
    $('.popup').each(function() {
      // hide the share buttons
      $('.share-me').hide();
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

        $('.share-btn').on('click', function(e){
            
          e.preventDefault();

          windowPopup($(this).attr('href'), 500, 300); 

        });

        //  $('.nc_tweetContainer a').on("click", function(e) {
        // e.preventDefault();
        // windowPopup($(this).attr("href"), 500, 300);
        // console.log('foo');
      });

      function windowPopup(url, width, height) {
          // Calculate the position of the popup so
          // it’s centered on the screen.
          let left = (screen.width / 2) - (width / 2),
              top = (screen.height / 2) - (height / 2);
          window.open(
            url,
            "popup",
            "menubar=no,toolbar=no,resizable=no,scrollbars=no,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
          );
        };

        $('.share-btn').on('click', windowPopup);

      });
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
  }
    


  var quote = $('blockquote');

  if (quote.find('data-author') == 'Jim Essian') {
    console.log('foo bars, baby');
  };

    
  });


 		
// }); 
