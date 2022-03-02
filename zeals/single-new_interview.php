<?php get_header('recruit');
$terms = get_the_terms( $post->ID, 'recruit' );
$term = $terms[array_key_first($terms)];
setup_postdata($post);
?>
<section class="p-entry">
    <div class="l-container">
        <div class="p-entry__inner">
            <img style="border-radius: 20px; width: 100%; margin-top: 30px;" src="<?php echo get_the_post_thumbnail_url(); ?>">
            <h1 class="p-entry__title"><?php the_title(); ?></h1>
            <div class="p-entry__description">
                <?php the_field('description', $post->ID); ?>
            </div>
            <div class="p-entry__toc" id="toc">
                <h2>目次</h2>
            </div>

            <?php
                $i_name = get_field('interviewee_name');
            ?>
            <?php if(!empty($i_name)): ?>
            <div class="p-entry__profile">
                <h2 class="p-entry__profile__title">PROFILE</h2>
                <div class="p-entry__profile__contentBox">
                    <div class="p-entry__profile__contentBox__thumbnail" style="background-image: url(<?php the_field('interviewee_thumbnail'); ?>);"></div>
                    <div class="p-entry__profile__contentBox__infoBox">
                        <p class="p-entry__profile__contentBox__infoBox__title"><?php echo $term->name; ?></p>
                        <p class="p-entry__profile__contentBox__infoBox__name"><?php the_field('interviewee_name') ?></p>
                        <p class="p-entry__profile__contentBox__infoBox__description"><?php the_field('interviewee_description'); ?></p>
                    </div>
                </div>
                <?php
                $i_name_2 = get_field('interviewee_name_2');
                ?>
                <?php if(!empty($i_name_2)): ?>
                <div class="p-entry__profile__contentBox">
                    <div class="p-entry__profile__contentBox__thumbnail" style="background-image: url(<?php the_field('interviewee_thumbnail_2'); ?>);"></div>
                    <div class="p-entry__profile__contentBox__infoBox">
                        <p class="p-entry__profile__contentBox__infoBox__title"><?php echo $term->name; ?></p>
                        <p class="p-entry__profile__contentBox__infoBox__name"><?php the_field('interviewee_name_2') ?></p>
                        <p class="p-entry__profile__contentBox__infoBox__description"><?php the_field('interviewee_description_2'); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php
                $i_name_3 = get_field('interviewee_name_3');
                ?>
                <?php if(!empty($i_name_3)): ?>
                <div class="p-entry__profile__contentBox">
                    <div class="p-entry__profile__contentBox__thumbnail" style="background-image: url(<?php the_field('interviewee_thumbnail_3'); ?>);"></div>
                    <div class="p-entry__profile__contentBox__infoBox">
                        <p class="p-entry__profile__contentBox__infoBox__title"><?php echo $term->name; ?></p>
                        <p class="p-entry__profile__contentBox__infoBox__name"><?php the_field('interviewee_name_3') ?></p>
                        <p class="p-entry__profile__contentBox__infoBox__description"><?php the_field('interviewee_description_3'); ?></p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <div class="p-entry__content"><?php the_content(); ?></div>
            <?php get_template_part('partials/share', 'post'); ?>
            <?php get_template_part('partials/bottom', 'author'); ?>
            <?php
                    $args = [
                        'post_type' => $post->post_type,
                        'posts_per_page' => 3,
                        $term->taxonomy => $term->slug,
                        'post__not_in' => [$post->ID]
                    ];
                    $posts = get_posts($args);
            if(!empty($posts)): ?>
                <div class="p-entry__relatedPost">
                    <h2 class="p-entry__relatedPost__title">関連記事</h2>
                    <?php
                        get_template_part('partials/interview/list');
                    ?>
                </div>
            <?php endif; wp_reset_query(); ?>
            <div class="p-entry__pickupPost">
                <h2 class="p-entry__pickupPost__title">注目記事</h2>
                <?php
                    $args = [
                        'post_type' => $post->post_type,
                        'posts_per_page' => 3,
                        'post__not_in' => [$post->ID],
                        'meta_query' => [
                            [ 'key' => 'is_recommend', 'value' => true ]
                        ]
                    ];
                    $posts = get_posts($args);
                    get_template_part('partials/interview/list');
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer('recruit'); ?>
<script type="text/javascript">
$(function(){
    var mainIdPrefix = 'h-',
        mainIdIndex = 1,
        subIdPrefix = `${mainIdPrefix}${mainIdIndex}-`,
        subIdIndex = 1,
        titles = [...document.querySelectorAll('.p-entry__content > h2,h3:not(.js-ignore)')],
        summaryHtml = document.createElement('ol');
    titles.forEach(function(elm) {
        switch(elm.localName) {
        case 'h2':
            elm.id = mainIdPrefix + mainIdIndex;
            var listChild = document.createElement('li');
            var anchor = document.createElement('a');
            anchor.innerText = elm.innerHTML;
            anchor.href = `#${elm.id}`;
            listChild.appendChild(anchor);
            summaryHtml.appendChild(listChild);
            ++mainIdIndex;
            break;
        case 'h3':
            elm.id = subIdPrefix + subIdIndex;
            var lastElement = summaryHtml.lastElementChild.lastElementChild;

            switch(lastElement.localName) {
            case 'a':
                var childUl = document.createElement('ul');
                var childLi = document.createElement('li');
                var childAnchor = document.createElement('a');
                childAnchor.innerText = elm.innerText;
                childAnchor.href = `#${elm.id}`;
                childLi.appendChild(childAnchor);
                childUl.appendChild(childLi);
                summaryHtml.lastElementChild.appendChild(childUl);
                break;
            case 'ul':
                var childLi = document.createElement('li');
                var childAnchor = document.createElement('a');
                childAnchor.innerText = elm.innerText;
                childAnchor.href = `#${elm.id}`;
                childLi.appendChild(childAnchor);
                lastElement.appendChild(childLi);
                break;
            }
            ++subIdIndex;
            break;
        }
        document.querySelector('#toc').appendChild(summaryHtml);
    });
});
</script>
<?php get_template_part('partials/smooth_scroll'); ?>
