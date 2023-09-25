<?php

/**
 * Template Name: 大阪エリア
 */

get_header();
?>

<main class="Main -single Single__body">

<?php

// 大阪エリアを全出力するロジック
echo '<h2 style="margin-bottom:20px">大阪エリア</h2>';
$area_key = 'area_small_05_01'; //ここを変更




// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '大阪市',
    '02' => '堺・泉南',
    '03' => '豊中・池田・高槻',
    '04' => '北河内・東大阪',
    '05' => '南河内',
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
