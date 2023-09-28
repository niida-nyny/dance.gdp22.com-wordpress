<?php

/**
 * Template Name: 福岡エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 福岡エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">福岡エリア</h2>';
$area_key = 'area_small_08_01'; //ここを変更




// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '福岡市',
    '02' => '太宰府・宗像・糟屋郡',
    '03' => '北九州市',
    '04' => '北九州市周辺',
    '05' => '筑豊',
    '06' => '久留米・筑後',
    '07' => '糸島'
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
