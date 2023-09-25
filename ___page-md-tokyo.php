<?php

/**
 * 固定ページ
 */

get_header();
?>

<main class="Main -single">

<?php



// 中エリア-関東エリア-東京
$venues = get_venues_with_area_middle_tokyo();
if ($venues) {
  echo '<ul>';
  foreach ($venues as $venue_id => $venue_name) {
    echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
  }
  echo '</ul>';
} else {
  echo '東京エリアに該当する会場はありません。';
}





  ?>
  



</main>

<?php
get_footer(); ?>