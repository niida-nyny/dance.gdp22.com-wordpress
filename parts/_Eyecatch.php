<?php /*
* トップページ slickパーツ
*/
?>
<div class="Eyecatch">
  <div id="js-slick" class="Eyecatch__list">
    <div class="Eyecatch__item">
      <a class="Eyecatch__link ArchiveList__link" href="<?php echo esc_url(home_url('/philosophy')); ?>">
        <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch01.jpg')); ?>">
      </a>
    </div>

    <div class="Eyecatch__item">
      <a class="Eyecatch__link ArchiveList__link" href="<?php echo esc_url(home_url('/')); ?>">
        <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch02.jpg')); ?>">
      </a>
    </div>

    <div class="Eyecatch__item">
      <a class="Eyecatch__link ArchiveList__link" href="<?php echo esc_url(home_url('/questions')); ?>">
        <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch03.jpg')); ?>">
      </a>
    </div>

    <div class="Eyecatch__item">
      <a class="Eyecatch__link ArchiveList__link" href="<?php echo esc_url(home_url('/events')); ?>">
        <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch04.jpg')); ?>">
      </a>
    </div>
  </div>

  <div id="js-slick-thumbnail" class="Eyecatch__list-thumbnail">
    <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch01.jpg')); ?>">

    <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch02.jpg')); ?>">

    <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch03.jpg')); ?>">

    <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch04.jpg')); ?>">

  </div>

</div>
<script>
  window.addEventListener('load', function() {
    jQuery(function($) {
      // ここにjQueryを使ったコードを記述
      
      // メインスライダー設定
      $('#js-slick').slick({
        asNavFor:'#js-slick-thumbnail',
        accessibility: true,
        autoplay: true,
        autoplaySpeed: 15000,
        centerMode: true,
        // customPaging: true,
        dots: true,
        draggable: true,
        focusOnSelect: true,
        slidesToShow: 1,
        easing: 'linear',
        infinite: true,
        pauseOnFocus:true,
        pauseOnHover: true,
        pauseOnDotsHover: true,
        respondTo: 'window',
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
        swipe: true,
        variableWidth: true,
        zIndex: 1000,
        arrows: true,
        prevArrow:'<div class="prev">＜</div>',
        nextArrow:'<div class="next">＞</div>'
      });

      // サムネイルスライダー設定
      $('#js-slick-thumbnail').slick({
        asNavFor:'#js-slick',
        focusOnSelect: true,
        slidesToShow: 5,
        arrows: false,
      });
    });
  });

</script>
