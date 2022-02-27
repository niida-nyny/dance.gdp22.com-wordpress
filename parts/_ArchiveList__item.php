                <div class="ArchiveList__item-mb">
                  <a class="ArchiveList__link" href="<?php the_permalink(); ?>">
                    <figure class="ArchiveList__thumbnail">
						                      <?php
                      // アイキャッチ画像が設定されているか確認
                      if (has_post_thumbnail()) :
                        // アイキャッチ画像が設定されている時の処理
                        // アイキャッチ画像img要素を出力
                      ?>
                        <?php the_post_thumbnail('img_150_100'); ?>
                      <?php else : ?>
                        <img class="ArchiveList__img" src="<?php echo esc_html(get_theme_file_uri()); ?>/img/thumbnail.jpg" alt="お知らせタイトル">
                      <?php endif; ?>
 </figure>
                    <div class="ArchiveList__meta">
                      <h2 class="ArchiveList__title"><?php the_title(); ?></h2>
                      <div class="ArchiveList__text"><?php the_excerpt(); ?></div>
                      <div class="ArchiveList__bottom">
                        <div class="ArchiveList__date"><?php the_time('Y年m月d日'); ?></div>

                        <?php
                        set_query_var('taxonomySlug', 'new_release');
                        set_query_var('displayLink', false);
                        set_query_var('displayCount', false);
                        set_query_var('unitName', '');
                        get_template_part('parts/_TaxonomyList');
                        ?>

                        <?php /*
                        <div class="TaxsonomyList">
                          <ul class="TaxsonomyList__list">
                            <li class="TaxsonomyList__item">
                              <span class="TaxsonomyList__span">
                                カテゴリ名
                              </span>
                            </li>
                            <li class="TaxsonomyList__item">
                              <span class="TaxsonomyList__span">
                                カテゴリ名
                              </span>
                            </li>
                            <li class="TaxsonomyList__item">
                              <span class="TaxsonomyList__span">
                                カテゴリ名
                              </span>
                            </li>
                          </ul>
                        </div>
                        */ ?>


                      </div>
                    </div>
                  </a>
                </div>
