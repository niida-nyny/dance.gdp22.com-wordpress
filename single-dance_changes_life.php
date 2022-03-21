<?php

/**
 * 固定ページ
 */

get_header();
?>

<main class="Main -single">
  <?php /***** メインループ開始 *****/ ?>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="Single">
        <div class="Single__inner inner">
          <header class="Single__header">
            <h2 class="Single__mainTitle"><?php the_title(); ?> </h2>
            <?php /*<div class="Single__date"><?php the_time('Y年m月d日'); ?></div> */?>
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
                // the_post_thumbnail('img_960_50');
                ?>
              <?php else : ?>
                <?php /*<img class="Single__eyecatch" src="<?php echo esc_attr(get_theme_file_uri('/img/eyecatch.jpg')); ?>" alt="アイキャッチ">*/ ?>
              </figure>
            <?php endif; ?>
          </header>
          <div class="Single__body">
          <div class="card mb-3">
  <img src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch02.jpg')); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">こーひん<span>さん</span></h5>
    <p class="card-text">大手新聞社勤務の「こーひん」さん。仕事人間で〜〜〜</p>
    <p class="card-text"><small class="text-muted">取材・撮影・文 樹水峻、新居田治彦</small></p>
  </div>
</div>

<h1 class="display-3">見出し~~~</h1>
<p class="lead">
  リード文〜〜〜〜〜〜〜〜〜〜〜
</p>
<p>本文〜〜〜〜〜〜〜〜</p>

<h1 class="display-3">見出し~~~</h1>
<p class="lead">
  リード文〜〜〜〜〜〜〜〜〜〜〜
</p>
<p>本文〜〜〜〜〜〜〜〜</p>

<h1 class="display-3">見出し~~~</h1>
<p class="lead">
  リード文〜〜〜〜〜〜〜〜〜〜〜
</p>
<p>本文〜〜〜〜〜〜〜〜</p>


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
