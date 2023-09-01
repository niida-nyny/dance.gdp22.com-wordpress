<?php

/**
 * 固定ページ
 */

get_header();
?>

<main class="Main -single">

<?php


// 01-北海道エリア
$venues = get_venues_with_area_large_hokkaido();
if ($venues) {
  echo '<ul>';
  foreach ($venues as $venue_id => $venue_name) {
    echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
  }
  echo '</ul>';
} else {
  echo '北海道エリアに該当する会場はありません。';
}


// 02-東北エリア
// $venues = get_venues_with_area_large_tohoku();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '東北エリアに該当する会場はありません。';
// }

// 03-関東エリア
// $venues = get_venues_with_area_large_kanto();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '関東エリアに該当する会場はありません。';
// }

// 04-中部エリア
// $venues = get_venues_with_area_large_chubu();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '中部エリアに該当する会場はありません。';
// }


// 05-近畿エリア
// $venues = get_venues_with_area_large_kinki();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '近畿エリアに該当する会場はありません。';
// }


// 06-中国エリア
// $venues = get_venues_with_area_large_chugoku();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '中国エリアに該当する会場はありません。';
// }


// 07-四国エリア
// $venues = get_venues_with_area_large_shikoku();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '四国エリアに該当する会場はありません。';
// }


// 08-九州エリア
// $venues = get_venues_with_area_large_kyusyu();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '九州エリアに該当する会場はありません。';
// }


// 09-沖縄エリア
// $venues = get_venues_with_area_large_okinawa();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '沖縄エリアに該当する会場はありません。';
// }


// 大エリア一覧を出力する
// 全ての投稿からACFで作成したarea_largeの一覧を取得する
// $areas = get_field_object('area_large')['choices'];

// v($areas);
// 取得したエリアの一覧を出力する
// foreach ($areas as $key => $value) {
//   echo $key . ' : ' . $value . '<br>';
// }

// フィールドの選択肢を出力する　成功
// $field_key = 'field_6450da2f1d17f'; // カスタムフィールドのフィールドキーを指定
// $field = get_field_object($field_key); // カスタムフィールドの情報を取得
// $choices = $field['choices']; // カスタムフィールドの選択肢を取得

// foreach ($choices as $value => $label) {
//   echo $value . ' : ' . $label . '<br>';
// }



// ACFフィールドの値を取得
// $field_key = 'field_6450da2f1d17f'; // カスタムフィールドのフィールドキーを指定
// $field = get_field_object($field_key); // カスタムフィールドの情報を取得
// $choices = $field['choices']; // カスタムフィールドの選択肢を取得
// $area_large_choices = get_field_object($field_key)['choices'];
// // v($area_large_choices);

// // リンクつき一覧を出力
// echo '<ul>';
// foreach ($area_large_choices as $value => $label) {
//     $link = $value;
//     echo '<li><a href="area_large-'.$link.'">'.esc_html($label).'</a></li>';
// }
// echo '</ul>';









// $events = 

// tribe_get_events(
//   array(
//   'eventDisplay'=>'upcoming',
//   'posts_per_page'=>3,
//   'tax_query'=> array(
//   array(
//   'taxonomy' => 'tribe_events_cat',
//   'field' => 'salsa-on2',
//   'terms' => 'サルサon2'
//   )
//   )
//   ));


// tribe_get_events( [ 
//   'posts_per_page' => 5,
//   'tag'            => 'beg', // or whatever the tag name is 
//   'tribe_events_cat'       => 'salsa-on2',

// ] );

// v($events);
 
// tribe_get_events(array(
//   'start_date' => 'now',
//   'posts_per_page' => 6,
//   'tax_query' => array(
//       'relation' => 'AND',
//       array(
//           'taxonomy' => 'tribe_events_cat',
//           'field' => 'salsa-on2',
//           'terms' => '東京'
//       ),
//       array(
//           'taxonomy' => 'post_tag',
//           'field' => 'slug',
//           'terms' => 'accueil'
//       )
//   ),
// ));

// add_filter('tribe_get_venue_link', 'my_custom_get_venue_link');
// function my_custom_get_venue_link($postId = null, $display = true) {
// 	$url = esc_url( get_permalink( tribe_get_venue_id( $postId ) ) );
// 	if( $display && $url != '' ) {
// 		$venue_name = tribe_get_venue($postId);
// 		$link = '<a href="'.$url.'" title="'.$venue_name.'">'.$venue_name.'</a>';
// 	} else {
// 		$link = $url;
// 	}
// 	if ( $display ) {
// 		echo $link;
// 	} else {
// 		return $link;
// 	}
// }



// Loop through the events, displaying the title and content for each
// foreach ( $events as $event ) {
//    echo '<h2>★' . $event->post_title . '</h2>';
//   //  echo wpautop( $event->post_content );
//    echo '<hr>';
// }




  ?>
  



</main>

<?php
get_footer(); ?>