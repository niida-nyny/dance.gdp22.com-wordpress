jQuery(function ($) {
  $(function () {
    /*
    スクロールアニメーション：aos
    https://michalsnik.github.io/aos/
    https://github.com/michalsnik/aos#1-initialize-aos
    */
    AOS.init({
      disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      offset: 120, // offset (in px) from the original trigger point
      delay: 0, // values from 0 to 3000, with step 50ms
      duration: 1200, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-center', // defines which position of the element regarding to window should trigger the animation
    });
  });
});
