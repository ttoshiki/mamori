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

  function mainVideoFadeout() {
    jQuery('.home__mainVideoSkip').fadeOut(500)
    jQuery('.home__mainVideo').fadeOut(1000)
    setTimeout(() => {
      jQuery('.home__mainVideo').remove()
    }, 1000);
  }

  setTimeout(() => {
    mainVideoFadeout()
  }, 8200);

  jQuery('.home__mainVideoSkip').on('click', function() {
    mainVideoFadeout()
  })

})


