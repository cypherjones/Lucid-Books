var maxHeight = -1;
$('.slick-slide').each(function() {
  if ($(this).height() > maxHeight) {
    maxHeight = $(this).height();
  }
});
$('.slick-slide').each(function() {
  if ($(this).height() < maxHeight) {
    $(this).css('margin', Math.ceil((maxHeight-$(this).height())/2) + 'px 0');
  }
});

jQuery(document).ready(function($){
	$('.shareable-img').on('click', function(){
	console.log('yep, we got you.');
	});
});