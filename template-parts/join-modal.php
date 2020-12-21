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
      <label class="modal-input">
        <input type="checkbox" name="agreedCheckbox" onclick=""><span class="join-agreementFormLabel"><a href="<?php echo home_url('/privacy/') ?>">個人情報保護方針</a>に同意する</span>
      </label>
      <button type="submit" onclick="return checkAgree();" class="join-submit">
        <span class="join-submit-inner">入会する</span>
        <div class="join-submit-icon"><?php echo file_get_contents(get_template_directory_uri() . '/assets/images/icons/icon_external.svg'); ?></div>
      </button>
    </div>
  </div>
</div>