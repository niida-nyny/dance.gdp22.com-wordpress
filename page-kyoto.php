<?php

/**
 * Template Name: 京都エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 京都エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">京都エリア</h2>';
$area_key = 'area_small_05_03'; //ここを変更




// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '京都市',
    '02' => '宇治・南山城',
    '03' => '亀岡・丹波・福知山',
    '04' => '天橋立・丹後半島'
    // '05' => '非表示'
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
