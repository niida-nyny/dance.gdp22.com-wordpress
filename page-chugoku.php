<?php

/**
 * Template Name: 中国エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');


// 中国エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">中国エリア</h2>';
$area_key = 'area_middle_06_chugoku'; //ここを変更


// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
  '01' => '広島県',
  '02' => '岡山県',
  '03' => '山口県',
  '04' => '鳥取県',
  '05' => '島根県',
  // '06' => '非表示'
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