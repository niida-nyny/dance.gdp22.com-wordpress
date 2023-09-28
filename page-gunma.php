<?php
/**
 * Template Name: 群馬エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 群馬エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">群馬エリア</h2>';
$area_key = 'area_small_03_07'; //ここを変更

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '前橋・高崎',
    '02' => '桐生・伊勢崎・太田・館林',
    '03' => '沼田・みなかみ・尾瀬・赤城',
    '04' => '渋川・伊香保・草津・吾妻',
    '05' => '富岡・藤岡・安中'
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