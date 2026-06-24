<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('page-defense');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "taxonomy" => "chamber",
  "hide_empty" => 0,
  "order" => "ASC",
  "orderby" => "name",
  "paged" => $paged
];

$args = apply_filters('udesly/terms/chambers-sorted-by-name-v2', $args);

        $query = new WP_Term_Query($args);
?>
<div class="w-dyn-list" udy-collection="chamber">
                              <?php if ( ! empty($query->terms) ) : ?><div role="list" class="product-menu_list w-dyn-items">
                                <?php foreach ($query->get_terms() as $term) : ?><div role="listitem" class="collection-item-4 w-dyn-item">
                                  <a href="<?php echo get_term_link($term) ?>" class="product-list_single w-inline-block">
                                    <div class="product-list_left"><img src="<?php echo udesly_get_custom_term_field( $term->term_id, "icon", "ImageRef" )->src ?>" loading="lazy" alt="<?php echo udesly_get_custom_term_field( $term->term_id, "icon", "ImageRef" )->alt ?>" class="product-list_img" data-img="i75356710" srcset="<?php echo udesly_get_custom_term_field( $term->term_id, "icon", "ImageRef" )->srcset ?>"></div>
                                    <div class="product-list_right">
                                      <div class="heading-style-h5 text-color-blue"><?php echo $term->name; ?></div>
                                    </div>
                                  </a>
                                </div><?php endforeach ?>
                              </div>
                              <?php else : ?><div class="w-dyn-empty">
                                <div>No items found.</div>
                              </div><?php endif; ?>
                            </div>
 