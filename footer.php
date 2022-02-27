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

</html>
