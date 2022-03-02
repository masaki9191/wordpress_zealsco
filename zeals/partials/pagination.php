<?php
$raw_pagination = get_the_posts_pagination();
$replace = [
    '<h2 class="screen-reader-text">投稿ナビゲーション</h2>' => '',
    '<div class="nav-links">' => '<div class="c-section__pagenation__pageList"><ul>',
    'current' => 'is-current',
    '<span' => '<li><span',
    '/span>' => '/span></li>',
    '<a' => '<li><a',
    '/a>' => '/a></li>',
    'class="next' => 'style="display: none;" class="next',
    'class="prev' => 'style="display: none;" class="prev'
];
?>
<div class="c-section__pagenation">
    <?php echo strtr($raw_pagination, $replace); ?>
</div>
