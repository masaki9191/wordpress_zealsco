<?php
global $en_title, $ja_title;
$en_title = 'INTERVIEW';
$ja_title = 'ジールスの仲間';
$interview_posts = $posts;
get_header('recruit'); ?>
<section class="c-section p-pickup">
    <div class="l-container">
        <div class="p-pickup__inner">
            <div class="c-section__titleBox">
                <h3 class="c-section__titleBox__ja">注目記事</h3>
                <h3 class="c-section__titleBox__en">PICKUP</h3>
            </div>
            <div class="p-pickup__pickupList">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                            $args = [
                                'post_type' => $post->post_type,
                                'posts_per_page' => 6,
                                'meta_query' => [
                                    [ 'key' => 'is_recommend', 'value' => true ]
                                ]
                            ];
                            $posts = get_posts($args);
                        ?>
                        <?php foreach($posts as $post):  ?>
                            <?php
                                setup_postdata($post);
                                $terms = get_the_terms( $post->ID, 'recruit' );
                                $term = $terms[array_key_first($terms)];
                            ?>
                            <div class="swiper-slide">
                              <a href="<?php the_permalink(); ?>">
                                <div class="c-article c-article--pickup">
                                  <div class="c-article__thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                                  <div class="c-article__infoBox">
                                    <p class="c-article__infoBox__tag"><?php echo $term->name; ?></p>
                                    <h4 class="c-article__infoBox__title"><?php the_title(); ?></h4>
                                    <p class="c-article__infoBox__pubDate"><?php echo get_post_time('Y/m/d'); ?></p>
                                  </div>
                                </div>
                              </a>
                            </div>
                        <?php endforeach; wp_reset_query(); $posts = $interview_posts; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-tag">
    <?php get_template_part('partials/recuruit_tag/list'); ?>
</section>
<section class="c-section p-interview">
<section class="c-section p-interview">
 <div class="p-interview__inner">
    <div class="l-container">
        <div class="c-section__titleBox">
            <h3 class="c-section__titleBox__ja">メンバーインタビュー</h3>
            <h3 class="c-section__titleBox__en">INTERVIEW</h3>
        </div>
        <?php get_template_part('partials/interview/list'); ?>
        <?php get_template_part('partials/pagination'); ?>
    </div>
</section>
<?php get_footer('recruit'); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
$(function(){
  var thumbnail = new Swiper('.p-pickup__pickupList > .swiper-container', {
    slidesPerView: 1,
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 3,
      },
    },
    autoplay: {
        delay: 3000,
    },
  });
  $('.js-accordion').on('click', function() {
      $(this).next().slideToggle('fast');
      $(this).children('.p-tag__listIcon').toggleClass('open');
  });
});
</script>
