<?php

/**
 * タクソノミーリスト
 *
 * $taxonomySlug:表示対象タクソノミー
 * $displayLink:リンク表示・非表示
 * $displayCount:件数表示・非表示
 * $unitName:件数の単位
 */

$termData = wp_get_object_terms($post->ID, $taxonomySlug);
?>
<?php if ($termData) : ?>
<ul class="TaxonomyList">
  <?php
    foreach ($termData as $termDataObj) :
      $termID = $termDataObj->term_id;
      $termSlug = $termDataObj->slug;
      $termName = $termDataObj->name;
      $termCount = $termDataObj->count;
      $termCountStr = '';
      if ($displayCount) {
        $termCountStr = '<span class="TaxonomyList__count">';
        $termCountStr .= $termCount . $unitName;
        $termCountStr .= '</span>';
      }
      $termLink = get_category_link($termID);
    ?>
  <li class="TaxonomyList__item -term<?php echo esc_attr($termID); ?>">
    <?php if ($displayLink) : ?>
    <a class="TaxonomyList__link" href="<?php echo esc_url($termLink); ?>">
      <span class="TaxonomyList__name">
        <?php echo esc_html($termName); ?>
      </span>
      <?php echo wp_kses_post($termCountStr); ?>
    </a>
    <?php else : ?>
    <span class="TaxonomyList__span">
      <span class="TaxonomyList__name">
        <?php echo esc_html($termName); ?>
      </span>
      <?php echo wp_kses_post($termCountStr); ?>
    </span>
    <?php endif; ?>
  </li>
  <?php endforeach; ?>
</ul>
<?php endif;