<nav class="Nav__nav">
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