<?php get_header(); ?>

    <main class="about-team about-cl about-us-page">
        <article>
            <section class="page-fv2">
                <h2>ABOUT U<span class="ls0">S</span></h2>
                <h3 class="sp">MEMBE<span class="ls0">R</span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/page-fv2-circle.png" class="c-img">
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

            <section class="page-nav pc">
                <div class="s-inner clearfix">
                    <ul class="clearfix">
                        <li class="shadow1">
                            <a href="<?php echo home_url();?>/about-us/top-message/">
                                <h3>TOP MESSAG<span class="ls0">E</span></h3>
                                <h4>トップメッセージ</h4>
                            </a>
                        </li>
                        <li class="shadow1">
                            <a href="<?php echo home_url();?>/about-us/vision-value/">
                                <h3>VISION/VALU<span class="ls0">E</span></h3>
                                <h4>ビジョン/バリュー</h4>
                            </a>
                        </li>
                        <li class="shadow1">
                            <a href="<?php echo home_url();?>/about-us/company/">
                                <h3>COMPAN<span class="ls0">Y</span></h3>
                                <h4>会社概要</h4>
                            </a>
                        </li>
                        <li class="shadow1">
                            <a href="<?php echo home_url();?>/about-us/community/">
                                <h3>COMMUNIT<span class="ls0">Y</span></h3>
                                <h4>運営コミュニティ</h4>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="page-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-icon.png">
                    <h2>MEMBE<span class="ls0">R</span></h2>
                </div>
            </section>

            <section class="pt8 pc mb8">
                <div class="ms-inner">
                    <h3 class="fs5 subcol mb2">Member</h3>
                    <ul class="col3-list clearfix member-list h48 ofh">
                        <?php $posts = get_posts(array('post_type'=>'member', 'order'=>'ASC', 'posts_per_page'=>10000, 'paged' => $paged)); ?>
                        <?php foreach($posts as $post): ?>

                        <li>
                            <a class="member">
                                <div class="radius img-area ofh member-img h15">
                                    <img class="lazy normal-img relative top-2" src="https://placehold.jp/270x250.png?text=Now%20loading" data-src="<?php the_field('t-img'); ?>" data-srcset="<?php the_field('t-img'); ?>">
                                    <img class="lazy hov-img relative top-2" src="https://placehold.jp/ffffff/ffffff/270x250.png" data-src="<?php the_field('t-hover-img'); ?>" data-srcset="<?php the_field('t-hover-img'); ?>">
                                </div>
                                <div class="member-info pt1 pl2">
                                    <p class="position"><?php the_field('t-class'); ?></p>
                                    <h4 class="mc"><?php the_field('t-first'); ?><br/><?php the_field('t-family'); ?></h4>
                                </div>
                                <div class="profile-toggle">
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="detail-profile">
                                <p><?php the_field('t-profile'); ?></p>
                                <?php if(post_custom('t-link-title')): ?>
                                <a href="<?php the_field('t-url'); ?>" target="blank_;" class="cta1 inline">
                                    <span><?php the_field('t-link-title'); ?></span>
                                    <div class="svg-ui">
                                        <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.png">
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
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </section>

            <div class="ms-inner pb1 more-btn-div pc">
                <p class="tcenter subcol"><a class="more-btn fs whc m0auto">MORE</a></p>
            </div>

            <section class="mt8 pc">
                <div class="ms-inner">
                    <h3 class="fs5 subcol mb2">Advisor</h3>
                    <ul class="col3-list clearfix member-list ofh">
                        <li>
                            <a class="">
                                <div class="radius img-area ofh member-img h15">
                                    <img class="lazy" src="https://placehold.jp/270x250.png?text=Now%20loading" data-src="https://storage.googleapis.com/zeals-corporate-assets/uploads/2019/10/fd0a2301-kanesaka-naoya.png" data-srcset="https://storage.googleapis.com/zeals-corporate-assets/uploads/2019/10/fd0a2301-kanesaka-naoya.png">
                                </div>
                                <div class="member-info pt1 pl2">
                                    <p class="position">Finance</p>
                                    <h4 class="mc">NAOYA<br/>KANESAKA</h4>
                                </div>
                                <div class="profile-toggle">
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="detail-profile">
                                <p>2007年、東京大学経済学部卒業。ゴールドマン・サックス証券株式会社の東京オフィス、サンフランシスコオフィスにて約8年間勤務。テクノロジー・金融業界を中心にクロスボーダーM&Aや資金調達のアドバイザリー業務、ゴールドマン・サックスが運営する投資ファンドを通じた投資及び投資先企業の価値向上業務に携わる。2014年よりマネーフォワードに参画し、2015年から2019年までCFOを務める（2018年秋以降はCo-CFO）。金融機関・事業会社との資本業務提携、2017 年の東証マザーズ上場、2018年の海外公募増資、M&A 等を主導。2019 年 6 月に米金融誌 Institutional Investor 社が公表した「The All-Japan ExecutiveTeam」で、「Best CFO3 位（金融・ノンバンク・その他領域）」に選出。</p>
                            </div>
                        </li>
                        <li>
                            <a class="">
                                <div class="radius img-area ofh member-img h15">
                                    <img class="lazy" src="https://placehold.jp/270x250.png?text=Now%20loading" data-src="https://storage.googleapis.com/zeals-corporate-assets/uploads/2019/10/9ff84b73-sekine-satoshi.jpg" data-srcset="https://storage.googleapis.com/zeals-corporate-assets/uploads/2019/10/9ff84b73-sekine-satoshi.jpg">
                                </div>
                                <div class="member-info pt1 pl2">
                                    <p class="position">Technology</p>
                                    <h4 class="mc">SATOSHI<br/>SEKINE</h4>
                                </div>
                                <div class="profile-toggle">
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="detail-profile">
                                <p>ニューヨーク大学にて自然言語処理の研究にて1998年に博士号。その後、ニューヨーク大学にて研究准教授。<br>アメリカ国立科学財団 (NSF) の「オンデマンド情報抽出」プロジェクトのリーダー。<br>2010年6月から楽天技術研究所ニューヨークの所長を歴任。日本で言語処理に関するコンサルタント会社のランゲージ・クラフトを設立、運営しています。<br>現在は理化学研究所 言語情報アクセス技術チーム チームリーダーとして「自分の判断を言葉で説明できる人工知能」を目指して開発研究をしています。<br>以下の動画は理化学研究所AIPにおいて関根チームリーダーが言語情報アクセス技術チームのプロジェクトについて語ったものへのリンクです。</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </section>

            <section class="ptb8 sp">
                <div class="ms-inner">
                    <h3 class="fs5 subcol mb2">Member</h3>
                    <ul class="clearfix sp-member-list col3-list">

                        <?php $posts = get_posts(array('post_type'=>'member', 'order'=>'ASC', 'posts_per_page'=>10000, 'paged' => $paged)); ?>
                        <?php foreach($posts as $post): ?>

                        <li>
                            <a class="member">
                                <div class="radius img-area ofh member-img sp-h55">
                                    <img class="lazy normal-img relative top-8" src="https://placehold.jp/270x250.png?text=Now%20loading" data-src="<?php the_field('t-img'); ?>" data-srcset="<?php the_field('t-img'); ?>">
                                    <img class="lazy hov-img relative top-8" src="https://placehold.jp/ffffff/ffffff/270x250.png" data-src="<?php the_field('t-hover-img'); ?>" data-srcset="<?php the_field('t-hover-img'); ?>">
                                </div>
                                <div class="member-info sp-pt5 sp-pl5">
                                    <p class="position fs"><?php the_field('t-class'); ?></p>
                                    <h4 class="mc fs5"><?php the_field('t-first'); ?><br/><?php the_field('t-family'); ?></h4>
                                </div>
                                <div class="profile-toggle">
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="detail-profile">
                                <p><?php the_field('t-profile'); ?></p>
                                <?php if(post_custom('t-link-title')): ?>
                                <a href="<?php the_field('t-url'); ?>" target="blank_;" class="cta1 inline">
                                    <span><?php the_field('t-link-title'); ?></span>
                                    <div class="svg-ui">
                                        <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.png">
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
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>


                    </ul>
                </div>
            </section>

            <section class="mt8 sp">
                <div class="ms-inner">
                    <h3 class="fs5 subcol mb2">Advisor</h3>
                    <ul class="col3-list clearfix sp-member-list ofh">
                        <li>
                            <a class="member">
                                <div class="radius img-area ofh member-img sp-h55">
                                    <img class="lazy" src="https://placehold.jp/270x250.png?text=Now%20loading" data-src="https://storage.googleapis.com/zeals-corporate-assets/uploads/2019/10/fd0a2301-kanesaka-naoya.png" data-srcset="https://storage.googleapis.com/zeals-corporate-assets/uploads/2019/10/fd0a2301-kanesaka-naoya.png">
                                </div>
                                <div class="member-info sp-pt5 sp-pl5">
                                    <p class="position fs">Finance</p>
                                    <h4 class="mc fs5">NAOYA<br/>KANESAKA</h4>
                                </div>
                                <div class="profile-toggle">
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="detail-profile">
                                <p>2007年、東京大学経済学部卒業。ゴールドマン・サックス証券株式会社の東京オフィス、サンフランシスコオフィスにて約8年間勤務。テクノロジー・金融業界を中心にクロスボーダーM&Aや資金調達のアドバイザリー業務、ゴールドマン・サックスが運営する投資ファンドを通じた投資及び投資先企業の価値向上業務に携わる。2014年よりマネーフォワードに参画し、2015年から2019年までCFOを務める（2018年秋以降はCo-CFO）。金融機関・事業会社との資本業務提携、2017 年の東証マザーズ上場、2018年の海外公募増資、M&A 等を主導。2019 年 6 月に米金融誌 Institutional Investor 社が公表した「The All-Japan ExecutiveTeam」で、「Best CFO3 位（金融・ノンバンク・その他領域）」に選出。</p>
                            </div>
                        </li>
                        <li>
                            <a class="">
                                <div class="radius img-area ofh member-img sp-h55">
                                    <img class="lazy" src="https://placehold.jp/270x250.png?text=Now%20loading" data-src="https://storage.googleapis.com/zeals-corporate-assets/uploads/2019/10/9ff84b73-sekine-satoshi.jpg" data-srcset="https://storage.googleapis.com/zeals-corporate-assets/uploads/2019/10/9ff84b73-sekine-satoshi.jpg">
                                </div>
                                <div class="member-info pt1 pl2">
                                    <p class="position fs">Technology</p>
                                    <h4 class="mc fs5">SATOSHI<br/>SEKINE</h4>
                                </div>
                                <div class="profile-toggle">
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="detail-profile">
                                <p>ニューヨーク大学にて自然言語処理の研究にて1998年に博士号。その後、ニューヨーク大学にて研究准教授。<br>アメリカ国立科学財団 (NSF) の「オンデマンド情報抽出」プロジェクトのリーダー。<br>2010年6月から楽天技術研究所ニューヨークの所長を歴任。日本で言語処理に関するコンサルタント会社のランゲージ・クラフトを設立、運営しています。<br>現在は理化学研究所 言語情報アクセス技術チーム チームリーダーとして「自分の判断を言葉で説明できる人工知能」を目指して開発研究をしています。<br>以下の動画は理化学研究所AIPにおいて関根チームリーダーが言語情報アクセス技術チームのプロジェクトについて語ったものへのリンクです。</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </section>

        </article>
    </main>
<?php get_footer(); ?>
