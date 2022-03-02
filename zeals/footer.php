            <footer class="gradient-bg">
                <a href="#top" class="totop"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-icon.png"></a>
                <div class="l-inner clearfix">
                    <ul class="clearfix foot-nav">
                        <li>
                            <a href="<?php echo home_url();?>/about-us/company" class="head">ABOUT US</a>
                            <a href="<?php echo home_url();?>/about-us/top-message">トップメッセージ</a>
                            <a href="<?php echo home_url();?>/about-us/vision-value">ビジョン/バリュー</a>
                            <a href="<?php echo home_url();?>/about-us/company">会社概要</a>
                            <a href="<?php echo home_url();?>/about-us/member">メンバー</a>
                            <a href="<?php echo home_url();?>/about-us/community">運営コミュニティ</a>
                        </li>
                        <li>
                            <a href="https://chatcommerce.zeals.co.jp" target="_blank;" class="head">SERVICE</a>
                            <a href="https://chatcommerce.zeals.co.jp" target="_blank;" class="pc">チャットコマース「ジールス」</a>
                            <a href="https://zeals.co.jp/dx" target="_blank;" class="pc">接客DX「ジールス」</a>
                            <a href="https://chatcommerce.zeals.co.jp" target="_blank;" class="sp">チャットコマース<br>「ジールス」</a>
                            <a href="https://zeals.co.jp/dx" target="_blank;" class="sp">接客DX<br>「ジールス」</a>
                        </li>
                        <li>
                            <a href="<?php echo home_url();?>/recruit/" class="head">RECRUIT</a>
                            <a href="<?php echo home_url();?>/blog/" class="head">BLOG</a>
                            <a href="<?php echo home_url();?>/news/" class="head">NEWS</a>
                            <!-- <a href="<?php echo home_url();?>/gallery/" class="head">GALLERY</a> -->
                            <ul class="pc">
                                <li><a href="https://www.wantedly.com/companies/zeals2" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/wantedly-link-wh.png" alt="wantedly"></a></li>
                                <li><a href="https://www.facebook.com/zeals.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb-link-wh.png" alt="facebook"></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="foot-cta">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-wh.png" alt="株式会社Zeals">
                        <ul>
                            <li><a href="mailto:info@zeals.co.jp">info@zeals.co.jp</a></li>
                            <li>/</li>
                            <li><a href="tel:03-5719-2133">03-5719-2133</a></li>
                        </ul>
                        <a href="<?php echo home_url();?>/contact/" class="cta-wh">CONTACT</a>
                    </div>
                </div>
                <div class="copyright">
                    <div class="l-inner clearfix">
                        <p>©2019 ZEALS Co.,ltd</p>
                        <a target="_blank" href="https://storage.googleapis.com/zeals-corporate-assets/uploads/2019/10/471ea6f6-%E6%83%85%E5%A0%B1%E3%82%BB%E3%82%AD%E3%83%A5%E3%83%AA%E3%83%86%E3%82%A3%E6%96%B9%E9%87%9D.pdf">情報セキュリティ方針</a>
                        <a href="<?php echo home_url();?>/privacy-policy/">プライバシーポリシー</a>
                    </div>
                </div>
            </footer>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=<?php echo dump_javascript_version(); ?>"></script>

        <script type="text/javascript">
            // 最初に、ビューポートの高さを取得し、0.01を掛けて1%の値を算出して、vh単位の値を取得
            let vh = window.innerHeight * 0.01;
            // カスタム変数--vhの値をドキュメントのルートに設定
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        </script>

        <!-- plugin

        <script src="js/plugin/wow.min.js"></script>
        <script src="js/plugin/rellax.min.js"></script>

        <script>new WOW().init();</script>
        <script type="text/javascript">var rellax = new Rellax('.rellax');</script>
        <script>
            var mySwiper = new Swiper('.swiper-container',{
                pagination: '.swiper-pagination',
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                loop:true,
                autoplay:false,
                speed:2000,
                //カルーセル用
                slidersPerView: 1,
                spaceBetween: 20,
                centeredsliders : true
            });
        </script>
        -->

        <?php wp_footer(); ?>

    </body>
</html>
