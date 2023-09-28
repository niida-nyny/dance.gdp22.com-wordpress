<?php
/**
 * Template Name: 愛媛エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 愛媛エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">愛媛エリア</h2>';
$area_key = 'area_small_07_01'; //ここを変更

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '松山・伊予',
    '02' => '今治・新居浜・しまなみ海道',
    '03' => '大洲・内子・久万',
    '04' => '宇和島・愛南'
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