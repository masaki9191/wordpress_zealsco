<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/recruit/master.css?v=1.3.0" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/recruit/swiper-bundle.min.css" type="text/css">
<main class="page-company">
    <article>
        <?php if (!is_single()): ?>
            <?php global $en_title, $ja_title; ?>
            <section class="page-fv1">
                <h2><?php echo empty($en_title) ? '$en_titleを定義してください' : $en_title; ?></h2>
                <h3><?php echo empty($ja_title) ? '$ja_titleを定義してください' : $ja_title; ?></h3>
                <img src="https://zeals.co.jp/wp-content/themes/zeals/img/page-fv-circle.png" class="c-img">
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
        <?php endif; ?>
        <div id="flexbox">
            <div class="p-content">
                <div class="p-content__inner">
