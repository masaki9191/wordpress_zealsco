<?php
/*
 * Template Name: 全ブログ一覧
 */
?>
<?php get_header('chatcommerce_blog_and_ebook'); ?>
<div class="l-content">
    <div class="l-content__main">
        <?php $posts = get_posts(['post_type'=>'dx_blog', 'posts_per_page'=>6]); ?>
        <?php if(!empty($posts)): ?>
            <section class="c-section">
                <h3 class="c-section__title">DX<span>（デジタルトランスフォーメーション）</span></h3>
                <?php get_template_part( 'partials/blog/list' ); ?>
                <p class="c-section__button">
                    <a href="/dx/blog">「DX」の記事一覧を見る</a>
                </p>
            </section>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        <?php $posts = get_posts(['post_type'=>'chatcommerce_blog', 'posts_per_page'=>6]); ?>
        <section class="c-section">
            <h3 class="c-section__title">チャットコマース</h3>
            <?php get_template_part( 'partials/blog/list' ); ?>
            <?php wp_reset_query(); ?>
            <p class="c-section__button">
                <a href="/chatcommerce/blog">「チャットコマース」の記事一覧を見る</a>
            </p>
        </section>
        <?php $posts = get_posts(['post_type'=>'ebook', 'posts_per_page'=>6]); ?>
        <section class="c-section">
            <h3 class="c-section__title">ebook</h3>
            <?php get_template_part( 'partials/ebook/list' ); ?>
            <p class="c-section__button">
                <a href="/ebook">「ebook」<br class="is-sp">の記事一覧を見る</a>
            </p>
        </section>
    </div>
    <?php get_sidebar('chatcommerce_blog_and_ebook'); ?>
</div>
<?php get_footer('chatcommerce_blog_and_ebook'); ?>
