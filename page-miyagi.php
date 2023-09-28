<?php
/**
 * Template Name: 宮城エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 宮城エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">宮城エリア</h2>';
$area_key = 'area_small_02_03'; //ここを変更

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '水戸・笠間',
    '02' => 'つくば・土浦・石岡',
    '03' => '守谷・取手・牛久・稲敷',
    '04' => '鹿島・水郷周辺',
    '05' => '北茨城・奥久慈周辺',
    '06' => '常総・古河'
    // '07' => '非表示'
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