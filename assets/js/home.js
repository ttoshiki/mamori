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

  const video = document.querySelector('video')

  function mainVideoFadeout() {
    jQuery('.home__mainVideoSkip').fadeOut(500)
    jQuery('.home__mainVideo').fadeOut(1000)
    setTimeout(() => {
      jQuery('.home__mainVideo').remove()
    }, 1000);
  }

  video.addEventListener('canplay', function() {
    jQuery('.home__loader').remove()
    video.play()
    jQuery('.home__mainVisual').append('<button type="button" class="home__mainVideoSkip -en">SKIP</button>')
    setTimeout(() => {
      jQuery('.home__mainVisual').append('<img src="/wp-content/themes/mamori/assets/images/home/main.jpg" alt="" class="home__mainImage">')
    }, 500);
    setTimeout(() => {
      mainVideoFadeout()
    }, 8200);
    jQuery('.home__mainVideoSkip').on('click', function() {
      mainVideoFadeout()
    })
  })
  video.load()

})


