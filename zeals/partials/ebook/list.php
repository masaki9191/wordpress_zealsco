<div class="l-articleList">
    <ul>
        <?php foreach($posts as $post): ?>
            <li>
                <a href="<?php echo esc_url(get_permalink($post)); ?>">
                    <div class="c-article">
                        <div
                            class="c-article__thumbnail"
                            style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>"
                        ></div>
                        <div class="c-article__infoBox">
                            <p class="c-article__infoBox__pubDate">
                                <?php echo get_post_time('Y/m/d'); ?>
                            </p>
                            <h4 class="c-article__infoBox__title c-article__infoBox__title--ebook">
                                <?php echo get_the_title($post); ?>
                            </h4>
                        </div>
                        <div class="c-article__button">
                            <p>DOWNLOAD</p>
                        </div>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
