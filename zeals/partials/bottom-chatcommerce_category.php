<?php $chatcommerce_terms = get_terms(
    array(
        'taxonomy'   => 'chatcommerce_category',
        'hide_empty' => false,
    )
); ?>
<?php if ( !empty($chatcommerce_terms) ): ?>
    <section class="p-content__tagSearch">
        <h3 class="c-section__title c-section__title--mini">「チャットコマース」カテゴリから記事を探す</h3>
        <div class="p-content__tagSearch__tagList">
            <ul>
                <?php foreach($chatcommerce_terms as $chatcommerce_term): ?>
                    <?php //NOTE: カテゴリーページはfunctions.phpでURLを変更しているのでパスをハードコード ?>
                    <li><a href="<?php echo '/chatcommerce/blog/'.$chatcommerce_term->slug;?>"><?php echo $chatcommerce_term->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
