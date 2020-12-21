"use strict";

jQuery(function() {
  function removeEmailForm() {
    if (window.innerWidth < 480) {
      console.log('hoge')
      jQuery('.form-item.-sp input').removeClass('wpcf7-validates-as-required')
      // wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email
    } else {
      console.log('hoge')
      jQuery('.form-item.-pc input').removeClass('wpcf7-validates-as-required')
      jQuery('.form-item.-pc input').removeClass('wpcf7-validates-as-email')
    }
  }

  removeEmailForm()

  window.addEventListener('resize', function(e) {
    removeEmailForm()
  })

})


