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
  "taxonomy" => "technology-tag",
  "hide_empty" => 0,
  "order" => "ASC",
  "orderby" => "name",
  "paged" => $paged
];

$args = apply_filters('udesly/terms/technology-tags-sorted-by-name', $args);

        $query = new WP_Term_Query($args);
?>
<div class="w-dyn-list" udy-collection="technology-tag">
                      <?php if ( ! empty($query->terms) ) : ?><div role="list" class="db-tags w-dyn-items">
                        <?php foreach ($query->get_terms() as $term) : ?><div role="listitem" class="w-dyn-item"><label class="w-checkbox radio-button-field"><input fs-list-value="<?php echo $term->name; ?>" class="w-checkbox-input radio-button-2" fs-list-field="tag" name="contact[checkbox]" data-name="Checkbox" type="checkbox" id="checkbox"><span class="db-filtertag w-form-label" for="checkbox"><?php echo $term->name; ?></span></label></div><?php endforeach ?>
                      </div>
                      <?php else : ?><div class="w-dyn-empty">
                        <div>No items found.</div>
                      </div><?php endif; ?>
                    </div>
 