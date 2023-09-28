<?php
/**
 * Template Name: 熊本エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 熊本エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">熊本エリア</h2>';
$area_key = 'area_small_08_04'; //ここを変更

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '熊本周辺・宇土・山都',
    '02' => '阿蘇',
    '03' => '菊池・山鹿・玉名',
    '04' => '八代・水俣・人吉',
    '05' => '天草'
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