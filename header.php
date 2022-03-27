<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="viewport" content="width=device-width" >

<?php /**  FB用SDK*  */ ?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
    
    FB.AppEvents.logPageView();   
    
  };
  
  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<?php /**  FB用SDK*  */ ?>


  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
    <header class="HeaderPC <?php if(is_front_page()) echo 'topPage' ?>">
      <div class="HeaderPC__inner inner">
        <div class="HeaderPC__box">
        <h1 class="HeaderPC__logo">
          <?php if(!is_front_page()): ?>
            <?php if (has_custom_logo()) : ?>
              <?php
              the_custom_logo();
              // 管理画面「外観」>「カスタマイズ」
              // 「サイトの基本情報」の一番上で
              // 選択したロゴ画像を表示
              ?>
              <?php else :?>
                <a class="HeaderPC__link -logo" href="/">
                  <?php bloginfo('name'); ?>
                </a>
            <?php endif; ?>
            <?php endif; ?>
          </h1>
        </div>
      </div>
    </header>
  <?php /*get_template_part('parts/_Hero'); */?>
<nav class="Nav__nav Nav__nav-sub">
  <div class="Nav__inner--mypage inner">
    
    <?php
            wp_nav_menu([
              'container' => false,
              // 'container' => 'nav',
              'menu_id' => 'Hero__list', //空文字,falseは無効
              'menu_class' => 'Hero__list',
              'theme_location' => 'my_page',
              // 'items_wrap'      => '<ul id="%1$s" class="Hero__List">%3$s</ul>',
            ]);
            // カスタムメニューを表示させる関数
            // 引数：配列
            //  'theme_location'にメニューの名前
            ?>
            <?php  
            // echo do_shortcode( ' [events-calendar-search placeholder="イベントを検索" show-events="5" disable-past-events="false" layout="small"]' ); ?>
  </div>
</nav>
  <?php get_template_part('parts/_Nav'); ?>

  <?php //get_template_part('parts/_Eyecatch'); ?>
