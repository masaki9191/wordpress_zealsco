<?php
$base_args = ['limit'=>5, 'range' => 'last30days'];
$chatcommerce_blog_args = [ 'post_type'=>'chatcommerce_blog' ] + $base_args;
$ebook_args = [ 'post_type'=>'ebook' ] + $base_args;
?>
<div class="l-content__sidebar">
    <section class="c-widget">
        <h3 class="c-widget__title">よく読まれている記事</h3>
        <?php if(function_exists('wpp_get_mostpopular')){
            wpp_get_mostpopular($chatcommerce_blog_args);
        } ?>
    </section>
    <section class="c-widget p-ebook">
        <h3 class="c-widget__title">人気のebook</h3>
        <?php if(function_exists('wpp_get_mostpopular')){
            wpp_get_mostpopular($ebook_args);
        } ?>
    </section>
</div>
