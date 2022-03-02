<?php
    global $en_title, $ja_title;
    $en_title = 'RECRUIT';
    $ja_title = 'リクルート';
    get_header('recruit');?>
<section class="c-section p-company">
    <div class="l-container">
        <div class="p-company__inner">
            <div class="c-section__titleBox">
                <h3 class="c-section__titleBox__ja">会社紹介</h3>
                <h3 class="c-section__titleBox__en">COMPANY PLOFILE</h3>
            </div>
            <div>
                <script
                    async
                    class="speakerdeck-embed"
                    data-id="7118aed5d4cc48e1826d26a3ce97a3b1"
                    data-ratio="1.41436464088398"
                    src="//speakerdeck.com/assets/embed.js"
                ></script>
            </div>
        </div>
    </div>
</section>
<section class="c-section p-gallery">
    <div class="l-container">
        <div class="p-gallery__inner">
            <div class="c-section__titleBox">
                <h3 class="c-section__titleBox__ja">ギャラリー</h3>
                <h3 class="c-section__titleBox__en">GALLERY</h3>
            </div>
            <?php
                $images = [
                    '/assets/images/thumbnail_1.jpg',
                    '/assets/images/thumbnail_2.jpg',
                    '/assets/images/thumbnail_3.jpg',
                    '/assets/images/thumbnail_4.jpg',
                    '/assets/images/thumbnail_5.jpg',
                    '/assets/images/thumbnail_6.jpg',
                    '/assets/images/thumbnail_7.jpg',
                    '/assets/images/thumbnail_8.jpg',
                    '/assets/images/thumbnail_9.jpg',
                    '/assets/images/thumbnail_10.jpg',
                    '/assets/images/thumbnail_11.jpg'
                ];
            ?>
            <div class="p-gallery__imageList">
                <div class="swiper-container" id="image">
                    <div class="swiper-wrapper">
                        <?php foreach($images as $image): ?>
                            <div class="swiper-slide">
                                <div class="p-gallery__imageList__image" style="background-image: url(<?php echo get_template_directory_uri() . $image; ?>);"></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="p-gallery__thumbnailList">
                <div class="swiper-container" id="thumbnail">
                    <div class="swiper-wrapper">
                        <?php foreach($images as $image): ?>
                            <div class="swiper-slide">
                                <div class="p-gallery__thumbnailList__image" style="background-image: url(<?php echo get_template_directory_uri() . $image; ?>);"></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
<section class="c-section p-interview">
    <div class="l-container">
        <div class="p-interview__inner">
            <div class="c-section__titleBox">
                <h3 class="c-section__titleBox__ja">メンバーインタビュー</h3>
                <h3 class="c-section__titleBox__en">INTERVIEW</h3>
            </div>
            <?php $posts = get_posts(['post_type'=>'new_interview', 'posts_per_page'=>6]); ?>
            <?php get_template_part('partials/interview/list'); ?>
            <p class="c-section__button">
                <a href="/interview">もっと見る ></a>
            </p>
        </div>
    </div>
</section>
<div class="p-menu">
    <div class="l-container">
        <div class="p-menu__inner">
            <section class="top-nav">
                <div class="xs-inner clearfix">
                    <a href="https://zeals.co.jp/about-us/top-message" class="cta3 community">
                        <h2 class="section-title">TOP MESSAGE<br><span>トップメッセージ</span></h2>
                        <div class="cta1">
                          <div class="svg-ui">
                            <img src="https://zeals.co.jp/wp-content/themes/zeals/img/arrow-blue.png" scale="0">
                            <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 138.19 132.46">
                              <g data-name="Calque 1" fill="none">
                                <path d="M131.34 65.78c0 11.61.75 22.46-4.89 31.69-10.69 17.5-34 27.18-56 27.18-18.25 0-40.63-6.44-51.78-18.62C9.28 95.77 8.59 81.15 8.59 65.78c0-16.81 7.06-28 18.33-39S53.65 4.91 70.46 4.91c18.64 0 29.32 8.38 40.49 21.57 8.98 10.6 20.39 24.32 20.39 39.3z" stroke="#0501bf" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                <circle cx="69.09" cy="66.23" r="60.88" stroke="#0501bf" stroke-miterlimit="10"></circle>
                                <path d="M132 66.23c0 10.31-10.56 20-15.09 28.53-6 11.22-6.62 23.36-15.75 29-6.53 4-20.32 3.32-30 3.32-19.75 0-32.31-10.41-43.43-25C19.86 91.88 6.22 80.1 6.22 66.23c0-22.15 13.57-45.54 32.44-56.23 9.77-5.51 21-.69 32.44-.69 33.61.04 60.9 23.3 60.9 56.92z" stroke="#0501bf" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                <ellipse cx="69.09" cy="66.23" rx="69.09" ry="66.23"></ellipse>
                              </g>
                            </svg>
                          </div>
                        </div>
                        <div class="img-area bgset" style="background-image: url('https://zeals.co.jp/wp-content/themes/zeals/img/top-message-link.png');">
                          <img src="https://zeals.co.jp/wp-content/themes/zeals/img/cover.png" scale="0">
                        </div>
                    </a>
                    <a href="https://zeals.co.jp/about-us/vision-value" class="cta3 gallery">
                      <h2 class="section-title">VISION/VALUE<br><span>ビジョン/バリュー</span></h2>
                      <div class="cta1">
                        <div class="svg-ui">
                          <img src="https://zeals.co.jp/wp-content/themes/zeals/img/arrow-blue.png" scale="0">
                          <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 138.19 132.46">
                            <g data-name="Calque 1" fill="none">
                              <path d="M131.34 65.78c0 11.61.75 22.46-4.89 31.69-10.69 17.5-34 27.18-56 27.18-18.25 0-40.63-6.44-51.78-18.62C9.28 95.77 8.59 81.15 8.59 65.78c0-16.81 7.06-28 18.33-39S53.65 4.91 70.46 4.91c18.64 0 29.32 8.38 40.49 21.57 8.98 10.6 20.39 24.32 20.39 39.3z" stroke="#0501bf" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                              <circle cx="69.09" cy="66.23" r="60.88" stroke="#0501bf" stroke-miterlimit="10"></circle>
                              <path d="M132 66.23c0 10.31-10.56 20-15.09 28.53-6 11.22-6.62 23.36-15.75 29-6.53 4-20.32 3.32-30 3.32-19.75 0-32.31-10.41-43.43-25C19.86 91.88 6.22 80.1 6.22 66.23c0-22.15 13.57-45.54 32.44-56.23 9.77-5.51 21-.69 32.44-.69 33.61.04 60.9 23.3 60.9 56.92z" stroke="#0501bf" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                              <ellipse cx="69.09" cy="66.23" rx="69.09" ry="66.23"></ellipse>
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="img-area bgset" style="background-image: url('https://zeals.co.jp/wp-content/themes/zeals/img/vision-link.jpg');">
                        <img src="https://zeals.co.jp/wp-content/themes/zeals/img/cover.png" scale="0">
                      </div>
                    </a>
                </div>
            </section>
        </div>
    </div>
</div>

<?php get_footer('recruit'); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
$(function(){
  var image = new Swiper('#image', {
    slidesPerView: 1,
    loop: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });

  var thumbnail = new Swiper('#thumbnail', {
    slidesPerView: 7,
    loop: true,
    thumbs: {
      swiper: image,
    },
    slideToClickedSlide: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  var thumbnail = new Swiper('.p-pickup__pickupList .swiper-container', {
    slidesPerView: 1,
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 3,
      },
    }
  });
});
</script>
