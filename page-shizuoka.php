<?php
/**
 * Template Name: 静岡エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 静岡エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">静岡エリア</h2>';
$area_key = 'area_small_04_01'; //ここを変更

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '静岡市（静岡・清水）',
    '02' => '浜松・掛川・磐田',
    '03' => '焼津・藤枝・御前崎',
    '04' => '富士山周辺',
    '05' => '沼津・伊豆半島',
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