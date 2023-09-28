<?php
/**
 * Template Name: 長崎エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php
// 共通の文章
get_template_part('parts/_VenueText');

// 長崎エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">長崎エリア</h2>';
$area_key = 'area_small_08_03'; //ここを変更

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '長崎・西彼杵',
    '02' => '佐世保・平戸',
    '03' => '雲仙・島原',
    '04' => '諫早・大村',
    '05' => '五島・壱岐・対馬'
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