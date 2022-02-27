<?php get_header(); ?>

<main class="Main -archive">

  <article class="Box">
    <div class="Box__inner inner">
      <header class="Box__header">

        <h2 class="Box__mainTitle"><?php the_archive_title(); ?></h2>
        <div class="Archive__subTitle">
          <form class="Search" method="get" action="<?php echo esc_url(home_url()); ?>">
            <div class="Search__inner">
              <label class="Search__label" for="s">検索：</label>
              <input class="Search__entry" type="text" value="<?php echo esc_attr(get_search_query()); ?>" name="s" id="s">
              <input class="Search__submit" type="submit" value="検索">
            </div>
          </form>
          検索結果：<?php echo esc_html($wp_query->found_posts); ?>件
        </div>
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

 
          

          <?php
$s = $_GET['s'];
$kodawari = $_GET['kodawari'];
 
//meta_query用
if($kodawari){
    foreach($kodawari as $val){
        $metaquerysp[] = array(
                'key'=>'kodawari',
                'value'=> $val,
                );
    }
}
$metaquerysp['relation'] = 'AND';
?>
 
<div>検索条件</div>
<?php if($s){ ?>検索キーワード：<?php echo $s; ?><br><?php } ?>
<?php if (is_array($kodawari)) { ?>カスタムフィールド：<?php
if (is_array($kodawari)) {
foreach($kodawari  as $val){
if ($val === end($kodawari)) {
echo $val;
    }else{
echo $val.", ";
}
}
}
}
 ?>
 
<div>検索結果</div>
 
<?php
query_posts( array(
    'meta_query' => $metaquerysp,
    's' => $s,
    )
);
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<div><?php the_title(); ?></div>
<div><?php the_content(); ?></div>
 
<?php endwhile; else : ?>
 
<div>該当なし</div>
 
<?php endif;
wp_reset_query(); ?>

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
