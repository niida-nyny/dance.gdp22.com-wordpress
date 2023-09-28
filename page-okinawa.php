<?php

/**
 * Template Name: 沖縄エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');


// 沖縄エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">沖縄エリア</h2>';
$area_key = 'area_middle_09_okinawa'; //ここを変更


// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
  '01' => '那覇エリア',
  '02' => '本島北部',
  '03' => '本島中部',
  '04' => '本島南部',
  '05' => '石垣島・宮古島・先島諸島',
  '06' => '久米島・慶良間群島'
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