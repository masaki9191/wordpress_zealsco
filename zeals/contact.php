<?php get_header();?>



            <main class="page-contact">
                <article>

                    <section class="page-fv1">
                        <h2>CONTAC<span class="ls0">T</span></h2>
                        <h3>お問い合わせ</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page-fv-circle.png" class="c-img">
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

                    <section class="content">
                        <div class="ms-inner">
                            <h2>お気軽にお問い合わせください。</h2>
                            <div class="form">
                                <p>*マークが付いている項目は必須項目になります。</p>
                                <?php echo do_shortcode('[contact-form-7 id="21" title="コンタクトフォーム 1"]') ?>
                                <!--<a href="<?php echo site_url(); ?>/privacypolicy/">プライバシーポリシー</a>-->
                            </div>
                        </div>
                    </section>

                </article>
            </main>

            <?php get_footer();?>