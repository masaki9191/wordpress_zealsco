<?php
// meta name="generator" を消す
remove_action('wp_head', 'wp_generator');

add_theme_support( 'title-tag' );

//サムネイル
add_theme_support('post-thumbnails');
add_filter('jpeg_quality', function($arg){return 100;});

if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
add_image_size( 'pc_single_thumbnails', 800, 500, true );
add_image_size( 'pc_list_thumbnails', 608, 380, true );
add_image_size( 'main_thumbnails', 480, 300, true );
add_image_size( 'mobile_list_thumbnails', 240, 180, true );
}

function dump_javascript_version() {
    return '0.1.0';
}

function page_is_ancestor_of($slug){
  global $post;
  $page = get_page_by_path($slug);
  $result = false;
  if(isset($page)){
      foreach ($post->ancestors as $ancestor) {
          if($ancestor == $page->ID){ $result = true; }
      }
  }
  return $result;
}

function blog_rewrite_rule() {
    add_rewrite_rule('^dx/blog/([^/]*)/page/([^/]*)/?','index.php?dx_category=$matches[1]&post_type=dx_blog&paged=$matches[2]','top');
    add_rewrite_rule('^dx/blog/([^/]*)/([^/]*)/?','index.php?dx_category=$matches[1]&post_type=dx_blog&name=$matches[2])','top');
    add_rewrite_rule('^dx/blog/([^/]*)/?','index.php?dx_category=$matches[1]&post_type=dx_blog','top');

    add_rewrite_rule('^chatcommerce/blog/([^/]*)/page/([^/]*)/?','index.php?chatcommerce_category=$matches[1]&post_type=chatcommerce_blog&paged=$matches[2]','top');
    add_rewrite_rule('^chatcommerce/blog/([^/]*)/([^/]*)/?','index.php?chatcommerce_category=$matches[1]&post_type=chatcommerce_blog&name=$matches[2])','top');
    add_rewrite_rule('^chatcommerce/blog/([^/]*)/?','index.php?chatcommerce_category=$matches[1]&post_type=chatcommerce_blog','top');
}

add_action('init', 'blog_rewrite_rule', 10, 0);

/*
 * chatcommerce_blogのパーマリンクを変更するための関数
 * 関連するchatcommerce_categoryが存在しない時リンクが生成されない
 */
function chatcommerce_blog_link($permalink, $post) {
    switch($post->post_type) {
    case 'chatcommerce_blog':
    case 'dx_blog':
        $terms = get_the_terms($post, str_replace('_blog', '', $post->post_type) . '_category');
        if ( empty($terms) ) { return; }
        $term = $terms[array_key_first($terms)];
        return str_replace('/blog/', '/blog/'.$term->slug.'/', $permalink);
    }
    return $permalink;
}

add_filter('post_type_link', 'chatcommerce_blog_link', 10, 2);
add_filter('post_link', 'chatcommerce_blog_link', 10, 2);

/*
 * popular postsのhtml
 */
function popular_posts_custom_html($popular_posts, $instance) {
    $cell_html_class = '';
    switch($instance['post_type']) {
        case 'chatcommerce_blog':
            $cell_html_class = 'c-widget__articleList__articleBox';
            break;
        case 'ebook':
            $cell_html_class = 'c-widget__articleList__articleBox c-widget__articleList__articleBox--ebook';
            break;
    }
    $output = '<div class="c-widget__articleList"><ul>';
    foreach( $popular_posts as $popular_post ) {
        if(mb_strlen($popular_post->title, 'UTF-8')>28){
            $title= mb_substr($popular_post->title, 0, 28, 'UTF-8').'…';
        } else {
            $title = $popular_post->title;
        }
        $output .= "
        <li>
            <a href='" . get_the_permalink($popular_post->id) . "'>
                <div class='. $cell_html_class .'>
                    <div
                        class='c-widget__articleList__articleBox__thumbnail'
                        style='background-image: url(".wp_get_attachment_url( get_post_thumbnail_id($popular_post->id) ).");'
                    ></div>
                    <h4 class='c-widget__articleList__articleBox__title'>".$title."</h4>
                </div>
            </a>
        </li>
";
    }
    return $output . '</div></ul>';
}

add_filter('wpp_custom_html', 'popular_posts_custom_html', 10, 2);
function change_title_separator( $sep ){
  $sep = '|';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );
