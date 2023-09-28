<?php
/**
 * Template Name: 滋賀エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 滋賀エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">滋賀エリア</h2>';
$area_key = 'area_small_05_07'; //ここを変更

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '大津市',
    '02' => '甲賀・湖南',
    '03' => '湖東',
    '04' => '湖北',
    '05' => '湖西'
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