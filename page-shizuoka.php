<?php

/**
 * Template Name: 静岡エリア
 */

get_header();
?>

<main class="Main -single">

<?php

// 静岡エリアを全出力するロジック
echo '<h3 style="margin-bottom:20px">静岡エリア</h3>';
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
    $venues = get_venues_by_area($area_key, $area_value);

    if ($venues) {
        echo '<h3>' . $area_name . '</h3>';
        echo '<ul style="margin-bottom:20px">';
        foreach ($venues as $venue_id => $venue_name) {
            echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
        }
        echo '</ul>';
    } else {
        // echo '<p>' . $area_name . 'に該当する会場はありません。</p>';
    }
}


?>




</main>

<?php
get_footer(); ?>
