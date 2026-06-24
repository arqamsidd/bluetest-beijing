<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('taxonomy-chamber');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "post_type" => "key-feature",
  "posts_per_page" => -1,
  "tax_query" => [
    [
      "taxonomy" => "chamber",
      "field" => "term_id",
      "operator" => "IN",
      "terms" => [
        get_queried_object_id()
      ]
    ]
  ],
  // Sort by the "order" custom field when set, but don't REQUIRE it. Udesly imported "order"
  // as null for every key-feature, and a bare meta_key turns into a hard "must have this meta"
  // filter that excluded them all ("No items found"). EXISTS/NOT EXISTS keeps unordered items in.
  "meta_query" => [
    "relation"  => "OR",
    "ordered"   => [ "key" => "order", "type" => "NUMERIC", "compare" => "EXISTS" ],
    "unordered" => [ "key" => "order", "compare" => "NOT EXISTS" ],
  ],
  "orderby" => [ "ordered" => "ASC", "ID" => "ASC" ],
  "order"   => "ASC",
];

$args = apply_filters('udesly/posts/chamber-key-features-where-chamber-eq-current-sorted-by-order', $args);

        $query = new WP_Query($args);
?>
<div class="w-dyn-list" udy-collection="key-feature">
                  <?php if ( $query->have_posts() ) : ?><div role="list" class="product-body_features w-dyn-items">
                    <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="w-dyn-item">
                      <div class="product-body_feature">
                        <div class="prodfeature-wrap">
                          <h5 class="feature-heading"><?php echo udesly_get_custom_post_field( $post->ID, "feature-name", "PlainText" ) ?></h5>
                          <div class="w-richtext" data-richtext="r3fbe8166"><?php the_content() ?></div>
                        </div>
                      </div>
                    </div><?php endwhile; ?>
                  </div>
                  <?php else : ?><div class="w-dyn-empty">
                    <div>No items found.</div>
                  </div><?php endif; ?>
                </div>
<?php wp_reset_postdata(); ?>
 