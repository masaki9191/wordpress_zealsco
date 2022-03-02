<?php get_header();?>

            <main class="page-gallery">
                <article>

                    <section class="page-fv1">
                        <h2>GELLAR<span class="ls0">Y</span></h2>
                        <h3>ギャラリー</h3>
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
                        <ul class="s-inner clearfix">
                            <?php $posts = get_posts(array('post_type'=>'gallery', 'posts_per_page'=>15, 'exclude' => 62, 'paged' => $paged)); ?>
                            <?php foreach($posts as $post): ?>
                                <li>
                                    <a href="<?php the_field('gellery-link'); ?>" target="_blank;" class="img-area">
                                        <div class="img bgset" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/btn-arrow.png">
                                    </a>
                                    <!--<a href="<?php the_field('gellery-link'); ?>" target="_blank;" class="text">
                                        <h3><?php the_title();?></h3>
                                    </a>-->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/list-bg-circle.png" class="list-bg-circle">
                                </li>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                        <div class="pager">
                            <?php global $wp_rewrite;
                            $paginate_base = get_pagenum_link(1);
                            if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
                                $paginate_format = '';
                                $paginate_base = add_query_arg('paged','%#%');
                            }
                            else{
                                $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                                user_trailingslashit('page/%#%/','paged');;
                                $paginate_base .= '%_%';
                            }
                            echo paginate_links(array(
                                'base' => $paginate_base,
                                'format' => $paginate_format,
                                'total' => $wp_query->max_num_pages,
                                'mid_size' => 4,
                                'current' => ($paged ? $paged : 1),
                                'prev_text' => '«',
                                'next_text' => '»',
                            )); ?>
                        </div>
                    </section>

                </article>
            </main>

            <?php get_footer();?>