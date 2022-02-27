■ 必須関数
<?php wp_head(); ?>
<?php wp_body_open(); ?>
<?php wp_footer(); ?>

■ テーマCSS読み込み
<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">

■ 外部ファイル読み込み
<?php echo esc_url(get_theme_file_uri('/テーマフォルダからのパス')); ?>

■ リンク用URL
<a href="<?php echo esc_url(home_url()); ?>/WordPressフォルダからのパス"></a>

■ 表示用メインループ
<?php /***** メインループ開始 *****/ ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <?php endwhile; ?>
<?php endif; ?>
<?php /***** メインループ終了 *****/ ?>

■ 表示用サブループ
<?php /***** サブループ条件 *****/ ?>
<?php
$args = [
  'post_type' => 'post',
  'posts_per_page' => 6,
];
$the_query = new WP_Query($args);
?>

<?php /***** サブループ開始 *****/ ?>
<?php if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : ?>
    <?php $the_query->the_post(); ?>

  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php /***** サブループ終了 *****/ ?>

■ 先頭固定表示サブループ
<?php /***** サブループ条件 *****/ ?>
<?php
$stickyList = get_option('sticky_posts');
if (count($stickyList) > 0) :
?>
  <?php
  $args = [
    'post_type' => 'post',
    'posts_per_page' => -1,
    'post__in' => get_option('sticky_posts'),
  ];
  $the_query = new WP_Query($args);
  ?>

  <?php /***** サブループ開始 *****/ ?>
  <?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : ?>
      <?php $the_query->the_post(); ?>

    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
  <?php /***** サブループ終了 *****/ ?>
<?php endif; ?>

■ 情報表示用関数
<?php the_title(); ?> タイトル表示
<?php the_excerpt(); ?> 抜粋文表示
<?php the_content(); ?> 本文表示
<?php the_time('Y年m月d日'); ?> 投稿日表示
<?php the_modified_date('Y年m月d日'); ?> 更新日表示
<?php the_permalink(); ?> ページのURLを表示


■ アイキャッチ画像機能を有効:functions.php
<?php
/*********************************
アイキャッチ画像機能
 **********************************/
// アイキャッチ画像機能を使えるようにする
if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}
?>

■ アイキャッチ画像サイズ指定:functions.php
<?php
// アイキャッチ画像サイズの設定
if (function_exists('add_image_size')) {
  add_image_size('img_300_200', 300, 200, true);
  add_image_size('img_960_200', 960, 200);
}
?>

■ アイキャッチ画像表示
<?php
if (has_post_thumbnail()) {
  the_post_thumbnail('サイズ');
}
//サイズ
// the_post_thumbnail('thumbnail');
// the_post_thumbnail('medium');
// the_post_thumbnail('large');
// the_post_thumbnail('full');
?>

■ メニュー機能を有効:functions.php
<?php
/*********************************
 メニュー機能追加
 **********************************/
// メニュー機能追加
// メニューに位置指定チェックボックス作成
function register_menu()
{
  register_nav_menus([
    'メニュースラッグ（半角英数）' => '表示文字',
  ]);
}
add_action('init', 'register_menu');
?>

■ メニュー表示
<?php
wp_nav_menu([
  'container' => false,
  'menu_id' => 'ul要素id属性値',
  'menu_class' => 'ul要素class属性値',
  'theme_location' => 'メニュースラッグ（半角英数）',
]);
?>

■ 共通パーツ用ファイル名と読み込み関数
ヘッダー header.php
フッター footer.php
サイドバー sidebar.php

<?php get_header(); ?>
<?php get_footer(); ?>
<?php get_sidebar(); ?>

■ オリジナル共通パーツ読み込み関数
<?php get_template_part('ファイルパス(拡張子省略可)'); ?>

■ 自動タイトルタグ出力:functions.php
<?php
/*********************************
タイトルタグを自動出力する
 **********************************/
add_theme_support('title-tag');
// サイト名とページタイトルの区切り文字変更
function change_title_separator($separator)
{
  $separator = '|';
  return $separator;
}
add_filter('document_title_separator', 'change_title_separator');
?>

■ ページネーションを追加
<?php
the_posts_pagination([
  'type' => 'list', //plain/listを選択
  'screen_reader_text' => ' ', //タイトル文字(空文字不可)
  'end_size' => 1, //両端のページ番号表示数
  'prev_next' => true, //前へ次への表示・非表示
  'prev_text' => '&larr;', //前への文字を変更
  'next_text' => '&rarr;', //次への文字を変更
  'mid_size' => 1, //現在ページ隣にいくつページ番号を表示するか
]);
?>

■ 条件分岐関数
<?php
is_front_page() // フロントページか調べる
is_home() // トップページか調べる
is_singular() // 投稿または固定ページか調べる
is_page() // 固定ページか調べる
is_single() // 投稿詳細ページか調べる
is_sticky() // 投稿が「先頭に固定表示（sticky）」か調べる
is_archive() // アーカイブページか調べる
is_post_type_archive() // カスタム投稿タイプアーカイブページか調べる
is_category() // カテゴリーアーカイブページか調べる
is_tag() // タグアーカイブページか調べる
is_date() // 日付アーカイブページ（年別/月別/日別アーカイブページ）か調べる
is_year() // 年別アーカイブページか調べる
is_month() // 月別アーカイブページか調べる
is_day() // 日別アーカイブページか調べる
is_search() // 検索結果ページか調べる
have_posts() // 投稿があるか調べる
has_post_thumbnail() // アイキャッチ画像が指定されているか調べる
has_tag() // タグがついているか調べる
has_category() // カテゴリーに属しているか調べる in_category()と// ほぼ同じ
have_comments() // コメントがあるか調べる
comments_open() // コメント投稿を許可しているか調べる
?>


