<?php

/*********************************
アイキャッチ画像機能
 **********************************/
// アイキャッチ画像機能を使えるようにする
if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}

// アイキャッチ画像サイズの設定
if (function_exists('add_image_size')) {
  add_image_size('img_150_100', 150, 100, true);
  add_image_size('img_300_200', 300, 200);
  add_image_size('img_960_200', 960, 200);
}

/*********************************
メニュー機能追加
 **********************************/
// メニュー機能追加
// メニューに位置指定チェックボックス作成
function register_menu()
{
  register_nav_menus([
    'header-nav' => 'ヘッダーメニュー',
    'my_page' => 'マイページ'
  ]);
  // 部屋の名前：メニューのスラッグ(名前)
  // 部屋の値：管理画面に表示される文字
  // 連想配列で、
  // カスタムメニューの表示位置を複数設置できる。
  // ※register_nav_menusで指定
  // ※register_nav_menuでは複数不可
}
add_action('init', 'register_menu');

/*********************************
タイトルタグを自動出力する
 **********************************/
add_theme_support('title-tag');
// サイト名とページタイトルの区切り文字変更
function change_title_separator($separator)
{
  $separator = '|';
  return $separator;
}
add_filter('document_title_separator', 'change_title_separator');

/*********************************
デバッグ関数
 **********************************/
function v($val)
{
  echo '<pre>確認';
  var_dump($val);
  echo '</pre>';
}


/**
 * 投稿概要文文字数変更
 */
// add_filter('excerpt_mblength', function () {
//   return 30;
// },999);

function custom_excerpt_length( $length ) {
  return 20;	
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * 投稿概要文省略記号変更
 */
add_filter('excerpt_more', function () {
  return '　...続きを読む';
});

/*********************************
  CSS読み込み
 **********************************/
add_action('wp_enqueue_scripts', function () {
  // カルーセル
  wp_enqueue_style(
    'slick_css',
    'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css'
  );
  wp_enqueue_style(
    'slick_theme_css',
    'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css'
  );
  // スクロールアニメーション
  wp_enqueue_style(
    'aos',
    'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css'
  );
    // Bootstrap
    wp_enqueue_style(
      'bootstrap',
      'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css'
    );
  // 共通CSS
  wp_enqueue_style(
    'common_css',
    get_theme_file_uri('/css/common_css.css'),
    array('slick_css', 'slick_theme_css', 'aos'),
    filemtime(get_theme_file_path('/css/common_css.css'))
  );
  // wp_enqueue_style関数：
  // CSS読み込みタグをwp_head内で出力する関数
  //  第1引数：名前（好きな名前でok)
  //          一部予約語（例：common等）があるので注意
  //  第2引数：読み込むCSSのパス
  //  第3引数：事前に読み込むCSSの名前を配列指定（省略可）
  //  第4引数：バージョン番号（省略可）
  //          ファイル名の後につけるクエリ文字列
  // filemtime：ファイルの更新日時を取得
  //  第1引数：対象のファイルのパス

});

/*********************************
  JS読み込み
 **********************************/
add_action('wp_enqueue_scripts', function () {
  wp_deregister_script('jquery');
  // WordPressが最初から読み込む予定の
  // jQueryをキャンセル
  // もともと読み込む予定のjQueryは1系で
  // 古いのでキャンセルする
  // ※5系から最新盤のjQueryに変更の
  // アナウンスあり
  wp_enqueue_script(
    'jquery',
    // 'https://code.jquery.com/jquery-1.12.4.min.js',
    // 'https://code.jquery.com/jquery-2.2.4.min.js',
    'https://code.jquery.com/jquery-3.5.1.min.js',
    array(),
    false,
    true
  );
  // 第1引数：好きな名前(読み込み順で使用)
  //          jQuery本体の名前は「'jquery'」推奨
  // 第2引数：読み込むファイルのパス
  // 第3引数：事前読み込みファイルの順番を配列で指定
  // 第4引数：バージョン番号
  //          初期値：false(バージョンクエリ文字列を追加しない)
  // 第5引数：出力位置
  //          true：</body>直前に出力
  //          false(初期値）：<head>内に出力
  // カルーセル
  wp_enqueue_script(
    'slick_js',
    'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
    array('jquery'),
    false,
    true
  );
  // スクロールアニメーション
  wp_enqueue_script(
    'aos_js',
    'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js',
    array('jquery'),
    false,
    true
  );
  // 共通JS
  wp_enqueue_script(
    'common_js',
    get_theme_file_uri('/js/script.js'),
    array('jquery', 'slick_js', 'aos_js'),
    filemtime(get_theme_file_path('/js/script.js')),
    true
  );
});

/*********************************
  アーカイブタイトル取得関数から余計な文字を除外
 **********************************/
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索文字：' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '該当ページが見つかりません';
  } else {
  }
  return $title;
});


