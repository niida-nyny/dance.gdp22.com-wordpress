<?php /*
* フロントページ
*/
?>
<?php get_header(); ?>

<?php
get_template_part('parts/_Eyecatch');
?>

<?php /***** メインループ開始 *****/ ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php 
    $top_service1_img = get_field('top_service1_img');
    $top_service1_title = get_field('top_service1_title');
    $top_service1_text = get_field('top_service1_text',$post->ID, false);
    $top_service1_slug = get_field('top_service1_slug');
    $top_service1_url = get_permalink($top_service1_slug);

    $top_service2_img = get_field('top_service2_img');
    $top_service2_title = get_field('top_service2_title');
    $top_service2_text = get_field('top_service2_text',$post->ID, false);
    $top_service2_slug = get_field('top_service2_slug');
    $top_service2_url = get_permalink($top_service2_slug);

    $top_service3_img = get_field('top_service3_img');
    $top_service3_title = get_field('top_service3_title');
    $top_service3_text = get_field('top_service3_text',$post->ID, false);
    $top_service3_slug = get_field('top_service3_slug');
    $top_service3_url = get_permalink($top_service3_slug);
    // get_field関数
    // カスタムフィールドの値を取得できる
    // 第1引数：カスタムフィールドの名前
    // 戻り値：カスタムフィールドの種類で異なる
    // v($top_service1_img);
    // v($top_service1_title);
    // v($top_service1_text);
    // v($top_service1_slug);
    // v($top_service1_url);
    ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php /***** メインループ終了 *****/ ?>

<main class="Main -frontpage container px-0">
  
<article class="Box">
    <div class="Box__inner inner">
<?php  //echo do_shortcode( ' [events-calendar-search placeholder="Search Events" show-events="5" disable-past-events="false" layout="small"]' ); ?>
    </div>
</article>





<?php /** 
  <article class="Box">
    <div class="Box__inner inner">
      <header class="Box__header">
        <h2 class="Box__mainTitle"></h2>
        <div class="Box__caption"></div>
      </header>
      <div class="Box__body">
        <div class="ServiceList">
          <div class="ServiceList__item">
            <a class="ServiceList__link" href="<?php echo esc_url($top_service1_url); ?>">
              <figure class="ServiceList__thumbnail">
                <img class="ServiceList__img" src="<?php echo esc_html($top_service1_img); ?>" alt="お知らせタイトル">
              </figure>
              <div class="ServiceList__data">
                <h2 class="ServiceList__title"><?php echo esc_html($top_service1_title); ?></h2>
                <div class="ServiceList__text"><?php echo nl2br($top_service1_text); ?></div>
              </div>
            </a>
          </div>
          <div class="ServiceList__item">
            <a class="ServiceList__link" href="<?php echo esc_url($top_service2_url); ?>">
              <figure class="ServiceList__thumbnail">
                <img class="ServiceList__img" src="<?php echo esc_html($top_service2_img); ?>" alt="お知らせタイトル">
              </figure>
              <div class="ServiceList__data">
                <h2 class="ServiceList__title"><?php echo esc_html($top_service2_title); ?></h2>
                <div class="ServiceList__text"><?php echo nl2br($top_service2_text); ?></div>
              </div>
            </a>
          </div>
          <div class="ServiceList__item">
            <a class="ServiceList__link" href="<?php echo esc_url($top_service3_url); ?>">
              <figure class="ServiceList__thumbnail">
                <img class="ServiceList__img" src="<?php echo esc_html($top_service3_img); ?>" alt="お知らせタイトル">
              </figure>
              <div class="ServiceList__data">
                <h2 class="ServiceList__title"><?php echo esc_html($top_service3_title); ?></h2>
                <div class="ServiceList__text"><?php echo nl2br($top_service3_text); ?></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </article>
  */ ?>


<article class="Box">
    <div class="Box__inner inner">
      <header class="Box__header">
        <h2 class="Box__mainTitle"></h2>
      </header>
      <div class="Box__body">
        <?php get_template_part('parts/_ArchiveList__item_good_point'); ?>
      </div>
      <footer class="Box__footer">
      </footer>
    </div>
  </article>


  <?php
  $args = [
    'post_type' => 'post', //「post」投稿 「page」固定ページ
    'posts_per_page' => 10, //取得する件数
  ];
  $the_query = new WP_Query($args);
  ?>
  <article class="Box">
    <div class="Box__inner inner">
      <header class="Box__header">
        <h2 class="Box__mainTitle">最新情報</h2>
        <div class="Box__caption"></div>
      </header>
      <div class="Box__body">
        <div class="ArchiveList">
          <?php /***** メインループ開始 *****/ ?>
          <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : ?>
              <?php $the_query->the_post(); ?>
              <?php get_template_part('parts/_ArchiveList__item_top_news'); ?>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          <?php /***** メインループ終了 *****/ ?>
        </div>
      </div>
      <footer class="Box__footer">
        <a class="Box__link btn" href="https://dance.gdp22.com/news">最新情報一覧</a>
      </footer>
    </div>
  </article>







</main>

<?php get_footer();