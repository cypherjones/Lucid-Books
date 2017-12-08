jQuery(document).ready(function($){

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

		});

		$('.next-pop').on('click', function(){

			let $title = $(this).closest('.shareable-popup').find('.share-img-box img').attr('alt'),
			    fbt = '';
				
			$('meta[property="og:title"]').attr('content', $title);
			$('meta[name="twitter:title"]').attr('content', $title);


			let $hrefTest = $(this).closest('.shareable-popup').find('.facebook').attr('href', $title);

			console.log($hrefTest);



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