/*********************************
  Search & Filterの検索結果タイトルを変更
 **********************************/
add_filter('wp_title','search_form_title');

function search_form_title($title){
  
  global $searchandfilter;
  
  if ( $searchandfilter->active_sfid() == 384 || $searchandfilter->active_sfid() == 385 || $searchandfilter->active_sfid() == 386 || $searchandfilter->active_sfid() == 387)
  {
  return '検索結果';
  }
  else
  {
  return $title;
  }
 
}

/*********************************
  編集画面カスタムカラー追加
 **********************************/
// add_theme_support('editor-color-palette', array(
//   array(
//     'name' => 'ピンク',
//     'slug' => 'pink',
//     'color' => '#f78da7',
//   ),
//   array(
//     'name' => 'レッド',
//     'slug' => 'red',
//     'color' => '#cf2e2e',
//   ),
//   array(
//     'name' => 'オレンジ',
//     'slug' => 'orange',
//     'color' => '#ff6900',
//   ),
//   array(
//     'name' => 'ホワイト',
//     'slug' => 'white',
//     'color' => '#fff',
//   ),
// ));


/*********************************
  管理画面一覧にID表示
 **********************************/
function add_posts_columns_postid($columns)
{
  $columns['postid'] = 'ID';
  return $columns;
}
function add_posts_columns_postid_row($column_name, $post_id)
{
  if ($column_name == 'postid') {
    echo $post_id;
  }
}
add_filter('manage_posts_columns', 'add_posts_columns_postid');
add_action('manage_posts_custom_column', 'add_posts_columns_postid_row', 10, 2);


/*********************************
  管理画面固定ページ一覧にスラッグ表示
 **********************************/
function add_page_column_title($columns)
{
  $columns['slug'] = "スラッグ";
  return $columns;
}
function add_page_column($column_name, $post_id)
{
  if ($column_name == 'slug') {
    $post = get_post($post_id);
    $slug = $post->post_name;
    echo esc_attr($slug);
  }
}
add_filter('manage_pages_columns', 'add_page_column_title');
add_action('manage_pages_custom_column', 'add_page_column', 10, 2);


/*********************************
  管理画面メニュー非表示
    URLを直打ちすればアクセス可能
    管理画面左目乳項目を非表示にする
 **********************************/
add_action('admin_menu', 'remove_admin_menu', 999);
function remove_admin_menu()
{
  // remove_menu_page('index.php');                // ダッシュボード
  // remove_menu_page('edit.php');                 // 投稿
  // remove_menu_page('upload.php');               // メディア
  // remove_menu_page('edit.php?post_type=page');  // 固定ページ
  // remove_menu_page('edit-comments.php');        // コメント
  // remove_menu_page('themes.php');               // 外観
  // remove_menu_page('plugins.php');              // プラグイン
  // remove_menu_page('users.php');                // ユーザー
  // remove_menu_page('tools.php');                // ツール
  // remove_menu_page('options-general.php');      // 設定
}

/*********************************
  管理画面サブメニュー非表示
 **********************************/
add_action('admin_menu', 'remove_admin_submenu', 999);
function remove_admin_submenu()
{
  // 「外観 > テーマの編集」を非表示
  // remove_submenu_page('themes.php', 'theme-editor.php');
  // 「プラグイン > プラグイン編集」を非表示
  // remove_submenu_page('plugins.php', 'plugin-editor.php');
  // 「設定 > パーマリンク設定」を非表示
  // remove_submenu_page('options-general.php', 'options-permalink.php');

  // remove_submenu_page：項目非表示
  // 第1引数：大項目表示用PHPファイル名
  // 第2引数：サブメニュー表示用ファイル名

}


/*********************************
  スラッグ名が日本語だったら自動的に「投稿タイプ-id」へ変更
 **********************************/
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
  if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
    // $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
    $slug = 'dance-' . $post_ID;
  }
  return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);


/*********************************
 投稿者アーカイブ非表示リダイレクト(必須)
      ?author=1で著者ページを表示せず
      トップページにリダイレクトさせる
      ユーザID名がばれるリスクを回避
 **********************************/
add_action('template_redirect', function () {
  if (is_author()) {
    wp_redirect(home_url());
    exit;
  }
});


