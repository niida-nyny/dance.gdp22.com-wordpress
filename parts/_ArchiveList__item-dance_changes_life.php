                <div class="ArchiveList__item-mb">

                  <a class="ArchiveList__link" href="<?php the_permalink(); ?>">

                    <?php if (is_archive('amazing-movies')) : ?>
                      <figure class="ArchiveList__thumbnail">
                        <?php
                        if (has_post_thumbnail()) :
                          the_post_thumbnail('img_300_200');
                        else :
                        ?>
                          <img class="ArchiveList__img" src="<?php echo esc_url(get_theme_file_uri('/img/no-image.png')); ?>" alt="No Image">
                        <?php endif; ?>
                      </figure>
                    <?php endif; ?>

                    <div class="ArchiveList__meta">
                      <h2 class="ArchiveList__title"><?php the_title(); ?>さん</h2>
                      <div class="ArchiveList__text">
                        <?php 
                        the_excerpt(); 
                        // echo mb_substr(get_the_excerpt(), 0, 95);
                        // ...続きを読む
                        ?>
                      </div>
                    </div>
                  </a>

                  <div class="ArchiveList__bottom mt-3">
                    <div class="ArchiveList__date"><?php the_time('Y年m月d日'); ?></div>
                    <?php
                    set_query_var('taxonomySlug', 'recruit');
                    set_query_var('displayLink', false);
                    set_query_var('displayCount', false);
                    set_query_var('unitName', '');
                    get_template_part('parts/_TaxonomyList');
                    ?>
                  </div>

                </div>