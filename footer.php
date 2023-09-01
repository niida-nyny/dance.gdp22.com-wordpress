<footer class="Footer">
  <div class="Footer__inner inner">
    <?php 
    dynamic_sidebar('widget_footer'); ?>
    <?php 
    get_search_form(); ?>
    <div class="Footer__copyright">
      &copy;
      <?php echo esc_html(date('Y')) ?>
      <?php bloginfo('name'); ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

<!-- JSテスト -->
<script type="text/javascript">
  jQuery(function($){
    // const element = document.querySelector('.sf-field-post-meta-area_middle_03_kanto');
    // element.style.display = 'none';
    // 最初は中エリアを選択してくださいを隠す
    // document.querySelector('.sf-field-post-meta-area_middle_03_kanto').style.display = 'none';

    // 選択されたエリアが関東の場合に中エリアを選択してくださいを表示する
    document.querySelector('select[name="_sfm_area_large[]"]').addEventListener('change', function() {
      console.log(this.value);
      if (this.value === '03') {
        document.querySelector('.sf-field-post-meta-area_middle_03_kanto').style.display = 'block';
      } else {
        document.querySelector('.sf-field-post-meta-area_middle_03_kanto').style.display = 'none';
      }
    });
  });
</script>
<!-- JSテスト -->
</html>
