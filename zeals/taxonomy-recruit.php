<?php
global $en_title, $ja_title;
$en_title = 'INTERVIEW';
$ja_title = 'ジールスの仲間';
$term = get_queried_object();
get_header('recruit'); ?>
<section class="c-section">
    <div class="l-container">
        <div class="p-interview__inner">
            <div class="c-section__titleBox">
                <h3 class="c-section__titleBox__ja"><?php the_field('ja_archive_title', 'recruit_' . $term->term_id) ?></h3>
                <h3 class="c-section__titleBox__en"><?php the_field('en_archive_title', 'recruit_' . $term->term_id) ?></h3>
                <?php get_template_part('partials/interview/list'); ?>
                <?php get_template_part('partials/pagination'); ?>
                <?php get_template_part('partials/recuruit_tag/list'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer('recruit'); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
$(function(){
  $('.js-accordion').on('click', function() {
      $(this).next().slideToggle('fast');
      $(this).children('.p-tag__listIcon').toggleClass('open');
  });
});
</script>
