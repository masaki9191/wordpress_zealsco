<?php $dx_terms = get_terms(
    array(
        'taxonomy'   => 'dx_category',
        'hide_empty' => false,
    )
); ?>
<?php if ( !empty($dx_terms) ): ?>
    <section class="p-content__tagSearch">
        <h3 class="c-section__title c-section__title--mini">「DX」カテゴリから記事を探す</h3>
        <div class="p-content__tagSearch__tagList">
            <ul>
                <?php foreach($dx_terms as $dx_term): ?>
                    <?php //NOTE: カテゴリーページはfunctions.phpでURLを変更しているのでパスをハードコード ?>
                    <li><a href="<?php echo '/dx/blog/'.$dx_term->slug;?>"><?php echo $dx_term->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
