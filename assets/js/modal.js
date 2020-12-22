"use strict";

jQuery(function(){
	let scrollPosition;
	jQuery(".open-join-modal").on("click", function() {
		scrollPosition = jQuery(window).scrollTop();
    jQuery('body').addClass('fixed').css({'top': -scrollPosition});
    jQuery('.join-modal').fadeIn(200)

    if(jQuery('#modal-check').prop('checked')) {
      jQuery('.join-submit').prop('disabled', false)
    } else {
      jQuery('.join-submit').prop('disabled', true)
    }
  });

	jQuery(".modal-close-button").on("click", function() {
		jQuery('body').removeClass('fixed').css({'top': 0});
    window.scrollTo( 0 , scrollPosition );
    jQuery('.join-modal').fadeOut(200)
    jQuery('#modal-check').prop('checked', false)
  });


  jQuery('#modal-check').change(function() {
    if(jQuery('#modal-check').prop('checked')) {
      jQuery('.join-submit').prop('disabled', false)
    } else {
      jQuery('.join-submit').prop('disabled', true)
    }
  })
});
