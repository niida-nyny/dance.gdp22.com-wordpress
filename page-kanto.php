<?php

/**
 * Template Name: 関東エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');


// 関東エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">関東エリア</h2>';
$area_key = 'area_middle_03_kanto'; //ここを変更


// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '東京都',
    '02' => '神奈川県',
    '03' => '埼玉県',
    '04' => '千葉県',
    '05' => '茨城県',
    '06' => '栃木県',
    '07' => '群馬県',
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