jQuery(document).ready(function($){

	$.ajaxSetup({ cache: true });
  $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
    FB.init({
      appId: '284281862094433',
      version: 'v2.7' // or v2.1, v2.2, v2.3, ...
    });     
    $('#loginbutton,#feedbutton').removeAttr('disabled');
    FB.getLoginStatus(updateStatusCallback);
  });

  $('.facebook').on('click', function(){

  	 FB.ui({
	    method: 'share',
	    display: 'popup',
	    href: 'https://www.lucidbooks.net/share',
	  }, function(response){

	  	if (response && !response.error_message) {
      alert('Posting completed.');
	    } else {
	      alert('Error while posting.');
	    }
	  });

  })

	

	let $n = ''.
			c = '',
			n = '',
			p = '',
			nId = '',
			$i = '';

	$('.share-container').each(function(){

		$(this).find('.shareable-img', this).each(function(index, value){

			$(this).attr('data-target', `#popup-${index}`);

		});

		$(this).find('.shareable-popup', this).each(function(index, value){
			// add id loop num to the element
			let $index = $(this).attr('id', `popup-${index}`);
			// debug by showing the current index num
			$(this).find('.cap').html(`${index}`);

			c = index,
			$i = $(this);
			n = c + 1;
			p = c - 1;

			$i.find('.next-pop').attr('href', `#popup-${n}`);
 			$i.find('.prev-pop').attr('href', `#popup-${p}`);

 			$i.on('shown.bs.modal', function(e){

 				let l = window.location.href,
 						t = $(this).closest('.shareable-popup').find('.share-img-box img').attr('alt'),
 						ti = $(this).closest('.shareable-popup').find('.share-img-box img').attr('src'),
 						$href = 'https://www.lucidbooks.net/share.php?u=' + l + '&amp;t=' + t;

 						$('meta[property="og:title"]').attr('content', t);
						$('meta[name="twitter:title"]').attr('content', t);
						$('meta[property="og:image"]').attr('content', ti);
						$('meta[property="og:image:secure_url"]').attr('content', ti);

 				// $href = l;

 				// $(this).find('.facebook').attr('href', $href).attr('data-link', $href);

 				console.log('it\'s fired');

 			})

		});


		$('.next-pop').on('click', function(){

			let fbt = '';

			// let $hrefTest = $(this).closest('.shareable-popup').find('.facebook').attr('href');

			// $(this).closest('.shareable-popup').find('.facebook').attr('href', $title);

			// console.log($hrefTest);



 		});

		$(".bfe-social-share").on("click", function(e) {
      e.preventDefault();
      windowPopup($(this).attr("href"), 500, 300);
    });

 		function windowPopup(url, width, height) {
        // Calculate the position of the popup so
        // it’s centered on the screen.
        let left = (screen.width / 2) - (width / 2),
            top = (screen.height / 2) - (height / 2);
        window.open(
          url,
          "",
          "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
        );
      };
 		
	});
}); 
