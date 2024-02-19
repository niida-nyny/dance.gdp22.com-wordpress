<?php

/**
 * Template Name: 中部エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');


// 中部エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">中部エリア</h2>';
$area_key = 'area_middle_04_chubu'; //ここを変更


// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
  '01' => '静岡県',
  '02' => '愛知県(名古屋)',
  '03' => '新潟県',
  '04' => '富山県',
  '05' => '石川県',
  '06' => '福井県',
  '07' => '山梨県',
  '08' => '長野県',
  '09' => '岐阜県',  
  // '10' => '非表示'
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