<?php /*
* トップページ slickパーツ
*/
?>
<div class="Eyecatch">

  <div id="js-slick" class="Eyecatch__list inner mx-auto">

    <div class="Eyecatch__item">
      <a class="Eyecatch__link ArchiveList__link" href="<?php echo esc_url(home_url('/philosophy')); ?>">
        <img class="Eyecatch__img img-fluid" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch01.jpg')); ?>">
      </a>
    </div>

    <div class="Eyecatch__item">
      <a class="Eyecatch__link ArchiveList__link" href="<?php echo esc_url(home_url('/archives/dance_changes_life/')); ?>">
        <img class="Eyecatch__img img-fluid" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch02.jpg')); ?>">
      </a>
    </div>

    <div class="Eyecatch__item">
      <a class="Eyecatch__link ArchiveList__link" href="<?php echo esc_url(home_url('/archives/amazing_movies')); ?>">
        <img class="Eyecatch__img img-fluid" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch05.jpg')); ?>">
      </a>
    </div>

    <div class="Eyecatch__item">
      <a class="Eyecatch__link ArchiveList__link" href="<?php echo esc_url(home_url('/questions')); ?>">
        <img class="Eyecatch__img img-fluid" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch03.jpg')); ?>">
      </a>
    </div>

    <div class="Eyecatch__item">
      <a class="Eyecatch__link ArchiveList__link" href="<?php echo esc_url(home_url('/events')); ?>">
        <img class="Eyecatch__img img-fluid" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch04.jpg')); ?>">
      </a>
    </div>

    <div class="Eyecatch__item">
      <a class="Eyecatch__link ArchiveList__link" href="<?php echo esc_url(home_url('/archives/recruit')); ?>">
        <img class="Eyecatch__img img-fruid" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch06.jpg')); ?>">
      </a>
    </div>

  </div>

  <div id="js-slick-thumbnail" class="Eyecatch__list-thumbnail pc">
    <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch01.jpg')); ?>">
    <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch02.jpg')); ?>">
    <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch05.jpg')); ?>">
    <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch03.jpg')); ?>">
    <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch04.jpg')); ?>">
    <img class="Eyecatch__img" src="<?php echo esc_url(get_theme_file_uri('/img/eyecatch06.jpg')); ?>">
  </div>

</div>
<script>
  window.addEventListener('load', function() {
    jQuery(function($) {
      // ここにjQueryを使ったコードを記述

      // メインスライダー設定
      $('#js-slick').slick({
        asNavFor: '#js-slick-thumbnail',
        accessibility: true,
        // adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 15000,
        centerMode: true,
        // customPaging: true,
        dots: true,
        draggable: true,
        focusOnSelect: true,
        slidesToShow: 3,
        easing: 'linear',
        infinite: true,
        pauseOnFocus: true,
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
        prevArrow: '<div class="prev">＜</div>',
        nextArrow: '<div class="next">＞</div>'
        // responsive: [{
        //     breakpoint: 600,
        //     settings:{
        //         centerPadding: '0px',
        //         focusOnSelect: true,
        //         centerMode: true,
        //         variableWidth: false
        //     }
        // }]

      });

      // サムネイルスライダー設定
      $('#js-slick-thumbnail').slick({
        asNavFor: '#js-slick',
        focusOnSelect: true,
        slidesToShow: 6,
        arrows: false,
      });
    });
  });
</script>