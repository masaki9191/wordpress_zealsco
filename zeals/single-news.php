<?php get_header();?>

            <main class="page-news-detail">
                <article>

                    <section class="page-fv1">
                        <h2>NEW<span class="ls0">S</span></h2>
                        <h3>ニュース</h3>
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

                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                    <section class="content">
                        <div class="s-inner post-cont shadow1">
                            <div class="head" style="height:auto!important;">
                                <?php $main = get_post_meta($post->ID, 'main-img', true);?>
                                <?php if(empty($main)):?>
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%;" >
                                <?php else:?>
                                <img src="<?php the_field('main-img'); ?>" style="width:100%;" >
                                <?php endif;?>
                            </div>
                            <div class="date">
                                <p>
                                    <span><?php echo get_post_time('Y'); ?></span>
                                    <?php echo get_post_time('m/d'); ?>
                                </p>
                            </div>
                            <h2><?php echo mb_substr(strip_tags($post->post_title),0); ?></h2>
                            <div class="txt">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="t-center">
                            <a href="javascript:void(0);" onclick="window.history.back();" class="cta1 font-700">
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
                                <span>一覧に戻る</span>
                            </a>
                        </div>
                        
                    </section>

                    


                </article>
            </main>

            <?php get_footer();?>