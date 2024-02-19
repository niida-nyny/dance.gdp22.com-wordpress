<?php

/**
 * Template Name: 東北エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');


// 東北エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">東北エリア</h2>';
$area_key = 'area_middle_01_tohoku'; //ここを変更


// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
  '01' => '青森県',
  '02' => '岩手県',
  '03' => '宮城県',
  '04' => '秋田県',
  '05' => '山形県',
  '06' => '福島県',  
  // '07' => '非表示'
);

foreach ($choices as $area_value => $area_name) {
  // $area_key、$area_value、$area_name をここで設定
  $args = array(
      'area_key' => $area_key,
      'area_value' => $area_value,
      'area_name' => $area_name,
  );

  set_query_var('args', $args); // 変数をテンプレートに渡す
  get_template_part('parts/_Venue');
}

?>

</main>

<?php
get_footer();
?>