/*********************************
  セッションスタート
 **********************************/
// add_action('template_redirect', function () {
//   if (session_status() !== PHP_SESSION_ACTIVE) {
//     session_start();
//   }
// });


/*********************************
  ウィジェットエリア作成
 **********************************/
register_sidebar(
  [
    'name' => 'フッターエリア', //管理画面表示名
    'id' => 'widget_footer', //
    'before_widget' => '<div class="Widget__item">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="Widget__title">',
    'after_title' => '</h3>',
    'description' => 'ここでフッターエリアを修正できます。',
  ]
);

register_sidebar(
  [
    'name' => '広告エリア', //管理画面表示名
    'id' => 'widget_ads', //
    'before_widget' => '<div class="Widget__item">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="Widget__title">',
    'after_title' => '</h3>',
    'description' => '広告はここに',
  ]
);


/*********************************
  カスタムロゴ作成
    <?php if (has_custom_logo()) : ?>
    <?php the_custom_logo(); ?>
    <?php endif; ?>
 **********************************/
//add_theme_support('custom-logo');

function mytheme_setup() {
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'mytheme_setup');


/*********************************
管理画面上部にメニュー管理配列情報が表示されます。
確認後は必ずコメントアウトします。
 **********************************/
// function check_menu()
// {
//   global $menu;
//   echo '<pre style="padding:0 0 0 40px;">';
//   var_dump($menu);
//   echo '</pre>';
// }
// add_action('admin_menu', 'check_menu');

/*********************************
管理画面m「ユーザー」→「プロフィール」で改行<br>が使えるようになる。
 **********************************/
remove_filter('pre_user_description', 'wp_filter_kses');






////////////////////////////////
// getの値を追加
////////////////////////////////

function add_query_vars_filter( $vars ){
  $vars[] = "foo";
  $vars[] = "bar";
  $vars[] = "baz";
  $vars[] = "qux";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );


////////////////////////////////
// アーカイブページにクエリを追加
////////////////////////////////
add_action( 'pre_get_posts', 'add_archive_custom_query' ); // pre_get_postsにフック
// フック時に使う関数
function add_archive_custom_query( $query ) {
  if ( ! is_admin() && $query->is_main_query() && is_post_type_archive('カスタム投稿タイプのスラッグ') ) {

    // nonce検証
    $nonce = $_REQUEST['nonce'];
    if(!wp_verify_nonce($nonce, 'my-archive-nonce')) {
      die();
    }

    // GETの引数を取得
    $get_foo = get_query_var('foo');
    $get_bar = get_query_var('bar');
    $get_buz = get_query_var('buz');
    $get_qux = get_query_var('qux');
    

    // 全文検索
    if(!empty($get_foo)) {
      $query->set('s', $get_foo);
    }

    // meta_query を追加

    $meta_query = array(
      'relation' => 'AND'
    );
    // セレクトボックス
    if(!empty($get_bar)) {
      array_push($meta_query, array(
        'key' => 'bar', // metaキー
        'value' => $get_bar, // 検索値
        'compare' => '=' // 一致
      ));
    }
    // ラジオボタン
    if(!empty($get_buz)) {
      array_push($meta_query, array(
        'key' => 'buz',
        'value' => $get_buz,
        'compare' => '='
      ));
    }
    // チェックボックス
    if(!empty($get_qux)) {
      array_push($meta_query, array(
      'key' => 'qux',
      'value' => $get_qux,
      'compare' => 'LIKE' // チェックボックスの場合はLIKE検索になるので注意
      ));
    }

    $query->set('meta_query', $meta_query);

    // 検索やmeta_query以外にも、authorやカスタム投稿タイプ、カテゴリー、タクソノミーなど
    // WP_Queryの各種パラメーターが使えます
    // その他のクエリパラメータは以下参照下さい
    // http://notnil-creative.com/blog/archives/1288

  }
}


$taxonomy_slug = 'area_location'; // タクソノミーのスラッグを指定
$terms = get_terms($taxonomy_slug); // タームの取得
if( $terms && !is_wp_error($terms) ){ // タームがあれば表示
  echo '<select name="select" onChange="location.href=value;">'; // option の value 値を URL とする
  echo '<option>ページを選択してください</option>'; // 必要がなければこの行は削除
  foreach ( $terms as $value ) { // 配列の繰り返し
    echo '<option value="'.get_term_link($value->slug,$taxonomy_slug).'">'.esc_html($value->name).'</option>'; // タームのURLとタイトルを表示
  }
  echo '</select>';
}

