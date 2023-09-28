<?php
// 「get_query_var」で固定ページの「set_query_var」で渡されたものを受け取る
$args = get_query_var('args'); 

$area_key = $args['area_key'];
$area_value = $args['area_value'];
$area_name = $args['area_name'];

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
?>