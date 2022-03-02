<div class="p-entry__authorBox">
    <p class="p-entry__authorBox__title">この記事を書いた人</p>
    <div class="p-entry__authorBox__author">
        <p class="p-entry__authorBox__author__thumbnail">
            <?php echo get_avatar($post->post_author); ?>
        </p>
        <div class="p-entry__authorBox__author__infoBox">
            <p class="p-entry__authorBox__author__infoBox__pubDate">日付：<?php echo get_post_time('Y/m/d') ?></p>
            <p class="p-entry__authorBox__author__infoBox__name"><?php the_author(); ?></p>
        </div>
    </div>
</div>
