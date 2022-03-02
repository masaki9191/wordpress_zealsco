<?php get_header('chatcommerce_blog_and_ebook'); ?>
<?php setup_postdata($post); ?>
<div class="p-form">
    <div class="p-form__content">
        <div class="p-form__content__thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
        <h1 class="p-form__content__title"><?php the_title(); ?></h1>
        <p class="p-form__content__description"><?php the_content(); ?></p>
    </div>
    <div class="p-form__formrun">
        <?php /*<div
            class="formrun-embed"
            data-formrun-form="<?php echo explode('/', get_post_meta($post->ID, 'pardot_form_url', true))[3]; ?>"
            data-formrun-redirect="true">
            </div> */ ?>
        <iframe
            src="<?php echo the_field('pardot_form_url'); ?>"
            width="100%"
            height="<?php echo empty(the_field('pardot_form_height')) ? '1100' : the_field('pardot_form_url'); ?>"
            type="text/html"
            frameborder="0"
            allowTransparency="true"
            style="border: 0"
        ></iframe>
    </div>
</div>
<?php get_footer('chatcommerce_blog_and_ebook'); ?>
<script src="https://sdk.form.run/js/v2/embed.js"></script>
