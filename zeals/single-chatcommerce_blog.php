<?php
/*
 * 無理やり/blog/カテゴリー/post_nameというURLを実現しているのでこちらも無理をする
 * やっている事
 * 1. URLで指定されたtermに関連するpostを検索する
 * 2. 検索して取得されたpostからURLで指定されたpost_nameに一致するものを探す
 * 3. 一致しなければ404を返す
 */
$args = [
    'post_type' => 'chatcommerce_blog',
    'post_status' => 'publish',
    'post_name' => $name
];
$posts = get_posts($args);
if (empty($posts)) {
    $post = $posts[array_key_first($posts)];
    $terms = wp_get_post_terms($post->ID, 'chatcommerce_category');
    if (empty($terms) || $terms[array_key_first($terms)]->slug != $chatcommerce_category) {
        status_header(404);
        nocache_headers();
        get_template_part('404');
        return;
    }
}
setup_postdata($post);
get_template_part('partials/single', 'blog');
