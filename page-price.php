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
		<div class="price__wrapper">
      <div class="heading__wrapper">
        <h1 class="heading -en">PRICE</h1>
        <span class="heading__subHeading">料金</span>
      </div>
      <div class="subHeadingHasIcons -bottom">
        <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-left.svg'); ?></div>
        <h2>シェアオフィス<br>コワーキングスペース</h2>
        <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-right.svg'); ?></div>
      </div>
      <section class="price__list">
        <div class="price__tableWrapper -pc">
          <table class="price__listTable">
            <thead></thead>
            <tbody>
              <th rowspan="3" scope="colgroup">プラン</th>
              <th colspan="3" class="-monthly">月額会員</th>
              <tr class="-confined">
                <td rowspan="2">フリーアドレス</td>
                <td colspan="2" scope="rowgroup">固定席</td>
              </tr>
              <tr class="-confined">
                <td>タイプA<br>(半個室以外)</td>
                <td>タイプB<br>(半個室／4席)</td>
              </tr>
              <tr class="-confined">
                <th>入会金</th>
                <td colspan="3"><span class="price__free"><span class="price__freeSmall">オープンキャンペーンのため</span><br><span class="price__freeSmall">10,000円</span> <span class="price__freeArrow">→</span> 無料</span></td>
              </tr>
              <tr>
                <th>利用<br>時間</th>
                <td>
                  フルタイム会員<br>25,000円／月
                  <span class="price__listTime">(24時間)</span>
                </td>
                <td>
                  フルタイム会員<br>30,000円／月
                  <span class="price__listTime -oneday">(24時間)</span>
                </td>
                <td>
                  フルタイム会員<br>50,000円／月
                  <span class="price__listTime -oneday">(24時間)</span>
                </td>
              </tr>
              <tr>
                <th>住所利用・<br>法人登記<br>サービス</th>
                <td>
                  3,000円／月
                  <span class="price__listCaution -topNoMargin">※月2回の書類転送</span>
                  <span class="price__listTime">(ポスト利用は<br>2,000円／月)</span>
                </td>
                <td colspan="2">
                  無料／月
                  <span class="price__listCaution -topNoMargin">※月2回の書類転送</span>
                  <span class="price__listTime">(ポスト利用は2,000円／月)</span>
                </td>
              </tr>
              <tr>
                <th>ミーティング<br>ルーム</th>
                <td>
                  追加料金なし<br>ビジター招待OK
                  <span class="price__listCaution">(月15時間まで無料)<br>※以降1,000円／時間</span>
                </td>
                <td colspan="2">
                  追加料金なし<br>ビジター招待OK
                  <span class="price__listTime">(月30時間まで無料)<br>※以降1,000円／時間</span>
                </td>
              </tr>
            </tbody>
          </table>
          <span class="price__listSmallCaution">※価格は全て税抜です</span>
        </div>
        <div class="price__tableWrapper -tab">
          <table class="price__listTable -monthly">
            <thead>
              <tr>
                <th colspan="3" class="price__listTablePlanName">月額会員</th>
              </tr>
              <tr>
                <th colspan="3">プラン</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="2">フリーアドレス</td>
                <td colspan="2">固定席</td>
              </tr>
              <tr>
                <td>タイプA<br>(半個室以外)</td>
                <td>タイプB<br>(半個室4席)</td>
              </tr>
              <tr>
                <th colspan="3">入会金</th>
              </tr>
              <tr>
                <td colspan="3"><span class="price__free"><span class="price__freeSmall">オープンキャンペーンのため</span><br><span class="price__freeSmall">10,000円</span> <span class="price__freeArrow">→</span> 無料</span></td>
              </tr>
              <tr>
                <th colspan="3">利用時間</th>
              </tr>
              <tr>
                <td>
                  フルタイム会員<br>25,000円／月
                  <span class="price__caution">(24時間)</span>
                </td>
                <td>
                  フルタイム会員<br>30,000円／月
                  <span class="price__caution">(24時間)</span>
                </td>
                <td>
                  フルタイム会員<br>50,000円／月
                  <span class="price__caution">(24時間)</span>
                </td>
              </tr>
              <tr>
                <th colspan="3">住所利用・法人登記サービス</th>
              </tr>
              <tr>
                <td>
                  3,000円／月<br>
                  <span class="price__caution">※月2回の<br>書類転送</span>
                  <span class="price__caution -hasTopMargin">(ポスト利用は<br>2,000円／月)</span>
                </td>
                <td colspan="2">
                  無料／月
                  <span class="price__caution">※月2回の書類転送</span>
                  <span class="price__caution -hasTopMargin">(ポスト利用は2,000円／月)</span>
                </td>
              </tr>
              <tr>
                <th colspan="3">ミーティングルーム</th>
              </tr>
              <tr>
                <td>
                  追加料金なし<br>ビジター招待OK
                  <span class="price__caution">(月15時間まで無料)<br>※以降1,000円／時間</span>
                </td>
                <td colspan="2">
                  追加料金なし<br>ビジター招待OK
                  <span class="price__caution">(月30時間まで無料)<br>※以降1,000円／時間</span>
                </td>
              </tr>
            </tbody>
          </table>
          <span class="price__listSmallCaution">※価格は全て税抜です</span>
        </div>
      </section>
      <section class="price__spaceUsage">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/price/usage_bg-sp.webp" media="(max-width: 480px)" type="image/webp">
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/price/usage_bg-sp.png" media="(max-width: 480px)">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/price/usage_bg.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/usage_bg.jpg" alt="" class="price__usageBg">
        </picture>
        <div class="subHeadingHasIcons -light">
          <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-left.svg'); ?></div>
          <h2>シェアオフィス<br>コワーキングスペース<br>ご利用案内</h2>
          <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-right.svg'); ?></div>
        </div>
        <div class="price__usageInner">
          <h3 class="price__usageHeading">月額会員について<span class="price__usageHeadingSpan">(フリーアドレス・固定席プラン共通)</span></h3>
          <p class="price__usageLead">
            月額会員とは、<br class="-sp">Mamori営業時間中、各規定の時間内で<br>
            固定額にてご利用いただけるプランです。
          </p>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【申し込みに必要なもの】</h4>
            <ul class="price__usageNecessaryList">
              <li class="price__usageNecessaryItem">クレジットカード</li>
              <li class="price__usageNecessaryItem">入退館用ICカード</li>
            </ul>
            <p class="price__usageParagraph">ご来館前に<button type="button" class="price__usageLink open-join-modal">WEBからの会員登録</button>を<br class="-sp">お済ませいただけるとスムーズです。</p>
          </div>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【手続き可能日時】</h4>
            <p class="price__usageParagraph">
              ご見学・お手続き可能時間に承ります。<br>
              その時間内でご都合が悪ければ電話を入れるか<br>
              もしくは<a href="<?php echo home_url('/contact/'); ?>" class="price__usageLink">お問い合わせページ</a>よりご連絡ください。
            </p>
            <span class="price__caution">
              ※オープン直後はスタッフ常駐日時が変則的になります。<br>
              詳しくは「NEWS(お知らせ)」にてご確認ください
            </span>
          </div>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【手続き方法】</h4>
            <p class="price__usageParagraph">
              ICカードにドアのセキュリティ設定が必要なため、<br>
              現地でスタッフ受付が必要です。
            </p>
          </div>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【ご契約条件】</h4>
            <ul class="price__usageList">
              <li class="price__usageItem">料金：各プランによって10,000円〜（税別）／月　※前払い</li>
              <li class="price__usageItem">申込後のキャンセル、返金は不可<br>
                （退会の場合もすでに支払った料金の返金はなし）
              </li>
              <li class="price__usageItem">利用開始日から日割りで料金が発生（当月の日割り料金と翌月1か月分が即時決済）</li>
              <li class="price__usageItem">時間会員からの変更の場合、申込前にご利用された料金は<br class="-pc">
                時間会員でのご利用分として翌月に請求されます。
              </li>
              <li class="price__usageItem">フリーアドレスプランにお申し込みの場合は、<br>
                席の確保をお約束するものではございません。
              </li>
              <li class="price__usageItem">天候やイベント、その他事情により一部席の制限や休館する場合がございます。</li>
              <li class="price__usageItem">ご利用時間はご自身で記録をお願いします。</li>
              <li class="price__usageItem">時間会員からの変更は、申込当日から適用されます。<br class="-pc">明日以降の日から月額会員へ変更をご希望の場合は、変更してのご利用を<br class="-pc">ご希望される日にあらためてお手続きをお願いします。<br>
                （手続き可能日時にお越しください）
              </li>
              <li class="price__usageItem">プラン変更・もしくは解約のお手続きがなければ自動更新になります</li>
              <li class="price__usageItem">更新の際に通知はございません。<br class="-pc">請求完了時に金額を登録アドレスへメールで送付いたします。</li>
            </ul>
          </div>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【退会をご希望の場合】</h4>
            <ul class="price__usageList">
              <li class="price__usageItem">月末で時間会員へ変更を行うには、その月の10日の手続き可能時間中までに<br class="-pc">
                お手続きが必要です。その時間を超えますと自動的に1ヶ月更新されます。
              </li>
              <li class="price__usageItem">時間会員への変更をご希望の場合は、こちらの<a href="<?php echo home_url('/contact/'); ?>" class="price__usageLink">お問い合わせフォーム</a>から<br class="-pc">
                以下の情報をお知らせください。<br>
                <strong>【お名前】【退会ご希望月】</strong><br>
                「受け付けた旨」の事務局からの返信メールを受信されたらお手続きは完了です。
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="price__flow">
        <div class="subHeadingHasIcons">
          <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-left.svg'); ?></div>
          <h2>申し込みまでの流れ</h2>
          <div class="subHeadingHasIconsIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-right.svg'); ?></div>
        </div>
        <div>
          <div class="price__flowSteps">
            <div class="price__flowStepFigure">
              <span class="price__flowStepNumber -en">STEP 00</span>
              <span class="price__flowStepContents">内覧<span class="price__flowStepCaution">(希望者のみ)</span></span>
            </div>
            <div class="price__flowStepText">
              <p class="price__flowParagraph">
                お電話もしくは<a href="<?php echo home_url('/opendays/'); ?>" class="price__usageLink">見学予約フォーム</a>より<br>
                内覧も歓迎いたします。<br>
                ご利用前にゆっくり御覧ください。
              </p>
            </div>
          </div>
          <div class="price__flowSteps">
            <div class="price__flowStepFigure">
              <span class="price__flowStepNumber -en">STEP 01</span>
              <span class="price__flowStepContents">会員情報の登録</span>
            </div>
            <div class="price__flowStepText">
              <p class="price__flowParagraph">
                <button type="button" class="price__usageLink open-join-modal">こちらのフォーム</button>より<br>
                事前に会員情報のご登録をお願いします。
              </p>
            </div>
          </div>
          <div class="price__flowSteps">
            <div class="price__flowStepFigure">
              <span class="price__flowStepNumber -en">STEP 02</span>
              <span class="price__flowStepContents">現地での諸手続き</span>
            </div>
            <div class="price__flowStepText">
              <p class="price__flowParagraph">
                スタッフ対応時間内に現地までお越しいただき、<br>
                ICカードを鍵化する設定を行います。
              </p>
            </div>
          </div>
          <div class="price__flowSteps">
            <div class="price__flowStepFigure">
              <span class="price__flowStepNumber -en">STEP 03</span>
              <span class="price__flowStepContents">ご利用開始</span>
            </div>
            <div class="price__flowStepText">
              <p class="price__flowParagraph">
                最短で、内覧当日からご利用いただけます。<br>
                <span class="price__flowCaution">（住所のご利用がある場合、<br>審査に1週間ほどお時間をいただきます）</span>
              </p>
            </div>
          </div>
        </div>
        <div class="price__links">
          <a href="<?php echo home_url('/opendays/'); ?>" class="link-button">見学のご予約はこちら</a>
          <button type="button" class="link-button open-join-modal">会員情報の登録はこちら</button>
        </div>
      </section>
      <?php get_template_part('template-parts/content-footer'); ?>
      <?php get_template_part('template-parts/join-modal'); ?>
    </div>
	</main><!-- #main -->

<?php
get_footer();
