<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="format-detection" content="email=no,telephone=no,address=no" />

  <title>Zeals</title>
  <meta name="description" content="接客DXで、日本の「おもてなし」をデジタル化する。" />

  <meta property="og:url" content="OGのURL" />
  <meta property="og:title" content="Zeals" />
  <meta property="og:type" content="website">
  <meta property="og:description" content="接客DXで、日本の「おもてなし」をデジタル化する。" />
  <meta property="og:image" content="OGの画像URL" />
  <!-- <meta name="twitter:card" content="summary_large_image" /> -->
  <!-- <meta name="twitter:site" content="@xxxxx" /> -->

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon_16x16.png" sizes="16x16" type="image/png" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon_32x32.png" sizes="32x32" type="image/png" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon_48x48.png" sizes="48x48" type="image/png" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon_62x62.png" sizes="62x62" type="image/png" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon_150x150.png" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">

  <!--  CSS  -->
  <!-- 編集禁止CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/master.css" />
  <!-- 編集許可CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
  <!--  CSS  -->

  <!--  Formrun  -->
  <script src="https://sdk.form.run/js/v2/formrun.js"></script>
</head>
<body>

<header>
  <div class="p-header">
    <div class="l-container">
      <div class="p-header__inner">
        <p class="p-header__logo">
          <a href="./">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Zeals">
          </a>
        </p>
      </div>
    </div>
  </div>
</header>

