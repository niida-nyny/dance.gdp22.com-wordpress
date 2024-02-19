<?php

/**
 * Template Name: 九州エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');


// 九州エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">九州エリア</h2>';
$area_key = 'area_middle_08_kyusyu'; //ここを変更


// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
  '01' => '福岡県',
  '02' => '佐賀県',
  '03' => '長崎県',
  '04' => '熊本県',
  '05' => '大分県',
  '06' => '宮崎県',
  '07' => '鹿児島県',  
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