"use strict";

jQuery(function() {
  function fixSidebar() {
    // サイドメニューの位置を計算
    const sideMenu = jQuery("#side-conversion")
    const positionY = sideMenu.offset().top - 24;

    // サイドメニュー途中から固定
    jQuery(window).on("scroll", function () {
      if (jQuery(window).scrollTop() > positionY) {
        sideMenu.addClass("-fixed");
      } else {
        sideMenu.removeClass("-fixed");
      }
    });
  }

  fixSidebar()

  window.addEventListener('resize', function(e) {
    fixSidebar()
  })

})


