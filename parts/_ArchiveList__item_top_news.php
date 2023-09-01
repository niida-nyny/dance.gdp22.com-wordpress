                <div class="ArchiveList__item">
                  <a class="ArchiveList__link" href="<?php the_permalink(); ?>">
                    <div class="ArchiveList__latest_news_date">
                      <div class="ArchiveList__date">
                        <?php the_time('Y年m月d日'); ?>
                      </div>
                    </div>
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
                      <div class="ArchiveList__bottom">
                            <?php 
                            // $posttags=get_the_tags();
                              // if($posttags){
                              //   echo '<i class="fa fa-tags" aria-hidden="true"></i>';
                              //   foreach($posttags as $tag){
                              //     echo '<span class="'.$tag->slug.'">'.$tag->name.'</span>';}
                              //   }
                            ?>
                      </div>
                    </div>
                  </a>
                </div>

