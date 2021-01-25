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
            <h1>hello</h1>
            <label>予約をする部屋
              <select id="room-name" require>
                <option value="会議室A">応接室（4名個室）</option>
                <option value="会議室B">ミーティングルーム（2名個室）</option>
              </select>
            </label>
            <div>
              <label>使用開始日時</label>
              <input type="text" class="reserve__startDate" id="start-date" readonly>
              <input type="text" class="reserve__startTime" id="start-time" readonly>
            </div>
            <div>
              <label>使用終了日時</label>
              <input type="text" class="reserve__endDate" id="end-date" readonly>
              <input type="text" class="reserve__endTime" id="end-time" readonly>
            </div>
            <button onclick="execute()">execute</button>
            <input type="button" id="closeBtn" value="close">
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
