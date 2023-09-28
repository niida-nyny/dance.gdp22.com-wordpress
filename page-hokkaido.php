<?php

/**
 * Template Name: 北海道エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');


// 北海道エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">北海道エリア</h2>';
$area_key = 'area_middle_01_hokkaido'; //ここを変更


// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
  '01' => '札幌市',
  '02' => '旭川・富良野・士別',
  '03' => '函館・松前・檜山',
  '04' => '小樽・ニセコ・積丹',
  '05' => '千歳・石狩・夕張・深川',
  '06' => '洞爺・苫小牧・室蘭・えりも',
  '07' => '稚内・留萌・音威子府',
  '08' => '網走・知床斜里・北見・紋別',
  '09' => '帯広・十勝',
  '10' => '釧路・根室・阿寒・摩周・知床羅臼'
  // '11' => '非表示'
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