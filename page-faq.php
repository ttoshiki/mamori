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
		<div class="faq__wrapper">
      <div class="heading__wrapper">
        <h1 class="heading -en">Q&A</h1>
        <span class="heading__subHeading">よくあるご質問</span>
      </div>
      <div class="faq__pageLinks">
        <a href="#workspace" class="faq__pageLink -workspace">ワークスペースについて</a>
        <a href="#corporate-use" class="faq__pageLink -corporateuse">法人利用について</a>
        <a href="#other" class="faq__pageLink -other">その他</a>
      </div>
      <section class="faq__workspace" id="workspace">
        <h2 class="faq__heading">ワークスペースについて</h2>
        <ul class="faq__list">
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                予約は必要ですか？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  ご予約なくご利用いただけます。 ミーティングルームも空いていれば当日その場で<br class="-pc">ご利用いただけますがご利用時間確認のため、フォームへの入力をお願いします。
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                ドロップインは可能ですか？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  時間会員にご登録いただくことで可能です。ただしスタッフは常駐しておりませんので<br>
                  規定の日時にご来店いただき、鍵の設定が完了した後、ご利用いただけます。<br>
                  <span class="faq__answerCaution">オープン直後はスタッフ常駐日時が変則的になります。<br class="-pc">詳しくは「NEWS(お知らせ)」でご確認ください。</span>
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                施設内で飲食はできますか?
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  施設内でご飲食いただけます。匂い、音など他のお客様へのご配慮をお願いいたします。<br>
                  また食べこぼし飲みこぼしにご注意ください。
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                ミーティングルームの利用は有料ですか？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  時間会員は有料、月額会員は無料です。（月の利用時間制限あり）<br>
                  ミーティングルームのご利用は(マイページ内)のご予約ページからお申し込みください。
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                ゲストを招いて打合せをしたいのですが。
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  ゲストビジターとしてミーティングルームへ無料でお招き入れいただけます。<br>
                  ミーティングルームのご利用は(マイページ内)のご予約ページからお申し込みください。
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                ミーティングルームだけの利用は可能ですか？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  時間会員にご登録いただくことで2名個室のご利用が可能です。<br>
                  4名個室は月額会員さまのみ、ご利用が可能となっております。
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                途中で外出はできますか？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  外出・再入室はご自由にどうぞ。
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                施設内で電話・zoom・会話はできますか？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  可能です。<br>
                  ただMamori自体が“静寂”をコンセプトとしておりますので、<br class="-pc">
                  声の大きさや会話時間などご配慮をお願いいたします。<br>
                  WEB会議等のご利用は完全個室のミーティングルームをおすすめいたします。
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                月額会員から時間会員へ<br class="-sp">変更する際の手続きを<br class="-sp">教えてください。
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  毎月10日の「ご見学・お手続き」時間までに<a href="<?php echo home_url('/contact/'); ?>" class="faq__textLink">お問い合わせフォーム</a>よりご連絡ください。<br>
                  Mamoriからのメール受信を持ちまして、翌月からの時間会員への変更が適用となります。<br>
                  <span class="faq__answerCaution">
                    ご連絡後 2日を経過しても受付メールが届かない場合はお問い合わせください。<br>
                    お問い合わせにご入力いただくメールアドレスは、会員登録時と同じものでお願いします。<br>
                  </span>
                  <span class="faq__answerCaution">
                    会員登録時のメールアドレスが使用できなくなってしまった方は、<br class="-pc">別の有効なメールアドレスを入力し、その旨を「お問い合わせ内容」にご記載ください。　
                  </span>
                </p>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <section class="faq__corporateUse" id="corporate-use">
        <h2 class="faq__heading">法人利用について</h2>
        <ul class="faq__list">
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                法人利用はできますか？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  <span class="faq__answerList">固定席を契約いただき<br class="-sp">複数人でお使いいただく<br></span>
                  <span class="faq__answerList">ミーティングルームのみを<br class="-sp">自由にお使いいただく<br></span>
                  など、専用プランを作ることも可能ですので<br>
                  <a href="<?php echo home_url('/contact/'); ?>" class="faq__textLink">お問い合わせフォーム</a>よりお聞かせください。
                </p>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <section class="faq__other" id="other">
        <h2 class="faq__heading">その他</h2>
        <ul class="faq__list">
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                駐車場や駐輪場はありますか？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  駐車場・駐輪場のご用意はございません。<br>
                  公共交通機関か周辺の時間貸駐車場・駐輪場をご利用ください。
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                料金の支払い方法を教えてください。
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  お支払い方法はクレジットカード払いのみ承っております。
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                ロッカーはありますか？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  Mamori内にロッカーのご用意はございません
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                申し込みから最短何日で利用できますか？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  最短で即日ご利用可能です。
                </p>
              </div>
            </div>
          </li>
          <li class="faq__item">
            <div class="faq__questionWrapper">
              <span class="faq__itemQuestionLabel">Q</span>
              <p class="faq__question">
                利用できる時間は？
              </p>
              <div class="faq__questionIcon -plus isShow"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_plus_circle.svg'); ?></div>
              <div class="faq__questionIcon -minus"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_minus_circle.svg'); ?></div>
            </div>
            <div class="faq__questionAnswer">
              <div class="faq__questionAnswerInner">
                <span class="faq__itemAnswerLabel">A</span>
                <p class="faq__answer">
                  24時間365日いつでもご利用いただけます。<br>
                  ただしプランによってはご利用時間が決まっていることもございます。<br>
                  詳しくは各プランのご利用可能時間をご確認ください。
                </p>
              </div>
            </div>
          </li>
        </ul>
      </section>
    </div>
	</main><!-- #main -->

<?php
get_footer();
