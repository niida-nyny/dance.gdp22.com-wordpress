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
                      <h2 class="ArchiveList__title">
                        <?php 
                          $terms = get_the_terms($post->ID,'latest_news');

                          if($terms){
                            // echo '<i class="fa fa-tags" aria-hidden="true"></i>';
                            foreach($terms as $term){
                              echo '<span class="'.$term->slug.'">'.$term->name.'</span>';}
                            }
                          
                          the_title(); 
                        ?>
                      </h2>
                      <div class="ArchiveList__text">
                        <?php 
                        the_excerpt(); 
                        // echo mb_substr(get_the_excerpt(), 0, 95);
                        // ...続きを読む
                        ?>
                      </div>
                    </div>
                  </a>

                  <div class="ArchiveList__bottom">
                    <div class="ArchiveList__date"><?php the_time('Y年m月d日'); ?></div>
                    <?php
                    // set_query_var('taxonomySlug', 'tag');
                    // set_query_var('displayLink', false);
                    // set_query_var('displayCount', false);
                    // set_query_var('unitName', '');
                    // get_template_part('parts/_TaxonomyList');
                    ?>
                            <?php $posttags=get_the_tags();
                              if($posttags){
                                echo '<i class="fa fa-tags" aria-hidden="true"></i>';
                                foreach($posttags as $tag){
                                  echo '<span class="'.$tag->slug.'">'.$tag->name.'</span>';}
                                }
                            ?>

                  </div>

                </div>