/**
 * Add a list of clickable category links below the event
 * search bar.
 *
 * Can be easily styled using the following selector:
 *
 * .the-events-calendar-category-list
 */
add_action( 'tribe_events_bar_after_template', function() {
  $terms = get_terms( [
    'taxonomy' => Tribe__Events__Main::TAXONOMY
  ] );
 
  if ( empty( $terms ) || is_wp_error( $terms ) ) {
    return;
  }
 
  echo '<div class="the-events-calendar-category-list"><ol>';
 
  foreach ( $terms as $single_term ) {
    $url = esc_url( get_term_link( $single_term ) );
    $name = esc_html( get_term_field( 'name', $single_term ) );
 
    echo "<li><a href='$url'>$name</a> </li>";
  }
 
  echo '</ol></div>';
} );

/**
* Add a new column header in dashboard table
*
* @param array $args dashboard query arguments
* @return void
*/
function wpufe_dashboard_change_head( $args ) {
  printf( "<th>%s</th>", __( "Sub Title", "wpuf" ) );
  }
  
  add_action( "wpuf_dashboard_head_col", "wpufe_dashboard_change_head", 10, 2 );
  
  /**
  * Add a new table cell to the dashboard table rows.
  * It adds a form for changing the post status of each posts via ajax call.
  *
  * @param array $args dashboard query arguments
  * @param object $post current rows post object
  * @return void
  */
  function wpufe_dashboard_row_col( $args, $post ) {
  ?>
  <td>
  <?php
  if ( $sub = get_post_meta( $post->ID, "dances", true ) ) {
  echo $sub;
  } else {
  echo "—";
  }
  ?>
  </td>
  <?php
  }
  
  add_action( "wpuf_dashboard_row_col", "wpufe_dashboard_row_col", 10, 2 );  



  /**
   * The Events Categoryテスト
   */


  add_filter( 'tribe_events_community_submit_event_page_title', 'change_the_title' );
function change_the_title() {
  return 'Your New Title Goes Here';
}
//   add_filter( 'tribe_events_community_event_list_page_title', 'change_the_title' );
// function change_the_title() {
//   return 'Your New Title Goes Here';
// }


/**
 * 投稿のラベルを変更します。
 */
function custom_post_labels( $labels ) {
	$labels->name = '最新情報'; // 投稿
	$labels->singular_name = '最新情報'; // 投稿
	$labels->add_new = '新規追加'; // 新規追加
	$labels->add_new_item = '最新情報を追加'; // 新規投稿を追加
	$labels->edit_item = '投稿の編集'; // 投稿の編集
	$labels->new_item = '新規最新情報'; // 新規投稿
	$labels->view_item = '最新情報を表示'; // 投稿を表示
	$labels->search_items = '最新情報を検索'; // 投稿を検索
	$labels->not_found = '最新情報が見つかりませんでした。'; // 投稿が見つかりませんでした。
	$labels->not_found_in_trash = 'ゴミ箱内に最新情報が見つかりませんでした。'; // ゴミ箱内に投稿が見つかりませんでした。
	$labels->parent_item_colon = ''; // (なし)
	$labels->all_items = '最新情報一覧'; // 投稿一覧
	$labels->archives = '最新情報アーカイブ'; // 投稿アーカイブ
	$labels->insert_into_item = '最新情報に挿入'; // 投稿に挿入
	$labels->uploaded_to_this_item = 'この最新情報へのアップロード'; // この投稿へのアップロード
	$labels->featured_image = 'アイキャッチ画像'; // アイキャッチ画像
	$labels->set_featured_image = 'アイキャッチ画像を設定'; // アイキャッチ画像を設定
	$labels->remove_featured_image = 'アイキャッチ画像を削除'; // アイキャッチ画像を削除
	$labels->use_featured_image = 'アイキャッチ画像として使用'; // アイキャッチ画像として使用
	$labels->filter_items_list = '最新情報リストの絞り込み'; // 投稿リストの絞り込み
	$labels->items_list_navigation = '最新情報リストナビゲーション'; // 投稿リストナビゲーション
	$labels->items_list = '最新情報リスト'; // 投稿リスト
	$labels->menu_name = '最新情報'; // 投稿
	$labels->name_admin_bar = '最新情報'; // 投稿
	return $labels;
}
add_filter( 'post_type_labels_post', 'custom_post_labels' );


add_filter( 'wp_lazy_loading_enabled' , '__return_false' );

/**
 * プロフィールに改行を追加
 */
remove_filter('pre_user_description', 'wp_filter_kses');