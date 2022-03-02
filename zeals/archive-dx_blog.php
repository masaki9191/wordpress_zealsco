<?php $term = get_queried_object(); ?>
<?php get_header('chatcommerce_blog_and_ebook'); ?>
<div class="l-content">
    <div class="l-content__main">
        <section class="c-section">
            <h3 class="c-section__title">
                <?php echo $term->name == 'dx_blog' ? 'DX' : $term->name; ?>
            </h3>
            <?php get_template_part( 'partials/blog/list' ); ?>
            <?php get_template_part('partials/pagination'); ?>
        </section>
    </div>
    <?php get_sidebar('chatcommerce_blog_and_ebook'); ?>
</div>
<?php
get_template_part('partials/bottom', 'chatcommerce_category');
get_template_part('partials/bottom', 'dx_category');
get_footer('chatcommerce_blog_and_ebook');
