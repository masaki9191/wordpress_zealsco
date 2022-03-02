<?php get_header('chatcommerce_blog_and_ebook'); ?>
<div class="l-content">
    <div class="l-content__main">
        <section class="p-entry">
            <h1 class="p-entry__title"><?php the_title(); ?></h1>
            <div class="p-entry__thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url($post); ?>);"></div>
            <div class="p-entry__content">
                <?php the_content(); ?>
            </div>
            <?php get_template_part('partials/share', 'post'); ?>
            <?php get_template_part('partials/bottom', 'author'); ?>
        </section>
    </div>
    <?php get_sidebar('chatcommerce_blog_and_ebook'); ?>
</div>
<?php get_footer('chatcommerce_blog_and_ebook'); ?>
<script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
<?php get_template_part('partials/smooth_scroll'); ?>
