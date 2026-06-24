<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('page-accessories');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "taxonomy" => "accessory",
  "hide_empty" => 0,
  "paged" => $paged
];

$args = apply_filters('udesly/terms/accessories', $args);

        $query = new WP_Term_Query($args);
?>
<div class="w-dyn-list" udy-collection="accessory">
            <?php if ( ! empty($query->terms) ) : ?><div fs-list-element="list" role="list" class="accessories-loop_wrap w-dyn-items w-row">
              <?php foreach ($query->get_terms() as $term) : ?><div role="listitem" class="collection-item w-dyn-item w-col w-col-4">
                <div class="accessories-loop_single">
                  <div class="accessories-loop_image">
                    <a href="<?php echo get_term_link($term) ?>" class="accessories-loop-img-link w-inline-block"><?php  /* Fallback: true */

$conditionResult = true;

if ((udesly_referenced_items_contains(udesly_get_custom_term_field($term->term_id, "categories", "ItemRefSet"), ["discontinued"]))) {
 /* Result: false */

$conditionResult = false;

} ?><?php if ($conditionResult) : ?><img src="<?php echo udesly_get_custom_term_field( $term->term_id, "main-image", "ImageRef" )->src ?>" loading="lazy" alt="<?php echo udesly_get_custom_term_field( $term->term_id, "main-image", "ImageRef" )->alt ?>" class="accessories-loop-img" data-img="in38b8d9ca" srcset="<?php echo udesly_get_custom_term_field( $term->term_id, "main-image", "ImageRef" )->srcset ?>"><?php endif  ?></a>
                    <div class="accessories-loop_image_content">
                      <?php get_template_part('template-parts/query/accessory-categories-of-current-accessory', null, ['term' => $term]) ?>
                      <a href="<?php echo get_term_link($term) ?>" class="absolute-link w-inline-block"></a>
                    </div>
                  </div>
                  <div class="accessories-card_content">
                    <a href="<?php echo get_term_link($term) ?>" class="heading-style-h5 accessory-loop-link"><?php echo $term->name; ?></a>
                  </div>
                </div>
              </div><?php endforeach ?>
            </div>
            <?php else : ?><div class="w-dyn-empty">
              <div>No items found.</div>
            </div><?php endif; ?>
          </div>
 