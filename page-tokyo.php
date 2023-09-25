<?php

/**
 * Template Name: 東京エリア
 */

get_header();
?>

<main class="Main -single">

<?php


// 01-北海道エリア
// $venues = get_venues_with_area_large_hokkaido();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '北海道エリアに該当する会場はありません。';
// }


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

// 東京エリア
// echo '<h3>東京</h3>';
// $venues = get_venues_with_area_middle_tokyo();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '東京エリアに該当する会場はありません。';
// }

// 01 : 銀座・新橋・有楽町
// echo '<h3>銀座・新橋・有楽町</h3>';
// $venues = get_venues_with_area_small_01();//ここを変更
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '銀座・新橋・有楽町エリアに該当する会場はありません。';//ここを変更
// }

// 02 : 東京・日本橋
// echo '<h3>東京・日本橋</h3>';
// $venues = get_venues_with_area_small_02();//ここを変更
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '東京・日本橋エリアに該当する会場はありません。';//ここを変更
// }

// 03 : 渋谷・恵比寿・代官山
// echo '<h3>渋谷・恵比寿・代官山</h3>';
// $venues = get_venues_with_area_small_03();//ここを変更
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '渋谷・恵比寿・代官山エリアに該当する会場はありません。';//ここを変更
// }

// 04 : 新宿・代々木・大久保
// echo '<h3>新宿・代々木・大久保</h3>';
// $venues = get_venues_with_area_small_04();//ここを変更
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '新宿・代々木・大久保エリアに該当する会場はありません。';//ここを変更
// }

// 05 : 池袋～高田馬場・早稲田
// echo '<h3>池袋～高田馬場・早稲田</h3>';
// $venues = get_venues_with_area_small_05();//ここを変更
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '池袋～高田馬場・早稲田エリアに該当する会場はありません。';//ここを変更
// }

// 06 : 原宿・表参道・青山
// echo '<h3>原宿・表参道・青山</h3>';
// $venues = get_venues_with_area_small_06();//ここを変更
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '原宿・表参道・青山エリアに該当する会場はありません。';//ここを変更
// }

// 07:六本木・麻布・広尾
// echo '<h3>六本木・麻布・広尾</h3>';
// $venues = get_venues_with_area_small_07();
// if ($venues) {
//   echo '<ul>';
//   foreach ($venues as $venue_id => $venue_name) {
//     echo '<li><a href="' . get_permalink($venue_id) . '">' . $venue_name . '</a></li>';
//   }
//   echo '</ul>';
// } else {
//   echo '六本木・麻布・広尾エリアに該当する会場はありません。';//ここを変更
// }

// 東京エリアを全出力するロジック
echo '<h3 style="margin-bottom:20px">東京エリア</h3>';
$area_small_key =  'area_small_03_01';//東京

// 選択肢の連想配列を定義
// 最後の非表示はコメントアウト
$choices = array(
    '01' => '銀座・新橋・有楽町',
    '02' => '東京・日本橋',
    '03' => '渋谷・恵比寿・代官山',
    '04' => '新宿・代々木・大久保',
    '05' => '池袋～高田馬場・早稲田',
    '06' => '原宿・表参道・青山',
    '07' => '六本木・麻布・広尾',
    '08' => '赤坂・永田町・溜池',
    '09' => '四ツ谷・市ヶ谷・飯田橋',
    '10' => '秋葉原・神田・水道橋',
    '11' => '上野・浅草・日暮里',
    '12' => '浜松町・田町・品川',
    '13' => '目黒・白金・五反田',
    '14' => '大塚・巣鴨・駒込・赤羽',
    '15' => '両国・錦糸町・小岩',
    '16' => '築地・湾岸・お台場',
    '17' => '大井・蒲田',
    '18' => '東急沿線',
    '19' => '京王・小田急沿線',
    '20' => '中野～西荻窪',
    '21' => '西武沿線',
    '22' => '板橋・東武沿線',
    '23' => '千住・綾瀬・葛飾',
    '24' => '吉祥寺・三鷹・武蔵境',
    '25' => '小金井・国分寺・国立',
    '26' => '調布・府中・狛江',
    '27' => '町田・稲城・多摩',
    '28' => '西東京市周辺',
    '29' => '立川市・八王子市周辺',
    '30' => '福生・青梅周辺',
    '31' => '伊豆諸島・小笠原',
    // '32' => '非表示',
);

