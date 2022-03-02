          <?php $recruit_terms = get_terms(['taxonomy'   => 'recruit', 'hide_empty' => false]); ?>
          <?php if (!empty($recruit_terms) && !is_wp_error($recruit_terms)): ?>
            <section class="c-section p-occupation">
              <div class="l-container">
                <div class="p-occupation__inner">
                  <div class="c-section__titleBox">
                    <h3 class="c-section__titleBox__ja js-ignore">募集職種</h3>
                    <h3 class="c-section__titleBox__en js-ignore">CURRENT OPENINGS</h3>
                    <p class="c-section__titleBox__description">ジールスは新卒/既卒を問わず、<br class="is-sp">様々な職種の人材を積極的に募集しております。</p>
                  </div>
                  <div class="p-occupation__occupationList">
                    <ul>
                      <?php foreach($recruit_terms as $recruit_term): ?>
                          <?php
                              $hrmos_link = get_field('hrmos_link', 'recruit_'.$recruit_term->term_id);
                              if ( empty($hrmos_link) ) { continue; }
                          ?>
                          <li>
                              <a href="<?php echo $hrmos_link; ?>" target="_blank"><?php echo $recruit_term->name ?></a>
                          </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </section><?php //end .c-section.p-occupation ?>
          <?php endif; ?>
        </div><?php //end .p-content__inner ?>
      </div><?php //end .p-content ?>
    </div><?php //end #flexbox ?>
  </article>
</main>
<?php get_footer(); ?>
