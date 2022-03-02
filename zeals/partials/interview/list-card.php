<?php
global $custom_class;
$terms = get_the_terms( $post->ID, 'recruit' );
$term = $terms[array_key_first($terms)];
?>
<li>
    <a href="<?php the_permalink(); ?>">
        <div class="c-article <?php echo empty($custom_class) ? 'c-article--interview' : $custom_class; ?>">
            <div class="c-article__thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
            <div class="c-article__infoBox">
                <p class="c-article__infoBox__tag">
                    <?php echo $term->name; ?>
                </p>
                <h4 class="c-article__infoBox__title"><?php the_title(); ?></h4>
                <p class="c-article__infoBox__pubDate"><?php echo get_post_time('Y/m/d'); ?></p>
            </div>
        </div>
    </a>
</li>
