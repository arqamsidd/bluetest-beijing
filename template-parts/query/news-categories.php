<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('page-newss');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "taxonomy" => "news-category",
  "hide_empty" => 0,
  "paged" => $paged
];

$args = apply_filters('udesly/terms/news-categories', $args);

        $query = new WP_Term_Query($args);
?>
<div class="w-dyn-list" udy-collection="news-category">
                    <?php if ( ! empty($query->terms) ) : ?><div role="list" class="accessories-categories w-dyn-items">
                      <?php foreach ($query->get_terms() as $term) : ?><div role="listitem" class="news-category-collection-item w-dyn-item"><label class="radio-button-field news w-radio"><input fs-list-value="<?php echo $term->name; ?>" class="w-form-formradioinput radio-button-2 w-radio-input" fs-list-field="category" name="contact[accessory]" data-name="Accessory" type="radio" id="radio" value=""><span class="heading-style-h3 w-form-label" for="radio"><?php echo $term->name; ?></span>
                          <div class="facetcount">(<span fs-list-element="facet-count">1</span>)</div>
                        </label></div><?php endforeach ?>
                    </div>
                    <?php else : ?><div class="w-dyn-empty"></div><?php endif; ?>
                  </div>
 