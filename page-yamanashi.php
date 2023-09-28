<?php
/**
 * Template Name: 山梨エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 山梨エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">山梨エリア</h2>';
$area_key = 'area_small_04_07'; //ここを変更

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '甲府・山梨・笛吹',
    '02' => '北杜・小淵沢・南アルプス',
    '03' => '富士五湖・忍野・富士吉田',
    '04' => '身延・下部温泉',
    '05' => '大月・都留・道志'
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