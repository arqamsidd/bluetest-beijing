<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('page-technologyy');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "taxonomy" => "technology-category",
  "hide_empty" => 0,
  "paged" => $paged
];

$args = apply_filters('udesly/terms/technology-categories', $args);

        $query = new WP_Term_Query($args);
?>
<div class="w-dyn-list" udy-collection="technology-category">
                      <?php if ( ! empty($query->terms) ) : ?><div role="list" class="accessories-categories w-dyn-items">
                        <div role="listitem" class="w-dyn-item"><label class="radio-button-field w-radio is-list-active"><input fs-list-value="" class="w-form-formradioinput radio-button-2 w-radio-input" fs-list-field="category" name="contact[accessory]" data-name="Accessory" type="radio" id="cat-all" value="" checked><span class="db-category w-form-label" for="cat-all">All</span></label></div>
                        <?php foreach ($query->get_terms() as $term) : ?><div role="listitem" class="w-dyn-item"><label class="radio-button-field w-radio"><input fs-list-value="<?php echo $term->name; ?>" class="w-form-formradioinput radio-button-2 w-radio-input" fs-list-field="category" name="contact[accessory]" data-name="Accessory" type="radio" id="radio" value=""><span class="db-category w-form-label" for="radio"><?php echo $term->name; ?></span></label></div><?php endforeach ?>
                      </div>
                      <?php else : ?><div class="w-dyn-empty">
                        <div>No items found.</div>
                      </div><?php endif; ?>
                    </div>
 