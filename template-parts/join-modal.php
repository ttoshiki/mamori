<div id="modal" class="join-modal">
  <div class="modal-content">
    <div class="modal-close-button">
      <span></span>
      <span></span>
    </div>
    <div class="modal-body">
      <p class="modal-paragraph">
        会員登録をご希望の方は、Mamoriの個人情報保護方針をご一読いただき、<br>
        同意のうえ、下記ボタンより入会フォームにお進みください。
      </p>
      <div class="modal-input">
        <input type="checkbox" name="agreedCheckbox" id="modal-check">
        <label for="modal-check" class="join-form-label"><a href="<?php echo home_url('/privacy/') ?>" class="modal-link">個人情報保護方針</a>に同意する</label>
      </div>
      <button type="button" class="join-submit" onclick="window.open('//www.kaihipay.jp/forms?form_code=2528567304314701')" disabled>
        <span class="join-submit-inner">入会する</span>
        <div class="join-submit-icon"><?php echo file_get_contents(get_template_directory_uri() . '/assets/images/icons/icon_external.svg'); ?></div>
      </button>
    </div>
  </div>
</div>