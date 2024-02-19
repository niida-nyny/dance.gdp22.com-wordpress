<?php

/**
 * Template Name: 近畿エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');


// 近畿エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">近畿エリア</h2>';
$area_key = 'area_middle_05_kinki'; //ここを変更


// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
  '01' => '大阪府',
  '02' => '兵庫県(神戸エリア)',
  '03' => '京都府',
  '04' => '奈良県',
  '05' => '和歌山県',
  '06' => '三重県',
  '07' => '滋賀県',
  // '08' => '非表示'
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