foreach ($choices as $area_value => $area_name) {
    $venues = get_venues_by_area_small_tokyo($area_value);

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



// // 成功　ACFフィールドの値を取得
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


// // 関東に属する会場のイベントを出力する
// $args = array(
//   'post_type' => 'tribe_venue',
//   'meta_query' => array(
//       array(
//           'key' => 'area_large', // area_largeフィールドを指定
//           'value' => '03 : 関東エリア', // 検索する値を指定
//           'compare' => 'LIKE', // 検索方法を指定
//       ),
//   ),
// );

// $venues = get_posts($args);

// $venue_ids = array();

// foreach ($venues as $venue) {
//   $venue_ids[] = $venue->ID;
// }

// $args = array(
//   'post_type' => 'tribe_events',
//   'meta_query' => array(
//       array(
//           'key' => '_EventVenueID', // 会場を指定するカスタムフィールド
//           'value' => $venue_ids, // 取得した会場のIDを指定
//           'compare' => 'IN', // 検索方法を指定
//       ),
//   ),
// );

// $events =
// // get_posts($args);
// tribe_get_events($args);

// v($events);

// foreach ($events as $event) {
//   // イベントの情報を出力する
//   $title = $event->post_title;


//   echo $title;
// }




// // NG 関東に属するリンクと画像などを出力
// $args = array(
//   'post_type' => 'tribe_events',
//   'meta_query' => array(
//       array(
//           'key' => 'area_large', // ACFフィールドのキーを指定
//           'value' => '03 : 関東エリア', // 関東エリアに対応する値
//           'compare' => 'LIKE',
//       ),
//   ),
// );

// $query = tribe_get_events($args);
// // new WP_Query( $args );
// v($query);

// while ( $query->have_posts() ) {
//   $query->the_post();
//   $event_id = get_the_ID();
//   $event_title = get_the_title();
//   $event_link = get_permalink();
//   $event_date = tribe_get_start_date( $event_id, true, 'Y/m/d' );
//   $event_image = get_the_post_thumbnail_url( $event_id, 'medium' );


//   // 出力するHTMLを作成
//   $output = '<div>';
//   $output .= '<a href="' . esc_url( $event_link ) . '">';
//   $output .= '<img src="' . esc_url( $event_image ) . '">';
//   $output .= '<h2>' . esc_html( $event_title ) . '</h2>';
//   $output .= '<p>' . esc_html( $event_date ) . '</p>';
//   $output .= '</a>';
//   $output .= '</div>';

//   echo $output;
// }



// // ??本日の日付を取得
// $today = date( 'Y-m-d' );

// // 関東エリアに属する会場のIDを取得する
// $venue_args = array(
//     'post_type' => 'tribe_venue',
//     'meta_query' => array(
//         array(
//             'key' => 'area_large',
//             'value' => '03', // 関東エリアのフィールドキー
//             'compare' => '=',
//         ),
//     ),
//     'fields' => 'ids', // IDのみ取得
// );
// $venue_ids = get_posts( $venue_args );

// // 関東エリアに属し、本日以降のイベントを取得する
// $event_args = array(
//     'post_type' => 'tribe_events',
//     'meta_query' => array(
//         'relation' => 'AND',
//         array(
//             'key' => '_EventVenueID',
//             'value' => $venue_ids,
//             'compare' => 'IN',
//         ),
//         array(
//             'key' => '_EventStartDate',
//             'value' => $today,
//             'compare' => '>=',
//             'type' => 'DATE',
//         ),
//     ),
// );
// $events = new WP_Query( $event_args );

// // イベント情報を出力する
// if ( $events->have_posts() ) {
//     while ( $events->have_posts() ) {
//         $events->the_post();
//         $start_date = tribe_get_start_date( null, false, 'Y年m月d日' );
//         $event_link = get_permalink();
//         $event_title = get_the_title();
//         $event_image = get_the_post_thumbnail_url( get_the_ID(), 'medium' );

//         echo '<p>' . $start_date . ': <a href="' . $event_link . '">' . $event_title . '</a></p>';
//         if ( $event_image ) {
//             echo '<img src="' . $event_image . '">';
//         }
//     }
//     wp_reset_postdata();
// }



// // 中途半端　繰り返しイベントが連続で出力される　本日の日付を取得
// $today = date('Y-m-d');

// // 関東エリアに属する会場のIDを取得する
// $venue_args = array(
//     'post_type' => 'tribe_venue',
//     'meta_query' => array(
//         array(
//             'key' => 'area_large',
//             'value' => '03', // 関東エリアのフィールドキー
//             'compare' => '=',
//         ),
//     ),
//     'fields' => 'ids', // IDのみ取得
// );
// $venue_ids = get_posts($venue_args);

// // 関東エリアに属し、本日以降のイベントを取得する
// $event_args = array(
//     'post_type' => 'tribe_events',
//     'meta_query' => array(
//         'relation' => 'AND',
//         array(
//             'key' => '_EventVenueID',
//             'value' => $venue_ids,
//             'compare' => 'IN',
//         ),
//         array(
//             'key' => '_EventStartDate',
//             'value' => $today,
//             'compare' => '>=',
//             'type' => 'DATE',
//             'eventDisplay' => 'custom', // 繰り返しイベントを除外する設定
//         ),
//     ),
//     'orderby' => '_EventStartDate', // 開始日で昇順にソート
//     'order' => 'DSC',
//     'posts_per_page' => 10, // 最大10件まで出力

// );
// $events = new WP_Query($event_args);

// v($events);

// // イベント情報を出力する
// if ($events->have_posts()) {
//     while ($events->have_posts()) {
//         $events->the_post();
//         $start_date = tribe_get_start_date(null, false, 'Y年m月d日');
//         $event_link = get_permalink();
//         $event_title = get_the_title();
//         $event_image = get_the_post_thumbnail_url(get_the_ID(), 'medium');

//         echo '<p>' . $start_date . ': <a href="' . $event_link . '">' . $event_title . '</a></p>';
//         if ($event_image) {
//             echo '<img src="' . $event_image . '">';
//         }
//     }
//     wp_reset_postdata();
// } else {
//     echo '該当するイベントはありません。';
// }



// // NG 該当なし　本日の日付を取得
// $today = date('Y-m-d');

// // イベントクエリの設定
// $args = array(
//   'post_type' => 'tribe_events',
//   'posts_per_page' => 10,
//   'meta_query' => array(
//     array(
//       'key' => 'area_large', // カスタムフィールドのキーを指定
//       'value' => '03', // 関東エリアの値に合わせて変更
//       'compare' => '=', // 完全一致の場合は '=' を使用
//     ),
//     array(
//       'key' => '_EventStartDate', // イベントの開始日
//       'value' => $today,
//       'compare' => '>=', // 本日以降のイベントを取得
//       'type' => 'DATE',
//     ),
//   ),
//   'orderby' => 'meta_value',
//   'order' => 'ASC',
//   'meta_key' => '_EventStartDate', // イベントの開始日で昇順ソート
//   'meta_type' => 'DATE',
// );

// // イベントクエリを実行
// $query = new WP_Query($args);

// // イベントのループ
// if ($query->have_posts()) {
//   while ($query->have_posts()) {
//     $query->the_post();

//     // イベント情報を取得
//     $event_title = get_the_title();
//     $event_link = get_permalink();
//     $event_start_date = tribe_get_start_date(null, false, 'Y-m-d');
//     $event_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');

//     // イベント情報の出力
//     echo '<div>';
//     echo '<h3>' . $event_title . '</h3>';
//     echo '<p>開始日: ' . $event_start_date . '</p>';
//     echo '<a href="' . $event_link . '">リンク</a>';
//     if ($event_image) {
//       echo '<img src="' . $event_image[0] . '" alt="アイキャッチ画像">';
//     }
//     echo '</div>';
//   }
// } else {
//   echo '該当するイベントはありません。';
// }

// // クエリのリセット
// wp_reset_query();





// // 本日の日付を取得
// $today = date('Y-m-d');

// // イベントクエリの設定
// $args = array(
//   'post_type' => 'tribe_events',
//   'posts_per_page' => 10,
//   'meta_query' => array(
//     array(
//       'key' => 'area_large', // カスタムフィールドのキーを指定
//       'value' => '03', // 関東エリアの値に合わせて変更
//       'compare' => 'IN', // 完全一致の場合は '=' を使用
//     ),
//     array(
//       'key' => '_EventStartDate', // イベントの開始日
//       'value' => $today,
//       'compare' => '>=', // 本日以降のイベントを取得
//       'type' => 'DATE',
//     ),
//   ),
//   'orderby' => 'meta_value',
//   'order' => 'ASC',
//   'meta_key' => '_EventStartDate', // イベントの開始日で昇順ソート
//   'meta_type' => 'DATE',
//   'eventDisplay' => 'custom', // 繰り返しイベントを除外する設定
// );

// // イベントクエリを実行
// $query = new WP_Query($args);

// // イベントのループ
// if ($query->have_posts()) {
//   while ($query->have_posts()) {
//     $query->the_post();

//     // イベント情報を取得
//     $event_title = get_the_title();
//     $event_link = get_permalink();
//     $event_start_date = tribe_get_start_date(null, false, 'Y-m-d');
//     $event_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');

//     // イベントの出力
//     echo '<div>';
//     echo '<h2>' . $event_start_date . ' - <a href="' . $event_link . '">' . $event_title . '</a></h2>';
//     echo '<img src="' . $event_image[0] . '" alt="' . $event_title . '">';
//     echo '</div>';
//   }
// } else {
//   echo '該当するイベントはありません。';
// }

// // クエリのリセット
// wp_reset_postdata();





// // 本日の日付を取得
// $today = date( 'Y-m-d' );

// // 関東エリアに属する会場のIDを取得する
// $venue_args = array(
//     'post_type' => 'tribe_venue',
//     'meta_query' => array(
//         array(
//             'key' => 'area_large',
//             'value' => '03', // 関東エリアのフィールドキー
//             'compare' => '=',
//         ),
//     ),
//     'fields' => 'ids', // IDのみ取得
// );
// $venue_ids = get_posts( $venue_args );

// // 関東エリアに属し、本日以降のイベントを取得する
// $event_args = array(
//     'post_type' => 'tribe_events',
//     'meta_query' => array(
//         'relation' => 'AND',
//         array(
//             'key' => '_EventVenueID',
//             'value' => $venue_ids,
//             'compare' => 'IN',
//         ),
//         array(
//             'key' => '_EventStartDate',
//             'value' => $today,
//             'compare' => '>=',
//             'type' => 'DATE',
//         ),
//     ),
// );
// $events = new WP_Query( $event_args );

// v($events);

// // イベント情報を出力する
// if ( $events->have_posts() ) {
//     while ( $events->have_posts() ) {
//         $events->the_post();
//         $start_date = tribe_get_start_date( null, false, 'Y年m月d日' );
//         $event_link = get_permalink();
//         $event_title = get_the_title();
//         $event_image = get_the_post_thumbnail_url( get_the_ID(), 'medium' );

//         echo '<p>' . $start_date . ': <a href="' . $event_link . '">' . $event_title . '</a></p>';
//         if ( $event_image ) {
//             echo '<img src="' . $event_image . '">';
//         }
//     }
//     wp_reset_postdata();
// }






/*
Template Name: Kanto Events
*/


// $area_large = '01'; // 関東エリアの値に合わせて変更

// // イベントクエリの設定
// $args = array(
//     'post_type' => array('tribe_events', 'tribe_venue', 'tribe_organizer'), // 使用しているイベント関連のカスタム投稿タイプを指定
//     'posts_per_page' => 10,
//     'meta_query' => array(
//         'relation' => 'OR',
//         array(
//             'key' => 'area_large',
//             'value' => $area_large,
//             'compare' => '=', // 完全一致の場合は '=' を使用
//         ),
//         array(
//             'key' => 'area_large',
//             'value' => 'Both',
//             'compare' => '=', // 完全一致の場合は '=' を使用
//         ),
//     ),
//     'orderby' => 'meta_value',
//     'order' => 'ASC',
//     'meta_key' => '_EventStartDate', // イベントの開始日で昇順ソート
//     'meta_type' => 'DATE',
// );

// // イベントクエリを実行
// $query = new WP_Query($args);

// // イベントのループ
// if ($query->have_posts()) {
//     while ($query->have_posts()) {
//         $query->the_post();

//         // イベント情報を表示
//         echo '<h2>' . get_the_title() . '</h2>';
//         echo '<p>開始日: ' . tribe_get_start_date(null, false, 'Y-m-d') . '</p>';
//         echo '<p><a href="' . get_permalink() . '">リンク</a></p>';
//         echo get_the_post_thumbnail();

//         // 追加のイベント情報を表示する場合は、必要なコードを追加

//         echo '<hr>';
//     }
// } else {
//     echo '該当するイベントはありません。';
// }

// // ループのリセット
// wp_reset_postdata();





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
