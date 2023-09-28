<?php

/**
 * Template Name: 兵庫エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 兵庫エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">兵庫エリア</h2>';
$area_key = 'area_small_05_02'; //ここを変更




// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '神戸市',
    '02' => '宝塚・西宮・尼崎',
    '03' => '明石・東播磨・北播磨',
    '04' => '姫路・中播磨・西播磨',
    '05' => '淡路島',
    '06' => '丹波篠山',
    '07' => '城崎・山陰海岸・但馬山地'
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
