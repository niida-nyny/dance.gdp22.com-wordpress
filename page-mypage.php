<?php

/**
 * Template Name: マイページ
 */

get_header();
?>

<main class="Main -single Single__body">
  <?php if(!is_user_logged_in()): ?>
      <article class="Single">
        <div class="Single__inner inner">
          <header class="Single__header">
            <h2 class="Single__mainTitle">マイページ</h2>
          </header>
          <div class="Single__body">
            <?php 
                echo 'マイページを見るにはログインしてください。<br><span>ログインするためには、一度で入れない仕様のため、2度ログイン操作が必要です。</span>';
                echo do_shortcode( '  [wpuf-login]' ); 
            ?>
          </div>
        </div>
      </article>
  <?php endif; ?>

  <?php if(is_user_logged_in()): ?>
    
    <article class="Single mypage">
      <div class="Single__inner inner">
        <header class="Single__header middle">
          
          <span>下記をクリックすると内容が表示されます。</span>
          </header>
          <div class="Single__body" id="acMenu">
            <h3>お気に入りを表示</h3>
            <dl class="toggle">
              


              <dt>最新情報</dt>
              <dd>
                <?php 
                // echo do_shortcode('[user_favorites include_thumbnails ="true" include_buttons ="true" post_type=”post” text=”お気に入りをクリア”]'); ?>
                <?php 
                    $filters = array(
                      'post_type' => array(
                        'post'
                      ),
                      'status' => array(
                        'publish', 
                        'future'
                      ),
                      // 'terms' => array(
                      //   'category' => array(
                      //     'news', 
                      //     'updates'
                      //   ),
                      //   'recipe-type' => array(
                      //     'side-item',
                      //     'dessert'
                      //   )
                      // )
                    );
                    the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = $filters, $include_thumbnails = true, $thumbnail_size = 'thumbnail',);
                  ?>                 
              </dd>
              
            <!-- <dt>レッスン&イベント</dt> -->
              <dd>
                <?php 
                  // $filters = array(
                    // 'post_type' => array(TribeEvents::POSTTYPE)
                  // );
                  // $filters = array(
                  //   'post_type' => TribeEvents::POSTTYPE,
                  //   'status' => 'publish'
                  // );
                  // the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = $filters, $include_thumbnails = true);
                  ?>
                <?php 
                    // $filters = array(
                    //   'post_type' => array(
                    //     TribeEvents::POSTTYPE
                    //   ),
                    //   'status' => array(
                    //     'publish', 
                    //     'future'
                    //   ),

                      // 'terms' => array(
                      //   'category' => array(
                      //     'news', 
                      //     'updates'
                      //   ),
                      //   'recipe-type' => array(
                      //     'side-item',
                      //     'dessert'
                      //   )
                      // )
                    // );
                    // the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = $filters, $include_thumbnails = true, $thumbnail_size = 'thumbnail');
                  ?> 
              </dd>
              <!-- <dt>場所</dt> -->
              <dd>
                <?php 
                // $filters = array(
                //   'post_type' => array(
                //     TribeEvents::VENUE_POST_TYPE
                //   ),
                //   'status' => array(
                //     'publish', 
                //     'future'
                //   ),
                  // 'terms' => array(
                  //   'category' => array(
                  //     'news', 
                  //     'updates'
                  //   ),
                  //   'recipe-type' => array(
                  //     'side-item',
                  //     'dessert'
                  //   )
                  // )
                // );
                // the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = $filters, $include_thumbnails = true, $thumbnail_size = 'thumbnail');
                  ?> 
              </dd>
              <!-- <dt>インストラクター・DJ・主催者など</dt> -->
              <dd>
                <?php 
                // $filters = array(
                //   'post_type' => array(
                //     TribeEvents::ORGANIZER_POST_TYPE
                //   ),
                //   'status' => array(
                //     'publish', 
                //     'future'
                //   ),
                //   // 'terms' => array(
                //   //   'category' => array(
                //   //     'news', 
                //   //     'updates'
                //   //   ),
                //   //   'recipe-type' => array(
                //   //     'side-item',
                //   //     'dessert'
                //   //   )
                //   // )
                // );
                // the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = $filters, $include_thumbnails = true, $thumbnail_size = 'thumbnail');

      ?>
              </dd>
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
            <?php  echo do_shortcode( '[wpuf_profile type="profile" id="513"]' ); ?>
          </div>
        </div>
        </div>
      </article>      

      <article class="Single Single-mypage-organize">
        <div class="Single__inner inner">
            <header class="Single__header">
            </header>
            <div class="Single__body" id="acMenu">
                <h3>主催する or 編集する (「レッスン&イベント」「募集&依頼」)</h3>
                  <div class="toggle">
                    <div class="text-center mb-5">
                      <a target="_blank" class="btn btn-primary" href="https://docs.google.com/presentation/d/14OdGd6UucavluoiuDu36EOjTVvY56fa8LLrIfFGBsqw/edit?usp=sharing">レッスン・イベントの入力マニュアルはここをクリック</a>
                      <div>
                        <p>スマホの方はQRコードからアクセス</p>
                        <img src="<?php echo get_theme_file_uri('/img/event_manual.png'); ?>" alt="">  
                      </div>
                    </div>

                    <div class="text-center mb-5">
                      <a class="btn btn-primary" href="#event">登録したイベントを編集</a>
                      <a class="btn btn-primary" href="#recruit">募集&依頼への投稿を編集</a>
                    </div>

                    <div id="event">
                      <?php  echo do_shortcode( ' [tribe_community_events view="my_events"]' ); ?>
                    </div>

                    <div id="recruit">
                      <h2 class="mt-5 bg-primary">募集&amp;依頼について</h2>
                      <?php echo do_shortcode('[wpuf_dashboard post_type="recruit"]'); ?>
                    </div>

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