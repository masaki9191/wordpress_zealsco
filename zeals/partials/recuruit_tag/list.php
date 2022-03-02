<?php $recruit_terms = get_terms(['taxonomy' => 'recruit', 'hide_empty' => false]); ?>

<div class="l-container">
    <div class="p-tag__inner is-pc">
        <h2 class="p-tag__title">Tags　タグで検索</h2>
        <div class="p-tag__tagList">
            <ul>
                <?php foreach($recruit_terms as $recruit_term): ?>
                    <?php $term_link = get_term_link( $recruit_term, $recruit_term->taxonomy ); ?>
                    <?php if ( is_wp_error( $term_link ) ) { continue; } ?>
                    <li>
                        <a href="<?php echo esc_url( $term_link ); ?>"><?php echo $recruit_term->name; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="p-tag__inner is-sp">
        <h2 class="p-tag__title">Tags　タグで検索</h2>
        <div class="p-tag__tagList">
            <ul>
                <?php foreach(array_slice($recruit_terms, 0, 2) as $recruit_term): ?>
                    <?php $term_link = get_term_link( $recruit_term, $recruit_term->taxonomy ); ?>
                    <?php if ( is_wp_error( $term_link ) ) { continue; } ?>
                    <li>
                        <a href="<?php echo esc_url( $term_link ); ?>"><?php echo $recruit_term->name; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php if (count($recruit_terms) > 2): ?>
            <p class="js-accordion p-tag__moreDisplay"><span class="p-tag__listIcon">></span>他のタグを見る</p>
            <div class="p-tag__tagList">
                <ul>
                    <?php foreach(array_slice($recruit_terms, 2) as $recruit_term): ?>
                        <?php $term_link = get_term_link( $recruit_term, $recruit_term->taxonomy ); ?>
                        <?php if ( is_wp_error( $term_link ) ) { continue; } ?>
                        <li>
                            <a href="<?php echo esc_url( $term_link ); ?>"><?php echo $recruit_term->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</div>
