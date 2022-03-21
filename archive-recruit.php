<?php get_header(); ?>

<main class="Main -archive">

  <article class="Box">
    <div class="Box__inner inner">
      <header class="Box__header">

        <?php /** 新規追加のリンク*  */ ?>
        <div class="card mb-5 text-center">
          <div class="card-header bg-primary text-white ">新規投稿はこちら！！</div>
          <div class="card-body text-left px-3">

            <!-- <h5 class="card-title mb-3">ぜひあなたの『ダンスに関する様々な「ニーズ」をマッチング』に投稿してください</h5> -->
            <p class="card-text mb-3">
              このページはダンスに関する様々な情報、知識、技術、作品、物品、仲間、人材等々<u><span class="text-black bg-keikou"><strong>”必要としている人”</strong></span>と<span class="text-black bg-keikou p-2"><strong>”提供したい人”</strong></span>を結びつけるためのプラットホーム</u>です。
            </p>

            <p class="card-text mb-3">
              自分が必要としているものを、譲渡、交換、購入することによって、人類は他の動物では成し得ない発展を遂げました。
            </p>

            <p class="card-text mb-5">
              このサイトの基本理念に近づくために、ダンスに関する様々なモノを<u><span class="text-black bg-keikou"><strong>持っている人</strong></span>は、それを自分だけのものにせず、<span class="text-black bg-keikou"><strong>持たない人</strong></span>のためにぜひ役立てて</u>ください。
            </p>
            
            <p>使用例）</p>
            <ul class="list-group list-group-flush checked_list mx-3">
              <li class="list-group-item">◯月×日開始のクローズドクラスのメンバー募集</li>
              <li class="list-group-item">センシュアルバチャータ パフォーマンスクラス あと男性2名募集</li>
              <li class="list-group-item">◯月×日はキャンペーンでプライベートレッスンがお得！</li>
              <li class="list-group-item">振り付けを売りたし、書いたし</li>
              <li class="list-group-item">センシュアルバチャータ パフォーマンスクラス あと男性2名募集</li>

              <li class="list-group-item">チームのpvを作りたいので撮影、編集できる人募集</li>
              <li class="list-group-item">イベントの受付などをしてくれるボランティアスタッフ募集</li>
              <li class="list-group-item">イベントでパフォーマンスができるグループ募集</li>
              <li class="list-group-item">パフォーマンス練習したけど発表する場所がない、発表できる場所を募集</li>
            </ul>
            <div class="text-center">
              <a href="https://dance.gdp22.com/aaa-2170" class="btn btn-primary">
                ダンスに関する様々な「ニーズ」をマッチングに投稿する
              </a>
            </div>
          </div>
        </div>

        <?php echo do_shortcode('[searchandfilter id="2181"]'); ?>

        <h2 class="Box__mainTitle-recruit">
          <?php the_archive_title(); ?>
          <?php echo $wp_query->found_posts; ?>件</h2>
      </header>
      <div class="Box__body">
        <div class="ArchiveList">
          <?php /***** メインループ開始 *****/ ?>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
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
  </article>
</main>

<?php get_footer(); ?>