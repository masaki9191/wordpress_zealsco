<div class="l-articleList l-articleList--interview">
    <ul>
        <?php foreach($posts as $post): setup_postdata($post); ?>
            <?php get_template_part('partials/interview/list', 'card'); ?>
        <?php endforeach; ?>
    </ul>
</div>
