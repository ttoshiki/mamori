"use strict";

jQuery(function() {
  // slide down
  jQuery(".faq__questionWrapper").click(function () {
    if (!jQuery(this).hasClass("isOpen")) {
      jQuery(this).next().slideDown();
    } else {
      jQuery(this).next().slideUp();
    }
    jQuery(this).toggleClass("isOpen");
    jQuery(".faq__questionIcon", this).toggleClass("isShow");
  });
})


