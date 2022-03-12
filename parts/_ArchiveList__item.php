                <div class="ArchiveList__item-mb">

                  <a class="ArchiveList__link" href="<?php the_permalink(); ?>">
                    <div class="ArchiveList__meta">
                      <h2 class="ArchiveList__title"><?php the_title(); ?></h2>
                      <div class="ArchiveList__text"><?php the_excerpt(); ?></div>
                    </div>
                  </a>

                  <div class="ArchiveList__bottom">
                    <div class="ArchiveList__date"><?php the_time('Y年m月d日'); ?></div>
                      <?php
                      set_query_var('taxonomySlug', 'recruit');
                      set_query_var('displayLink', true);
                      set_query_var('displayCount', false);
                      set_query_var('unitName', '');
                      get_template_part('parts/_TaxonomyList');
                      ?>
                    </div>

                  </div>