<?php

/**
 * 固定ページ
 * 
 */

get_header();
?>

<main class="Main -single">
  <?php if(!is_user_logged_in()): ?>
      <article class="Single">
        <div class="Single__inner inner">
          <header class="Single__header">
            <h2 class="Single__mainTitle">マイページ</h2>
          </header>
          <div class="Single__body">
            <?php 
                echo 'マイページを見るにはログインしてください';
                echo do_shortcode( '  [wpuf-login]' ); 
            ?>
          </div>
        </div>
      </article>
  <?php endif; ?>

  <?php if(is_user_logged_in()): ?>
    
    <article class="Single">
      <div class="Single__inner inner">
        <header class="Single__header middle">
          <p class="right">
            <a href="https://dance.gdp22.com/mypage?action=logout">
            <button class="btn">
              ログアウトする</a>
            </button>  
          </p>
          <span>下記をクリックすると内容が表示されます。</span>
          </header>
          <div class="Single__body" id="acMenu">
            <h3>お気に入りを表示</h3>
            <dl class="toggle">
              <dt>レッスン</dt>
              <dd></dd>
              <dt>イベント</dt>
              <dd></dd>
              <dt>場所</dt>
              <dd></dd>
              <dt>場所</dt>
              <dd></dd>
              <dt>インストラクター</dt>
              <dd></dd>
            </dl>
          </div>
        </div>
      </article>            

      <article class="Single">
        <div class="Single__inner inner">
          <header class="Single__header">
          </header>
        <div class="Single__body" id="acMenu">
          <h3>ユーザー情報変更</h3>
          <div class="toggle">
            <?php  echo do_shortcode( ' [wpuf_profile type="profile" id="513"]' ); ?>
          </div>
        </div>
        </div>
      </article>      

      <article class="Single">
        <div class="Single__inner inner">
            <header class="Single__header">
            </header>
            <div class="Single__body" id="acMenu">
                <h3>主催する</h3>
                  <div class="toggle">
                    <?php  echo do_shortcode( ' [tribe_community_events view="my_events"]' ); ?>
                  </div>
            </div>
        </div>
      </article>    
    <?php endif; ?>

</main>
<script>
$(function(){
$("#acMenu h3").on("click", function() {
$(this).next().slideToggle();
});
});
</script>
<?php
get_footer();