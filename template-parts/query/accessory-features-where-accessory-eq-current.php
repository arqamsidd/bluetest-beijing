<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('taxonomy-accessory');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "post_type" => "accessory-feature",
  "tax_query" => [
    "0" => [
      "taxonomy" => "accessory",
      "field" => "id",
      "operator" => "IN",
      "terms" => [
        get_queried_object_id()
      ]
    ],
    "relation" => "AND"
  ],
  "paged" => $paged
];

$args = apply_filters('udesly/posts/accessory-features-where-accessory-eq-current', $args);

        $query = new WP_Query($args);
?>
<div class="w-dyn-list" udy-collection="accessory-feature">
                  <?php if ( $query->have_posts() ) : ?><div role="list" class="accessory-stats w-dyn-items">
                    <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="w-dyn-item">
                      <div class="pill-tag lightblue"><?php the_title() ?></div>
                    </div><?php endwhile; ?>
                  </div>
                  <?php else : ?><div class="empty-state w-dyn-empty"></div><?php endif; ?>
                </div>
<?php wp_reset_postdata(); ?>
 