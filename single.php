<?php get_header(); ?>

<main class="Main -single">

  <article class="Single">
    <div class="Single__inner inner">
      <header class="Single__header">
        <?php /***** メインループ開始 *****/ ?>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <h2 class="Single__mainTitle"><?php the_title(); ?></h2>
            <div class="Single__date"><?php the_time('Y年m月d日'); ?></div>
            <div class="Single__meta">

              <?php
              set_query_var('taxonomySlug', 'category');
              set_query_var('displayLink', true);
              set_query_var('displayCount', true);
              set_query_var('unitName', '件');
              get_template_part('parts/_TaxonomyList');
              ?>
              <?php
              set_query_var('taxonomySlug', 'post_tag');
              set_query_var('displayLink', true);
              set_query_var('displayCount', true);
              set_query_var('unitName', '件');
              get_template_part('parts/_TaxonomyList');
              ?>
              <?php /* ?>
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
                  <?php */ ?>

            </div>
            <figure class="Single__figure">

            </figure>
      </header>
      <div class="Single__body">
        <?php the_content(); ?>
      </div>
      <?php comments_template(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php /***** メインループ終了 *****/ ?>
    </div>
    <div class="Single__footer">
      <div class="Single__prev">
        <?php
        if (get_previous_post()) {
          previous_post_link(
            '&larr; 「%link」はこちら',
            '前の投稿',
          );
        } else {
          echo '前の記事なし';
        }
        ?>
      </div>
      <div class="Single__next">
        <?php
        if (get_next_post()) {
          next_post_link(
            '「%link」はこちら &rarr; ',
            '次の投稿',
          );
        } else {
          echo '次の記事なし';
        }
        ?>
      </div>
    </div>

  </article>

</main>

<?php get_footer(); ?>
