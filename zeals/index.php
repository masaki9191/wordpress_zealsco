<?php get_header();?>
            <p class="top-copyright">©2019 ZEALS Co.,ltd</p>

            <div class="scroll"></div>

            <main class="pc">
                <article>

                    <section class="fv js-section" data-section-name="section1">
                        <div class="slider-area">
                            <section class="circle-bg">
                                <div class="inner clearfix">
                                    <div class="bg-inner red">
                                        <div class="fv-circle">
                                            <div class="wave-circle wave1"></div>
                                            <div class="wave-circle wave2"></div>
                                            <div class="outer-circle">
                                                <div class="vis-circle"></div>
                                                <div class="hide-cont">
                                                    <div class="hide-cont-cl"></div>
                                                </div>
                                                <div class="inner-circle"></div>
                                                <div class="outer-point point-top"></div>
                                                <div class="outer-point point-left"></div>
                                                <div class="outer-point point-bottom"></div>
                                                <div class="outer-point point-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="slider slider1">
                                <div class="center-circle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-icon.png" class="m0auto">
                                </div>
                                <div class="l-inner clearfix">
                                    <h3 class="font-700">
                                        <span>R</span>
                                        <span>E</span>
                                        <span>V</span>
                                        <span>O</span>
                                        <span class="sp-ls0">L</span>
                                        <span class="margin"></span>
                                        <span>U</span>
                                        <span>T</span>
                                        <span>I</span>
                                        <span>O</span>
                                        <span class="ls0">N</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="news gradient-bg">
                        <div class="s-inner">
                            <h2 class="section-title cwh">NEWS</h2>
                            <a href="<?php echo home_url(); ?>/news/" class="cta1-wh-sm font-700">
                                <span>MORE</span>
                                <div class="svg-ui">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.png">
                                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 138.19 132.46">
                                        <g data-name="Calque 1" fill="none">
                                            <path d="M131.34 65.78c0 11.61.75 22.46-4.89 31.69-10.69 17.5-34 27.18-56 27.18-18.25 0-40.63-6.44-51.78-18.62C9.28 95.77 8.59 81.15 8.59 65.78c0-16.81 7.06-28 18.33-39S53.65 4.91 70.46 4.91c18.64 0 29.32 8.38 40.49 21.57 8.98 10.6 20.39 24.32 20.39 39.3z" stroke="#0501bf" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                            <circle cx="69.09" cy="66.23" r="60.88" stroke="#fff" stroke-miterlimit="10"></circle>
                                            <path d="M132 66.23c0 10.31-10.56 20-15.09 28.53-6 11.22-6.62 23.36-15.75 29-6.53 4-20.32 3.32-30 3.32-19.75 0-32.31-10.41-43.43-25C19.86 91.88 6.22 80.1 6.22 66.23c0-22.15 13.57-45.54 32.44-56.23 9.77-5.51 21-.69 32.44-.69 33.61.04 60.9 23.3 60.9 56.92z" stroke="#fff" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                            <ellipse cx="69.09" cy="66.23" rx="69.09" ry="66.23"></ellipse>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                            <ul class="clearfix">
                                <?php $posts = get_posts(array('post_type'=>'news', 'posts_per_page'=>3, 'exclude' => 62)); ?>
                                <?php foreach($posts as $post): ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" class="clearfix">
                                        <div class="img bgset" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
                                        <div class="text">
                                            <h4><?php echo mb_substr(strip_tags($post->post_title),0,1000); ?></h4>
                                            <p><?php echo get_post_time('Y/m/d'); ?></p>
                                        </div>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>

                    <div class="service">
                        <div class="l-inner">
                            <h2 class="section-title">SERVICE<br><span>事業内容</span></h2>
                            <div class="content">
                                <div class="s-inner clearfix">
                                    <h3>チャットコマース<br><span>Zeals(ジールス)</span></h3>
                                    <a href="https://chatcommerce.zeals.co.jp" target="_blank" class="cta2">VISIT WEBSIT<span class="ls0">E</span></a>
                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/service-fv.png" class="service-fv">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/text-bg1.png" class="text-bg">
                                <div class="text-bg">
                                <!--<svg>
                                    <text x="0" y="240">
                                        <tspan x="0" y="60">CHATBOT</tspan>
                                        <tspan x="0" y="180">COMMERCE</tspan>
                                    </text>
                                </svg>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="recruit">
                        <h2 class="section-title">RECRUIT<br><span>採用情報</span></h2>
                        <div class="inner content">
                            <div class="content-cl red-bg">
                                <div class="txt">
                                    <h4>COMMUNICATION<br/>TECHNOLOGY</h4>
                                    <p>共に次なる産業革命を興す仲間<br/>を募集しています。</p>
                                </div>
                                <a href="<?php echo site_url(); ?>/recruit/" class="cta1-wh-sm">
                                    <div class="svg-ui">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.png">
                                        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 138.19 132.46">
                                            <g data-name="Calque 1" fill="none">
                                                <path d="M131.34 65.78c0 11.61.75 22.46-4.89 31.69-10.69 17.5-34 27.18-56 27.18-18.25 0-40.63-6.44-51.78-18.62C9.28 95.77 8.59 81.15 8.59 65.78c0-16.81 7.06-28 18.33-39S53.65 4.91 70.46 4.91c18.64 0 29.32 8.38 40.49 21.57 8.98 10.6 20.39 24.32 20.39 39.3z" stroke="#fff" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                                <circle cx="69.09" cy="66.23" r="60.88" stroke="#fff" stroke-miterlimit="10"></circle>
                                                <path d="M132 66.23c0 10.31-10.56 20-15.09 28.53-6 11.22-6.62 23.36-15.75 29-6.53 4-20.32 3.32-30 3.32-19.75 0-32.31-10.41-43.43-25C19.86 91.88 6.22 80.1 6.22 66.23c0-22.15 13.57-45.54 32.44-56.23 9.77-5.51 21-.69 32.44-.69 33.61.04 60.9 23.3 60.9 56.92z" stroke="#fff" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                                <ellipse cx="69.09" cy="66.23" rx="69.09" ry="66.23"></ellipse>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit-img1.png" class="recruit-img recruit-img1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit-img2.png" class="recruit-img recruit-img2">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit-img3.png" class="recruit-img recruit-img3">
                        </div>
                    </section>

                    <section class="top-nav">
                        <div class="xs-inner clearfix">
                            <a href="<?php echo home_url();?>/about-us/top-message" class="cta3 community">
                                <h2 class="section-title">TOP MESSAGE<br><span>トップメッセージ</span></h2>
                                <div class="cta1">
                                    <div class="svg-ui">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.png">
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
                                <div class="img-area bgset" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/top-message-link.png');">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cover.png">
                                </div>
                            </a>
                            <a href="<?php echo home_url();?>/about-us/vision-value" class="cta3 gallery">
                                <h2 class="section-title">VISION/VALUE<br><span>ビジョン/バリュー</span></h2>
                                <div class="cta1">
                                    <div class="svg-ui">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.png">
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
                                <div class="img-area bgset" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/vision-link.jpg');">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cover.png">
                                </div>
                            </a>
                        </div>
                    </section>

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
                                    <a href="https://chatcommerce.zeals.co.jp" target="_blank;">チャットコマース「ジールス」</a>
                                    <a href="https://zeals.co.jp/dx" target="_blank;">接客DX「ジールス」</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url();?>/recruit/" class="head">RECRUIT</a>
                                    <a href="<?php echo home_url();?>/blog/" class="head">BLOG</a>
                                    <a href="<?php echo home_url();?>/news/" class="head">NEWS</a>
                                    <!--<a href="" class="head">GALLERY</a>-->
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

                </article>
            </main>

            <main class="sp">
                <article>

                    <div class="scroll"></div>

                    <section class="circle-bg">
                        <div class="fv">
                            <div class="slider-area">
                                <div class="slider slider1">
                                    <div class="center-circle">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-icon.png" class="m0auto">
                                    </div>
                                    <div class="l-inner clearfix">
                                        <h3 class="font-700">
                                            <span>R</span>
                                            <span>E</span>
                                            <span>V</span>
                                            <span>O</span>
                                            <span class="sp-ls0">L</span>
                                            <span class="margin"></span>
                                            <span>U</span>
                                            <span>T</span>
                                            <span>I</span>
                                            <span>O</span>
                                            <span class="ls0">N</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inner clearfix">
                            <div class="bg-inner red">
                                <div class="fv-circle">
                                    <div class="wave-circle wave1"></div>
                                    <div class="wave-circle wave2"></div>
                                    <div class="outer-circle">
                                        <div class="vis-circle"></div>
                                        <div class="hide-cont">
                                            <div class="hide-cont-cl"></div>
                                        </div>
                                        <div class="inner-circle"></div>
                                        <div class="outer-point point-top"></div>
                                        <div class="outer-point point-left"></div>
                                        <div class="outer-point point-bottom"></div>
                                        <div class="outer-point point-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="news gradient-bg">
                        <div class="s-inner">
                            <h2 class="section-title cwh">NEWS</h2>
                            <a href="<?php echo home_url(); ?>/news/" class="cta1-wh-sm font-700">
                                <span>MORE</span>
                                <div class="svg-ui">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.png">
                                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 138.19 132.46">
                                        <g data-name="Calque 1" fill="none">
                                            <path d="M131.34 65.78c0 11.61.75 22.46-4.89 31.69-10.69 17.5-34 27.18-56 27.18-18.25 0-40.63-6.44-51.78-18.62C9.28 95.77 8.59 81.15 8.59 65.78c0-16.81 7.06-28 18.33-39S53.65 4.91 70.46 4.91c18.64 0 29.32 8.38 40.49 21.57 8.98 10.6 20.39 24.32 20.39 39.3z" stroke="#0501bf" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                            <circle cx="69.09" cy="66.23" r="60.88" stroke="#fff" stroke-miterlimit="10"></circle>
                                            <path d="M132 66.23c0 10.31-10.56 20-15.09 28.53-6 11.22-6.62 23.36-15.75 29-6.53 4-20.32 3.32-30 3.32-19.75 0-32.31-10.41-43.43-25C19.86 91.88 6.22 80.1 6.22 66.23c0-22.15 13.57-45.54 32.44-56.23 9.77-5.51 21-.69 32.44-.69 33.61.04 60.9 23.3 60.9 56.92z" stroke="#fff" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                            <ellipse cx="69.09" cy="66.23" rx="69.09" ry="66.23"></ellipse>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                            <ul class="clearfix">
                                <?php $posts = get_posts(array('post_type'=>'news', 'posts_per_page'=>3, 'exclude' => 62)); ?>
                                <?php foreach($posts as $post): ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" class="clearfix">
                                        <div class="img bgset" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
                                        <div class="text">
                                            <h4><?php echo mb_substr(strip_tags($post->post_title),0,1000); ?></h4>
                                            <p><?php echo get_post_time('Y/m/d'); ?></p>
                                        </div>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>

                    <div class="box">
                        <div class="service whbg">
                            <div class="l-inner">
                                <h2 class="section-title">SERVICE<br><span>事業内容</span></h2>
                                <div class="content">
                                    <div class="s-inner clearfix">
                                        <h3>チャットコマース<br><span>Zeals(ジールス)</span></h3>
                                        <a href="https://chatcommerce.zeals.co.jp" class="cta2">VISIT WEBSIT<span class="ls0">E</span></a>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/service-fv.png" class="service-fv">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/text-bg1.png" class="text-bg">
                                    <div class="text-bg">

                                        <!--<svg>
                                            <text x="0" y="240">
                                                <tspan x="0" y="60">CHATBOT</tspan>
                                                <tspan x="0" y="180">COMMERCE</tspan>
                                            </text>
                                        </svg>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="recruit whbg relative">
                        <h2 class="section-title">RECRUIT<br><span>採用情報</span></h2>
                        <div class="inner content">
                            <div class="content-cl red-bg">
                                <div class="txt">
                                    <h4>COMMUNICATION<br/>TECHNOLOGY</h4>
                                    <p>共に日本の将来を担う仲間<br/>を募集しています。</p>
                                    <a href="<?php echo home_url(); ?>/recruit/" class="cta1 font-700">
                                        <span>MORE</span>
                                        <div class="svg-ui">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.png">
                                            <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 138.19 132.46">
                                                <g data-name="Calque 1" fill="none">
                                                    <path d="M131.34 65.78c0 11.61.75 22.46-4.89 31.69-10.69 17.5-34 27.18-56 27.18-18.25 0-40.63-6.44-51.78-18.62C9.28 95.77 8.59 81.15 8.59 65.78c0-16.81 7.06-28 18.33-39S53.65 4.91 70.46 4.91c18.64 0 29.32 8.38 40.49 21.57 8.98 10.6 20.39 24.32 20.39 39.3z" stroke="#0501bf" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                                    <circle cx="69.09" cy="66.23" r="60.88" stroke="#0501bf" stroke-miterlimit="10"></circle>
                                                    <path d="M132 66.23c0 10.31-10.56 20-15.09 28.53-6 11.22-6.62 23.36-15.75 29-6.53 4-20.32 3.32-30 3.32-19.75 0-32.31-10.41-43.43-25C19.86 91.88 6.22 80.1 6.22 66.23c0-22.15 13.57-45.54 32.44-56.23 9.77-5.51 21-.69 32.44-.69 33.61.04 60.9 23.3 60.9 56.92z" stroke="#0501bf" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                                    <ellipse cx="69.09" cy="66.23" rx="69.09" ry="66.23"></ellipse>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>
                                    <!--<a href="<?php echo site_url(); ?>/recruit/" class="cta1-white-sm font-700">
                                        <div class="svg-ui">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-red.png">
                                            <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 138.19 132.46">
                                                <g data-name="Calque 1" fill="none">
                                                    <path d="M131.34 65.78c0 11.61.75 22.46-4.89 31.69-10.69 17.5-34 27.18-56 27.18-18.25 0-40.63-6.44-51.78-18.62C9.28 95.77 8.59 81.15 8.59 65.78c0-16.81 7.06-28 18.33-39S53.65 4.91 70.46 4.91c18.64 0 29.32 8.38 40.49 21.57 8.98 10.6 20.39 24.32 20.39 39.3z" stroke="#e73c00" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                                    <circle cx="69.09" cy="66.23" r="60.88" stroke="#e73c00" stroke-miterlimit="10"></circle>
                                                    <path d="M132 66.23c0 10.31-10.56 20-15.09 28.53-6 11.22-6.62 23.36-15.75 29-6.53 4-20.32 3.32-30 3.32-19.75 0-32.31-10.41-43.43-25C19.86 91.88 6.22 80.1 6.22 66.23c0-22.15 13.57-45.54 32.44-56.23 9.77-5.51 21-.69 32.44-.69 33.61.04 60.9 23.3 60.9 56.92z" stroke="#e73c00" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                                    <ellipse cx="69.09" cy="66.23" rx="69.09" ry="66.23"></ellipse>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>-->
                                </div>
                                <a href="<?php echo site_url(); ?>/recruit/" class="cta1-wh-sm">
                                    <div class="svg-ui pc">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.png">
                                        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 138.19 132.46">
                                            <g data-name="Calque 1" fill="none">
                                                <path d="M131.34 65.78c0 11.61.75 22.46-4.89 31.69-10.69 17.5-34 27.18-56 27.18-18.25 0-40.63-6.44-51.78-18.62C9.28 95.77 8.59 81.15 8.59 65.78c0-16.81 7.06-28 18.33-39S53.65 4.91 70.46 4.91c18.64 0 29.32 8.38 40.49 21.57 8.98 10.6 20.39 24.32 20.39 39.3z" stroke="#fff" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                                <circle cx="69.09" cy="66.23" r="60.88" stroke="#fff" stroke-miterlimit="10"></circle>
                                                <path d="M132 66.23c0 10.31-10.56 20-15.09 28.53-6 11.22-6.62 23.36-15.75 29-6.53 4-20.32 3.32-30 3.32-19.75 0-32.31-10.41-43.43-25C19.86 91.88 6.22 80.1 6.22 66.23c0-22.15 13.57-45.54 32.44-56.23 9.77-5.51 21-.69 32.44-.69 33.61.04 60.9 23.3 60.9 56.92z" stroke="#fff" stroke-miterlimit="10" stroke-width="2" opacity=".4"></path>
                                                <ellipse cx="69.09" cy="66.23" rx="69.09" ry="66.23"></ellipse>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit-img1.png" class="recruit-img recruit-img1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit-img2.png" class="recruit-img recruit-img2">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit-img3.png" class="recruit-img recruit-img3">
                        </div>
                    </section>

                    <section class="top-nav whbg">
                        <div class="xs-inner clearfix">
                            <a href="<?php echo home_url();?>/about-us/top-message" class="cta3 community">
                                <h2 class="section-title">TOP MESSAGE<br><span>トップメッセージ</span></h2>
                                <div class="cta1">
                                    <div class="svg-ui">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.png">
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
                                <div class="img-area bgset" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/top-message-link.png');">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cover.png">
                                </div>
                            </a>
                            <a href="<?php echo home_url();?>/about-us/vision-value" class="cta3 gallery">
                                <h2 class="section-title">VISION/VALUE<br><span>ビジョン/バリュー</span></h2>
                                <div class="cta1">
                                    <div class="svg-ui">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.png">
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
                                <div class="img-area bgset" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/vision-link.jpg');">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cover.png">
                                </div>
                            </a>
                        </div>
                    </section>

                    <footer class="gradient-bg">
                        <a href="#top" class="totop"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-icon-wh.png"></a>
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
                                    <a href="https://chatcommerce.zeals.co.jp" target="_blank;">チャットコマース<br>「ジールス」</a>
                                    <a href="https://zeals.co.jp/dx" target="_blank;">接客DX<br>「ジールス」</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url();?>/recruit/" class="head">RECRUIT</a>
                                    <a href="<?php echo home_url();?>/blog/" class="head">BLOG</a>
                                    <a href="<?php echo home_url();?>/news/" class="head">NEWS</a>
                                    <!--<a href="" class="head">GALLERY</a>-->
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

                </article>
            </main>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=<?php echo dump_javascript_version();?>"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugin/scrollOverFlow.js"></script>

        <script type="text/javascript">
            // 最初に、ビューポートの高さを取得し、0.01を掛けて1%の値を算出して、vh単位の値を取得
            let vh = window.innerHeight * 0.01;
            // カスタム変数--vhの値をドキュメントのルートに設定
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        </script>

        <script type="text/javascript">

            // if( window.matchMedia("(min-width: 769px)").matches ){

            // var $section = $('.js-section');

            // function setCurrent(index = 0) {
            //   // 一旦、すべてのsectionのクラスをとる
            //   $section.removeClass('is-show');
            //   // 現在のsectionのみにクラスを付与
            //   $section.eq(index).addClass('is-show');
            //   if($('.section2').hasClass('is-show')){
            //     $('.fv').addClass('hideAnimation1');
            //   } else {
            //     $('.fv').removeClass('hideAnimation1');
            //   }
            // }
            // $(window).load(function(){
            //     $(function() {
            //       if($('.section2').hasClass('is-show')){
            //         $.scrollify.disable();
            //       } else {
            //         $.scrollify.enable();
            //         $.scrollify({
            //             section : '.js-section', // 対象を指定
            //               easing: "swing", // イージングをしてい(jQueryのanimation)
            //               scrollSpeed: 2000, // スクロール時の速度
            //               scrollbars: true, // スクロールバーを表示するか
            //               before:function(index, section) {
            //                 setCurrent(index); // 現在のsectionにクラスを設定
            //               },
            //               afterRender:function() {
            //                 setCurrent(); // 現在のsectionにクラスを設定
            //               }
            //         });
            //       }
            //     });
            // });

            // }

            // if( window.matchMedia("(max-width: 768px)").matches ){
            //     $(function(){
            //         $('#fullpage').fullpage({
            //             scrollingSpeed: 1500,
            //             scrollOverflow: true,
            //             onLeave: function(index, nextIndex, direction){
            //                 if(index == 1 && direction =='down'){
            //                     $('.fv').addClass('hideAnimation1');
            //                     $('header').addClass('fixed');
            //                     setTimeout(function() {
            //                         $('.about').addClass('is-show');
            //                     }, 2000);
            //                 }
            //                 else if(index == 2 && direction =='up'){
            //                     $('.about').removeClass('is-show');
            //                     $('header').removeClass('fixed');
            //                     setTimeout(function() {
            //                         $('.fv').removeClass('hideAnimation1');
            //                     }, 1000);
            //                 }
            //                 else if(index == 2 && direction =='down'){
            //                     $('.circle-bg').addClass('op3');
            //                 }
            //             }

            //         });

            //     });
            // }

        </script>

        <!-- plugin
        <script src="js/plugin/swiper.min.js"></script>
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

        <?php wp_footer();?>

    </body>
</html>
