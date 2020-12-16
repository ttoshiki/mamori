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
      <div class="price__subHeading">
        <div class="price__subHeadingIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-left.svg'); ?></div>
        <h2>シェアオフィス<br>コワーキングスペース</h2>
        <div class="price__subHeadingIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-right.svg'); ?></div>
      </div>
      <section class="price__list">
        <table>
          <thead>
          </thead>
          <tbody>
            <th rowspan="3" scope="colgroup">プラン</th>
            <th>時間会員</th>
            <th colspan="3">月額会員</th>
            <tr>
              <td rowspan="2">初回来店時に<br>鍵設定が必要です</td>
              <td rowspan="2">フリーアドレス</td>
              <td colspan="2" scope="rowgroup">固定席</td>
            </tr>
            <tr>
              <td>タイプA<br>(5席)</td>
              <td>タイプB<br>(半個室／4席)</td>
            </tr>
            <tr>
              <th>入会金</th>
              <td colspan="4">無料</td>
            </tr>
            <tr>
              <th rowspan="3">利用<br>時間</th>
              <td rowspan="3">
                250円／30分<span>1日上限<br>3,000円</span>
              </td>
              <td >
                フルタイム会員<br>20,000円／月
                <span class="price__listTime">(24時間)</span>
              </td>
              <td rowspan="3">
                フルタイム会員<br>30,000円／月
                <span class="price__listTime -oneday">(24時間)</span>
              </td>
              <td rowspan="3">
                フルタイム会員<br>50,000円／月
                <span class="price__listTime -oneday">(24時間)</span>
              </td>
            </tr>
            <tr>
              <td>
                平日会員<br>10,000円／月
                <span class="price__listTime -oneday">(平日9:00~18:00)</span>
              </td>
            </tr>
            <tr>
              <td>
                ナイト＆ホリデー<br>会員<br>10,000円／月
                <span class="price__listTime -oneday">(平日18:00~23:00)<br>(土日祝10:00~23:00)</span>
              </td>
            </tr>
            <tr>
              <th>住所利用・<br>法人登記<br>サービス</th>
              <td>
                6,000円／月
                <span class="price__listCaution">※月2回の書類転送</span>
                <span class="price__listTime">(ポスト利用は<br>2,000円／月)</span>
              </td>
              <td>
                3,000円／月
                <span class="price__listCaution">※月2回の書類転送</span>
                <span class="price__listTime">(ポスト利用は<br>2,000円／月)</span>
              </td>
              <td colspan="2">
                無料／月
                <span class="price__listCaution">※月2回の書類転送</span>
                <span class="price__listTime">(ポスト利用は<br>2,000円／月)</span>
              </td>
            </tr>
            <tr>
              <th>ミーティング<br>ルーム</th>
              <td>
                1,000円／時間<br>ビジター招待OK
                <span class="price__listCaution">※2名個室のみ<br>ご利用可能</span>
              </td>
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
        <span>※価格は全て税抜です</span>
      </section>
      <section class="price__spaceUsage">
        <div class="price__subHeading">
          <div class="price__subHeadingIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-left.svg'); ?></div>
          <h2>シェアオフィス<br>コワーキングスペース<br>ご利用案内</h2>
          <div class="price__subHeadingIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-right.svg'); ?></div>
        </div>
        <div class="price__usageMonthly">
          <h3 class="price__usageHeading">月額会員について(フリーアドレス・固定席プラン共通)</h3>
          <p class="price__usageParagraph">
            月額会員とは、Mamori営業時間中、各規定の時間内で<br>
            固定額にてご利用いただけるプランです。
          </p>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【申し込みに必要なもの】</h4>
            <ul class="price__usageNecessaryList">
              <li class="price__usageNeccessaryItem">クレジットカード</li>
              <li class="price__usageNeccessaryItem">入退館用ICカード</li>
            </ul>
            <p>ご来館前に<a href="">WEBからの会員登録</a>をお済ませいただけるとスムーズです。</p>
          </div>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【手続き可能日時】</h4>
            <p class="price__usageParagraph">
              ご見学・お手続き可能時間に承ります。<br>
              その時間内でご都合が悪ければ電話を入れるか<br>
              もしくは<a href="<?php echo home_url('/contact/'); ?>">お問い合わせページ</a>よりご連絡ください。
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
              <li class="price__usageItem">
                申込後のキャンセル、返金は不可<br>
                （退会の場合もすでに支払った料金の返金はなし）
              </li>
              <li class="price__usageItem">利用開始日から日割りで料金が発生（当月の日割り料金と翌月1か月分が即時決済）</li>
              <li class="price__usageItem">
                時間会員からの変更の場合、申込前にご利用された料金は<br>
                時間会員でのご利用分として翌月に請求されます。
              </li>
              <li class="price__usageItem">
                フリーアドレスプランにお申し込みの場合は、<br>
                席の確保をお約束するものではございません。
              </li>
              <li class="price__usageItem">天候やイベント、その他事情により一部席の制限や休館する場合がございます。</li>
              <li class="price__usageItem">ご利用時間はご自身で記録をお願いします。</li>
              <li class="price__usageItem">
                時間会員からの変更は、申込当日から適用されます。<br>
                明日以降の日から月額会員へ変更をご希望の場合は、変更してのご利用を<br>
                ご希望される日にあらためてお手続きをお願いします。<br>
                （手続き可能日時にお越しください）
              </li>
              <li class="price__usageItem">プラン変更・もしくは解約のお手続きがなければ自動更新になります</li>
              <li class="price__usageItem">更新の際に通知はございません。<br>請求完了時に金額を登録アドレスへメールで送付いたします。</li>
            </ul>
          </div>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【退会をご希望の場合】</h4>
            <ul class="price__usageList">
              <li class="price__usageItem">
                月末で時間会員へ変更を行うには、その月の10日の手続き可能時間中までに<br>
                お手続きが必要です。その時間を超えますと自動的に1ヶ月更新されます。
              </li>
              <li class="price__usageItem">
                時間会員への変更をご希望の場合は、こちらの<a href="<?php echo home_url('/contact/'); ?>">お問い合わせフォーム</a>から<br>
                以下の情報をお知らせください。<br>
                <strong>【お名前】【退会ご希望月】</strong><br>
                「受け付けた旨」の事務局からの返信メールを受信されたらお手続きは完了です。
              </li>
            </ul>
          </div>
        </div>
        <div class="price__usageTime">
          <h3 class="price__usageHeading">時間会員について</h3>
          <p class="price__usageParagraph">
            時間会員とは、Mamori営業時間中1日の上限請求額を3,000円とし、<br>
            使った時間数だけの金額でご利用いただけるプランです。
          </p>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【申し込みに必要なもの】</h4>
            <ul class="price__usageNecessaryList">
              <li class="price__usageNeccessaryItem">クレジットカード</li>
              <li class="price__usageNeccessaryItem">入退館用ICカード</li>
            </ul>
            <p>ご来館前に<a href="">WEBからの会員登録</a>をお済ませいただけるとスムーズです。</p>
          </div>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【手続き可能日時】</h4>
            <p class="price__usageParagraph">
              ご見学・お手続き可能時間に承ります。<br>
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
              <li class="price__usageItem">料金：基本の月額費用はかかりません。利用した分のみ請求されます。</li>
              <li class="price__usageItem">
                申込後のキャンセル、返金は不可<br>
                （退会の場合もすでに支払った料金の返金はなし）
              </li>
              <li class="price__usageItem">利用開始日から日割りで料金が発生（当月の日割り料金と翌月1か月分が即時決済）</li>
              <li class="price__usageItem">
                毎月末に当月分のご利用料金を確定し、その翌月に、<br>
                ご登録いただいたクレジットカードから引き落としとなります。
              </li>
              <li class="price__usageItem">
                ご利用いただけるお席は、フリーアドレス会員と同様の<br>
                オープンスペースのみとなります。
              </li>
              <li class="price__usageItem">天候やイベント、その他事情により一部席の制限や休館する場合がございます。</li>
              <li class="price__usageItem">ご利用時間はご自身で記録をお願いします。</li>
              <li class="price__usageItem">プラン変更・もしくは解約のお手続きがなければ自動更新になります</li>
            </ul>
          </div>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【退会をご希望の場合】</h4>
            <ul class="price__usageList">
              <li class="price__usageItem">
                <a href="<?php echo home_url('/contact/'); ?>">お問い合わせフォーム</a>から<br>
                以下の情報をお知らせください。<br>
                <strong>【お名前】</strong><br>
                「受け付けた旨」の事務局からの返信メールを受信されたらお手続きは完了です。
              </li>
            </ul>
          </div>
          <div class="price__usageBlock">
            <h4 class="price__usageSubHeading">【時間会員プランの廃止について】</h4>
            <ul class="price__usageList">
              <li class="price__usageItem">
                月額会員の増加により、ワークスペースにて十分なお席が確保できなくなった場合、<br>
                時間会員プランを廃止することもございます。その際は事前に会員宛に通知いたします。
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="price__flow">
        <div class="price__subHeading">
          <div class="price__subHeadingIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-left.svg'); ?></div>
          <h2>申し込みまでの流れ</h2>
          <div class="price__subHeadingIcon"><?php echo file_get_contents(get_template_directory() . '/assets/images/icons/icon_tree-right.svg'); ?></div>
        </div>
        <h3 class="price__flowSubHeading">月額会員・時間会員共通</h3>
        <div class="price__flowSteps">
          <div class="price__flowStepFigure">
            <span class="price__flowStepNumber -en">STEP 00</span>
            <span class="price__flowStepContents"><strong>内覧</strong>(希望者のみ)</span>
          </div>
          <div class="price__flowStepText">
            <p class="price__flowParagraph">
              お電話もしくは<a href="<?php echo home_url(); ?>">見学予約フォーム</a>より<br>
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
              お電話もしくは<a href="<?php echo home_url(); ?>">こちらのフォーム</a>より<br>
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
              最短で、内覧当日からご利用いただけます。
              <span class="price__flowCaution">（住所のご利用がある場合、<br>審査に1週間ほどお時間をいただきます）</span>
            </p>
          </div>
        </div>
        <div class="price__links">
          <a href="<?php echo home_url(); ?>">見学のご予約はこちら</a>
          <a href="<?php echo home_url(); ?>">会員情報の登録はこちら</a>
        </div>
      </section>
      <section class="price__footer">
        <div class="price__footerLogo"><?php echo file_get_contents(get_template_directory() . '/assets/images/logo.svg'); ?></div>
        <span class="price__footerPhoneNumber"><?php get_template_part('template-parts/phone-number'); ?></span>
        <span class="price__footerReceptionTime">受付時間：10:00~20:00</span>
      </section>
    </div>
	</main><!-- #main -->

<?php
get_footer();
