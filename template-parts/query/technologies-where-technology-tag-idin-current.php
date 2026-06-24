<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('taxonomy-technology-tag');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "post_type" => "technology",
  "tax_query" => [
    "0" => [
      "taxonomy" => "technology-tag",
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

$args = apply_filters('udesly/posts/technologies-where-technology-tag-idin-current', $args);

        $query = new WP_Query($args);
?>
<div class="w-dyn-list" udy-collection="technology">
            <?php if ( $query->have_posts() ) : ?><div role="list" class="w-dyn-items">
              <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="w-dyn-item">
                <a href="<?php the_permalink() ?>" class="heading-style-h4"><?php the_title() ?></a>
              </div><?php endwhile; ?>
            </div>
            <?php else : ?><div class="w-dyn-empty">
              <div>No items found.</div>
            </div><?php endif; ?>
          </div>
<?php wp_reset_postdata(); ?>
 