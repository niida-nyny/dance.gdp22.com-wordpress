<?php

/**
 * 固定ページ
 */

get_header();
?>

<main class="Main -single container px-0">
  <?php /***** メインループ開始 *****/ ?>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="Single">
        <div class="Single__inner inner">
          <header class="Single__header">
            <h2 class="Single__mainTitle mb-3"><?php the_title('', '<span>さん</span>'); ?> </h2>
            <?php /*<div class="Single__date"><?php the_time('Y年m月d日'); ?></div> */ ?>
            <?php /* <div class="Single__meta">
              <div class="TaxsonomyList">
                <ul class="TaxsonomyList__list">
                  <li class="TaxsonomyList__item">
                    <a class="TaxsonomyList__link" href="archive.html">
                      カテゴリ名
                    </a>
                  </li>
                  <li class="TaxsonomyList__item">
                    <a class="TaxsonomyList__link" href="archive.html">
                      カテゴリ名
                    </a>
                  </li>
                  <li class="TaxsonomyList__item">
                    <a class="TaxsonomyList__link" href="archive.html">
                      カテゴリ名
                    </a>
                  </li>
                </ul>
              </div>
            </div>
			*/ ?>
            <?php
            if (has_post_thumbnail()) : ?>
              <figure class="Single__figure">
                <?php
                the_post_thumbnail('img_960_50');
                ?>
              <?php else : ?>
                <?php /*<img class="Single__eyecatch" src="<?php echo esc_attr(get_theme_file_uri('/img/eyecatch.jpg')); ?>" alt="アイキャッチ">*/ ?>
              </figure>
            <?php endif; ?>
          </header>
          <div class="Single__body Single__body-interview">
            <?php the_content(); ?>
          </div>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php /***** メインループ終了 *****/ ?>

</main>

<?php
get_footer();
?>
