"use strict";

jQuery(function(){
	var scrollPosition;
	jQuery(".side-conversion-link.-primary").on("click", function() {
		scrollPosition = jQuery(window).scrollTop();
    jQuery('body').addClass('fixed').css({'top': -scrollPosition});
    jQuery('.join-modal').fadeIn(200)
	});
	jQuery(".modal-close-button").on("click", function() {
		jQuery('body').removeClass('fixed').css({'top': 0});
    window.scrollTo( 0 , scrollPosition );
    jQuery('.join-modal').fadeOut(200)
	});
});
