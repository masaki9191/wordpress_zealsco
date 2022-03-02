<div class="p-entry__snsList">
    <ul>
        <li>
            <a
                href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post);?>"
                target="_blank;"
            >
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_facebook.svg" alt="Facebookシェア">
            </a>
        </li>
        <li>
            <a
                href="http://twitter.com/share?url=<?php echo get_permalink($post);?>&text=<?php echo trim(wp_title('-',false,'right')); ?> <?php echo bloginfo('name');?>"
                target="_blank;"
                onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"
            >
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter.svg" alt="twitterシェア">
            </a>
        </li>
        <li>
            <a
                href="https://b.hatena.ne.jp/entry/<?php the_permalink($post); ?>"
                data-hatena-bookmark-title="<?php echo get_the_title($post); ?>"
                data-hatena-bookmark-layout="touch"
                title="このエントリーをはてなブックマークに追加"
                target="_blank;"
            >
                <img
                    src="<?php echo get_template_directory_uri(); ?>/img/icon_hatebu.svg"
                    alt="このエントリーをはてなブックマークに追加"
                    style="border: none;"/>
            </a>
        </li>
    </ul>
</div>
