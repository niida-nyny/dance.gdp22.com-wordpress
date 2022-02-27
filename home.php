<?php /*
* 投稿一覧
*/
?>
<?php get_header(); ?>

<main class="Main -archive">

  <article class="Box">
    <div class="Box__inner inner">
      <header class="Box__header">

        <h2 class="Box__mainTitle">最新情報</h2>
      </header>
      <div class="Box__body">
        <div class="ArchiveList">
          <?php /***** メインループ開始 *****/ ?>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php if (is_sticky()) : ?>
                <div class="ArchiveList__sticky"></div>
              <?php endif; ?>
              <?php get_template_part('parts/_ArchiveList__item'); ?>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php /***** メインループ終了 *****/ ?>
        </div>
      </div>

      <?php

      /**
       * ページネーション:メインループ
       * $wp_query：メインループ用「WP_Query」オブジェクトが必要
       */

      $current_num_page = max(1, get_query_var('paged'));
      $max_num_pages = $wp_query->max_num_pages;
      if (wp_is_mobile()) {
        $pagination_format = array(
          'current' => $current_num_page,
          'total' => $max_num_pages,
          'type'  => 'array',
          'prev_text' => '前へ',
          'next_text' => '次へ',
          'end_size' => 1, //初期値：1  両端のﾍﾟｰｼﾞﾘﾝｸの数
          'mid_size' => 1, //初期値：2  現在のﾍﾟｰｼﾞの両端にいくつページリンクを表示するか（現在のページは含まない）
          'prev_next' => false, //初期値：true  リストの中に「前へ」「次へ」のリンクを含むか
        );
      } else {
        $pagination_format = array(
          'current' => $current_num_page,
          'total' => $max_num_pages,
          'type'  => 'array',
          'prev_text' => '前へ',
          'next_text' => '次へ',
          'end_size' => 1, //初期値：1  両端のﾍﾟｰｼﾞﾘﾝｸの数
          'mid_size' => 2, //初期値：2  現在のﾍﾟｰｼﾞの両端にいくつページリンクを表示するか（現在のページは含まない）
          'prev_next' => false, //初期値：true  リストの中に「前へ」「次へ」のリンクを含むか
        );
      }
      $pagination = paginate_links($pagination_format);
      ?>

      <?php if (is_array($pagination)) : ?>

        <div class="Pagination">
          <ul class="Pagination__list">
            <?php foreach ($pagination as $pagination_link) : ?>
              <li class="Pagination__item"><?php echo wp_kses_post($pagination_link); ?></li>
            <?php endforeach;  ?>
          </ul>
          <div class="Pagination__total"><?php echo esc_html($current_num_page); ?> / <?php echo esc_html($max_num_pages); ?>
          </div>
        </div>

      <?php endif; ?>
    </div>
  </article>
</main>

<?php get_footer(); ?>
