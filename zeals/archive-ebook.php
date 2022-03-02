<?php get_header('chatcommerce_blog_and_ebook'); ?>
<div class="l-content">
    <div class="l-content__main">
        <section class="c-section">
            <h3 class="c-section__title">ebook</h3>
            <?php get_template_part( 'partials/ebook/list' ); ?>
            <?php get_template_part('partials/pagination'); ?>
        </section>
    </div>
    <?php get_sidebar('chatcommerce_blog_and_ebook'); ?>
</div>
<?php
get_template_part('partials/bottom', 'chatcommerce_category');
get_template_part('partials/bottom', 'dx_category');
get_footer('chatcommerce_blog_and_ebook');
