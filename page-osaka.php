<?php

/**
 * Template Name: 大阪エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 大阪エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">大阪エリア</h2>';
$area_key = 'area_small_05_01'; //ここを変更




// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '大阪市',
    '02' => '堺・泉南',
    '03' => '豊中・池田・高槻',
    '04' => '北河内・東大阪',
    '05' => '南河内',
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
