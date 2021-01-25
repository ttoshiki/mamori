<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mamori
 */

get_header();
?>

  <main class="site-main">
		<div class="reserve__wrapper">
      <div class="g-signin2" id="sign-in-button" data-onsuccess="signinChanged"></div>
      <button id="sign-out-button" onclick="signOut()">ログアウト</button>
      <div id="modal" class="reserve__modal">
        <div class="reserve__modalContent">
          <div class="reserve__modalBody">
            <h2 class="reserve__modalTitle">部屋を予約</h2>
            <div class="reserve__modalForm">
              <div class="reserve__formItem">
                <label for="room-name" class="reserve__formLabel">部屋を選択</label>
                <div class="reserve__selectWrapper">
                  <select id="room-name" require>
                    <option value="応接室（4名個室）">応接室（4名個室）</option>
                    <option value="ミーティングルーム（2名個室）">ミーティングルーム（2名個室）</option>
                  </select>
                </div>
              </div>
              <div class="reserve__formItem">
                <label class="reserve__formLabel">日時</label>
                <div class="reserve__dateTimeWrapper">
                  <div class="reserve__dateTime">
                    <input type="text" class="reserve__startDate reserve__selectDate" id="start-date" readonly>
                    <input type="text" class="reserve__startTime reserve__selectTime" id="start-time" readonly>
                    <span class="reserve__selectDateRange">から</span>
                  </div>
                  <span class="reserve__dateTimeBetween">~</span>
                  <div class="reserve__dateTime">
                    <input type="text" class="reserve__endDate reserve__selectDate" id="end-date" readonly>
                    <input type="text" class="reserve__endTime reserve__selectTime" id="end-time" readonly>
                    <span class="reserve__selectDateRange">まで</span>
                  </div>
                </div>
                <p class="reserve__modalErrorMessage -dateTime">日付を正しく入力してください。</p>
                <p class="reserve__modalErrorMessage -permisson">予約する権限がありません。お問い合わせよりご連絡をお願いします。</p>
                <p class="reserve__modalErrorMessage -other">エラーが発生しました。しばらく経ってから再度お試しください。</p>
              </div>
              <hr class="reserve__modalDivider">
              <button onclick="execute()" class="reserve__modalButton">予約する</button>
              <div type="button" id="closeBtn">
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="loading">
        <span class="loader reserve__loader"></span>
      </div>
      <div id="calendar"></div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