<main>

  <div class="p-contact">
    <div class="l-container">
      <div class="p-contact__inner">
        <p class="p-contact__title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title_contacts.svg" alt="CONTACT">
        </p>
        <div class="p-contact__description">
          <p>接客DX「ジールス」へのお問い合わせ</p>
          <p>接客DX「ジールス」にご興味をお持ちいただき誠にありがとうございます。<br>下記フォームをご記入の上、送信してください。 お問合せ内容に応じて、弊社担当よりご連絡させていただきます。</p>
        </div>
        <div class="p-contact__form">


          <form class="formrun" action="https://form.run/api/v1/r/tqk2wjkjgkp3tfsaut275uhw" method="post">
            <div>
              <label>会社名<span>[必須]</span></label>
              <input name="会社名" type="text" placeholder="会社名" data-formrun-required>
              <div class="error" data-formrun-show-if-error="会社名">会社名を正しく入力してください</div>
            </div>
            <div>
              <label>名前<span>[必須]</span></label>
              <input name="名前" type="text" placeholder="山田 太郎" data-formrun-required>
              <div class="error" data-formrun-show-if-error="名前">名前を正しく入力してください</div>
            </div>
            <div>
              <label>メールアドレス<span>[必須]</span></label>
              <input name="メールアドレス" type="text" placeholder="example@mail.com" data-formrun-type="email" data-formrun-required>
              <div class="error" data-formrun-show-if-error="メールアドレス">メールアドレスを正しく入力してください</div>
            </div>
            <div>
              <label>電話番号<span>[必須]</span></label>
              <input type="text" name="電話番号" placeholder="09012345678" data-formrun-type="tel" data-formrun-required>
              <div class="error" data-formrun-show-if-error="電話番号">電話番号を正しく入力してください</div>
            </div>
            <div>
              <label>業種<span>[必須]</span></label>
              <select name="業種" data-formrun-required>
                <option value>選択してください</option>
                <option value="IT">IT</option>
                <option value="メーカー">メーカー</option>
                <option value="商社">商社</option>
                <option value="医療">医療</option>
                <option value="金融">金融</option>
                <option value="建設・不動産">建設・不動産</option>
                <option value="金融">金融</option>
                <option value="人材">人材</option>
                <option value="小売">小売</option>
                <option value="飲食">飲食</option>
                <option value="物流">物流</option>
                <option value="その他">その他</option>
              </select>
              <div class="error" data-formrun-show-if-error="業種">業種を選択してください</div>
            </div>
            <div>
              <label>部署名<span>[必須]</span></label>
              <input name="部署名" type="text" placeholder="部署名" data-formrun-required>
              <div class="error" data-formrun-show-if-error="部署名">部署名を正しく入力してください</div>
            </div>
            <div>
              <label>役職<span>[必須]</span></label>
              <select name="役職" data-formrun-required>
                <option value>選択してください</option>
                <option value="一般社員">一般社員</option>
                <option value="係長・主任">係長・主任</option>
                <option value="課長">課長</option>
                <option value="部長">部長</option>
                <option value="経営者・役員">経営者・役員</option>
              </select>
              <div class="error" data-formrun-show-if-error="役職">役職を選択してください</div>
            </div>
            <div>
              <label>接客DX「ジールス」をどこで知りましたか？<span>[必須]</span></label>
              <select name="接客DX「ジールス」をどこで知りましたか？" data-formrun-required>
                <option value>選択してください</option>
                <option value="WEB検索">WEB検索</option>
                <option value="WEB広告">WEB広告</option>
                <option value="SNS">SNS</option>
                <option value="セミナー/展示会/サミット">セミナー/展示会/サミット</option>
                <option value="WEB上の記事/ニュース">WEB上の記事/ニュース</option>
                <option value="雑誌">雑誌</option>
                <option value="紹介(口コミ)">紹介(口コミ)</option>
                <option value="その他">その他</option>
              </select>
              <div class="error" data-formrun-show-if-error="接客DX「ジールス」をどこで知りましたか？">選択してください</div>
            </div>
            <div>
              <label>お問い合わせ<span>[必須]</span></label>
              <textarea name="お問い合わせ" data-formrun-required></textarea>
              <div class="error" data-formrun-show-if-error="お問い合わせ">お問い合わせ入力してください</div>
            </div>

            <!-- ボット投稿をブロックするためのタグ -->
            <div class="_formrun_gotcha">
              <style media="screen">._formrun_gotcha {position:absolute!important;height:1px;width:1px;overflow:hidden;}</style>
              <label for="_formrun_gotcha">If you are a human, ignore this field</label>
              <input type="text" name="_formrun_gotcha" id="_formrun_gotcha" tabindex="-1">
            </div>

            <button type="submit" data-formrun-error-text="未入力の項目があります" data-formrun-submitting-text="送信中...">送信する</button>
          </form>

        </div>
        <div class="p-contact__about">
          <p class="p-contact__about__description">接客DXの第一歩はチャットコマースから<br>チャットコマースの詳しい説明はこちらからどうぞ</p>
          <p class="p-contact__about__button">
            <a href="https://chatcommerce.zeals.co.jp/" target="_blank">チャットコマースについて詳しく見る</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>

<footer>
  <div class="p-footer is-contact">
    <div class="p-footer__inner">
      <p class="p-footer__logo">
        <a href="./">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Zeals">
        </a>
      </p>
      <div class="p-footer__navList">
        <ul>
          <li>
            <a href="https://zeals.co.jp/">運営：株式会社Zeals</a>
          </li>
          <li>
            <a href="https://zeals.co.jp/privacy-policy/">プライバシーポリシー</a>
          </li>
          <li>
            <a href="https://storage.googleapis.com/zeals-corporate-assets/uploads/2019/10/471ea6f6-%E6%83%85%E5%A0%B1%E3%82%BB%E3%82%AD%E3%83%A5%E3%83%AA%E3%83%86%E3%82%A3%E6%96%B9%E9%87%9D.pdf" target="_blank">情報セキュリティ方針</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="p-copyright is-contact">
    <div class="l-container">
      <div class="p-copyright__inner">
        <p class="p-copyright__text">&copy;2020 ZEALS Co.,ltd</p>
      </div>
    </div>
  </div>
</footer>

<aside>
  <div class="p-drawer">
    <div class="p-drawer__inner">

    </div>
  </div>
</aside>

<!-- SCRIPT -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<!-- SCRIPT -->

</body>
</html>

