<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/chatcommerce_blog_and_ebook/master.css?v=1.0.0" type="text/css">
<main class="page-company">
  <article>
    <?php if( !is_single() ): // This section is hidden when a single page. ?>
      <section class="page-fv1">
        <h2>INFORMATION</h2>
        <h3>インフォメーション</h3>
        <img src="https://zeals.co.jp/wp-content/themes/zeals/img/page-fv-circle.png" class="c-img" alt="">
        <div class="circle-bg">
          <div class="inner clearfix">
            <div class="bg-inner red">
              <div class="fv-circle">
                <div class="wave-circle wave1"></div>
                <div class="wave-circle wave2"></div>
                <div class="outer-circle">
                  <div class="vis-circle"></div>
                  <div class="outer-point point-top"></div>
                  <div class="outer-point point-left"></div>
                  <div class="outer-point point-bottom"></div>
                  <div class="outer-point point-right"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif; // is_single ?>
    <div id="flexbox">
      <div class="p-content">
        <div class="l-container">
          <div class="p-content__inner">
