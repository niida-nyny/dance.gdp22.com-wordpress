<?php //PCメニュ- nav 2つ分
?>

<nav class="Nav__nav Nav__nav-sub pc">
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
    // echo do_shortcode( ' [events-calendar-search placeholder="イベントを検索" show-events="5" disable-past-events="false" layout="small"]' );
    ?>
  </div>
</nav>

<nav class="Nav__nav pc">
  <div class="Nav__inner inner">
    <?php
    wp_nav_menu([
      'container' => false,
      // 'container' => 'nav',
      'menu_id' => 'Hero__list', //空文字,falseは無効
      'menu_class' => 'Hero__list',
      'theme_location' => 'header-nav',
      // 'items_wrap'      => '<ul id="%1$s" class="Hero__List">%3$s</ul>',
    ]);
    // カスタムメニューを表示させる関数
    // 引数：配列
    //  'theme_location'にメニューの名前
    ?>
  </div>
</nav>

<?php //SPメニュー
?>

<nav class="Nav__nav-SP">
  <div class="sp-header sp">
    <input id="nav-input" type="checkbox">
    <div class="nav-box">
      <div class="logo-box">
        <?php if (!is_front_page()) : ?>
          <?php if (has_custom_logo()) : ?>
            <?php
            the_custom_logo();
            // 管理画面「外観」>「カスタマイズ」
            // 「サイトの基本情報」の一番上で
            // 選択したロゴ画像を表示
            ?>
          <?php else : ?>
            <a class="HeaderPC__link -logo" href="/">
              <?php bloginfo('name'); ?>
            </a>
          <?php endif; ?>
        <?php endif; ?>
      </div><!-- .logo-box -->
      <div class="nav-drawer">
        <label class="nav-icon" for="nav-input">
          <span></span>
          <span></span>
          <span></span>
          <span>menu</span>
        </label>
      </div><!-- .nav-drawer -->
    </div><!-- .nav-box -->
    <div class="nav-content">


      <div class="bg-primary p-3 m-3">

        <?php
        // サブメニュー マイページなど
        wp_nav_menu([
          'container' => false,
          // 'container' => 'nav',
          'menu_id' => 'Nav__list', //空文字,falseは無効
          'menu_class' => 'Nav__list',
          'theme_location' => 'my_page',
          // 'items_wrap'      => '<ul id="%1$s" class="Hero__List">%3$s</ul>',
        ]);
        // カスタムメニューを表示させる関数
        // 引数：配列
        //  'theme_location'にメニューの名前
        ?>
      </div>

      <div class="bg-info p-3 m-3">
        <?php
        // メインメニュー
        wp_nav_menu([
          'container' => false,
          // 'container' => 'nav',
          'menu_id' => 'Nav__list', //空文字,falseは無効
          'menu_class' => 'Nav__list',
          'theme_location' => 'header-nav',
          // 'items_wrap'      => '<ul id="%1$s" class="Hero__List">%3$s</ul>',
        ]);
        // カスタムメニューを表示させる関数
        // 引数：配列
        //  'theme_location'にメニューの名前
        ?>
      </div>

    </div><!-- .nav-content -->

    <?php
    // <div class="HeaderSP__box">
    //   <p class="intro">テスト</p>
    //   <p class="tel">telテスト <span>03-xxxxx</span><br>練馬営業所 03-5904-2281<br></p>
    // </div>
    ?>

  </div><!-- .sp-header -->


</nav>
