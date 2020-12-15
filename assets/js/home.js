"use strict";

jQuery(function() {
  // サイドメニュー途中から固定
  const sideMenu = jQuery("#side-conversion")
  const positionY = sideMenu.offset().top - 24;

  jQuery(window).on("scroll", function () {
    if (jQuery(window).scrollTop() > positionY) {
      sideMenu.addClass("-fixed");
    } else {
      sideMenu.removeClass("-fixed");
    }
  });
})


