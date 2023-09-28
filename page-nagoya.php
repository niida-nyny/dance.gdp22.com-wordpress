<?php
/**
 * Template Name: 名古屋エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 名古屋エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">名古屋エリア</h2>';
$area_key = 'area_small_04_01'; //ここを変更

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '名古屋市',
    '02' => '一宮・稲沢・愛西',
    '03' => '犬山・瀬戸・愛知郡',
    '04' => '大府・常滑・知多',
    '05' => '豊田・岡崎・西尾',
    '06' => '田原・豊橋・新城'
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