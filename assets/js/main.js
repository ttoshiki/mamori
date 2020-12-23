"use strict";

jQuery(function() {
  jQuery('a[href^="#"]').on('click', function(){
    var speed = 300;
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

  // spメニューOPEN
  jQuery(".header__trigger").on('click', function() {
    if ((jQuery(this)).hasClass("-opened")) {
      jQuery(".header__hammenuWrapper").fadeOut(300);
      jQuery(".header__cover").fadeOut(300);
    } else {
      jQuery(".header__hammenuWrapper").fadeIn(300);
      jQuery(".header__cover").fadeIn(300);
    }
    if (!(jQuery("#header").hasClass("-fixed"))) {
      jQuery(".header").addClass('-fixed');
    } else {
      jQuery("header").removeClass("-fixed");
    }
    jQuery(this).toggleClass('-opened')
    jQuery(".header__trigger").toggleClass('active');
  });

  // spメニューページ内リンク
  jQuery(".header__hammenuList a").on("click", function() {
    jQuery(".header__hammenuWrapper").css('display', 'none');
    jQuery(".header__trigger").removeClass('-opened');
    jQuery(".header__trigger").toggleClass('active');
  })

  // spメニューモーダルボタン
  jQuery(".header__hammenuConversion .open-join-modal").on("click", function() {
    console.log('hoge')
    jQuery(".header__hammenuWrapper").css('display', 'none');
    jQuery(".header__trigger").removeClass('-opened');
    jQuery(".header__trigger").toggleClass('active');
  })
})


