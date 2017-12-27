jQuery(document).ready(function($){


$(".popup").on("click", function(e) {
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