■ エスケープ
<?php
esc_url();
esc_html();
esc_attr();
wp_kses_post();
?>


■ 投稿のカテゴリ表示
<?php
set_query_var('taxonomySlug', 'category');
set_query_var('displayLink', false);
set_query_var('displayCount', false);
set_query_var('unitName', '');
get_template_part('parts/_TaxonomyList');
?>

━━━━━━━━━━━━━━━━━━━━━━━━
■ acfリピートフィールド
<?php /***** old レッスン詳細 acfリピートフィールド *****/ ?>
<h2>レッスン詳細</h2>
<ul>
<?php
  $rows = get_field('lesson_all');
  if($rows){
    foreach($rows as $row) {
      echo '<li class="lesson_detail">';

      // /***** 曜日 *****/ ラジオボタン出力
      echo '●曜日：'.$row['which_day'];

      // /***** レッスンタイトル *****/ テキスト出力
      echo $row['lesson_title'];

      // /***** ダンスの種類 *****/ チェックボックス出力
      if ($row['dances']) {
        echo '●ダンスの種類：';
        $sub_arrays = $row['dances'];
        // echo v($sub_arrays);
        foreach($sub_arrays as $sub_array) {
          echo $sub_array['label'];
        }
      }

      // /***** サルサスタイル *****/ チェックボックス出力
      if ($row['salsa_style']) {
        echo '●サルサスタイル：';
        $sub_arrays = $row['salsa_style'];
        // echo v($sub_arrays);
        foreach($sub_arrays as $sub_array) {
          echo $sub_array['label'];
        }
      }


      // /***** バチャータスタイル *****/ チェックボックス出力
      if ($row['bachata_style']) {
        echo '●バチャータスタイル：';
        $sub_arrays = $row['bachata_style'];
        // echo v($sub_arrays);
        foreach($sub_arrays as $sub_array) {
          echo $sub_array['label'];
        }
      }

      // /***** キゾンバスタイル *****/ チェックボックス出力
      if ($row['kizomba_style']) {
        echo '●キゾンバスタイル：';
        $sub_arrays = $row['kizomba_style'];
        // echo v($sub_arrays);
        foreach($sub_arrays as $sub_array) {
          echo $sub_array['label'];
        }
      }

      // /***** その他のダンススタイル *****/ チェックボックス出力
      if ($row['other_dance_style']) {
        echo '●その他のダンススタイル：';
        $sub_arrays = $row['other_dance_style'];
        // echo v($sub_arrays);
        foreach($sub_arrays as $sub_array) {
          echo $sub_array['label'];
        }
      }

      // /***** 開催場所 *****/ 投稿オブジェクト出力
      echo '●開催場所：';
      echo $row['place_lesson']->post_title;
      // v($row['place_lesson']);

      // /***** エリア出力 *****/ 投稿オブジェクトのIDからカスタムタクソノミー出力
      echo '●エリア：';
      $terms = get_the_terms($row['place_lesson']->ID,'area_location');
      foreach( $terms as $term ) {
      echo $term->name;
      }

      // /***** 開始時間 *****/ 時間出力
      echo '●開始時間：'.$row['lesson_start'];

      // /***** 終了時間 *****/ 時間出力
      echo '●終了時間：'.$row['lesson_end'];

      // /***** 講師 *****/ 投稿オブジェクト出力
      echo '講師：';
      echo $row['instructor_01']->post_title;

      // /***** ダンスレベル *****/ チェックボックス出力
      if ($row['dance_level']) {
      echo '●ダンスレベル：';
      $sub_arrays = $row['dance_level'];
      // echo v($sub_arrays);
      foreach($sub_arrays as $sub_array) {
        echo $sub_array['label'];
      }
    }

      // /***** クラスの形態 *****/ チェックボックス出力
      if ($row['about_class']) {
        echo '●クラスの形態：';
        $sub_arrays = $row['about_class'];
        // echo v($sub_arrays);
        foreach($sub_arrays as $sub_array) {
          echo $sub_array['label'];
        }
      }

      // /***** 支払い方法 *****/ チェックボックス出力
      if ($row['how_to_pay']) {
        echo '●支払い方法：';
        $sub_arrays = $row['how_to_pay'];
        // echo v($sub_arrays);
        foreach($sub_arrays as $sub_array) {
          echo $sub_array['label'];
        }
      }

      // /***** レッスン受講料 *****/ テキスト出力
      if ($row['lesson_price']) {
      echo '●レッスン受講料：'.$row['lesson_price'];
      }

      // /***** レッスンその他の費用 *****/ テキスト出力
      if ($row['lesson_other_price']) {
      echo '●レッスンその他の費用：'.$row['lesson_other_price'];
      }

      // /***** 月謝制の場合 *****/ テキスト出力
      if ($row['lesson_price_month']) {
        echo '●月謝制の料金：'.$row['lesson_price_month'];

      // /***** 1クール制の期間 *****/ テキスト出力
      if ($row['lesson_price_1cool']) {
        echo '●1クール制の料金：'.$row['lesson_price_1cool'];
      }

      // /***** 1クールの期間 *****/ テキスト出力
      if ($row['how_long_1cool']) {
        echo '●1クールの期間：'.$row['how_long_1cool'];
      }

      // /***** レッスン画像 *****/ 画像出力※要調整
      if ($row['lesson_image']) {
        echo '●レッスン画像：'.$row['lesson_image'];
      }

      // /***** 備考 *****/ テキストエリア出力
      echo '●レッスン備考：'.$row['lesson_bikou']; 
        echo '</li>';
      }

    }
  }
    ?>
    </ul>
    <?php /***** レッスン詳細 ここまで *****/ ?>
━━━━━━━━━━━━━━━━━━━━━━━━