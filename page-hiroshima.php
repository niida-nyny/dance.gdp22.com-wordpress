<?php
/**
 * Template Name: 広島エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 広島エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">広島エリア</h2>';
$area_key = 'area_small_07_01'; //ここを変更

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '広島市',
    '02' => '福山市',
    '03' => '尾道市',
    '04' => '東広島市',
    '05' => '呉・竹原・三原',
    '06' => '宮島・廿日市・大竹',
    '07' => '三次・庄原',
    '08' => '芸北・三段峡'
    // '09' => '非表示'
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