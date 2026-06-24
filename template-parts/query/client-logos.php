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
  "post_type" => "client-logo",
  "paged" => $paged
];

$args = apply_filters('udesly/posts/client-logos', $args);

        $query = new WP_Query($args);
?>
<div class="dynamic-marquee_logos w-dyn-list" udy-collection="client-logo">
                  <?php if ( $query->have_posts() ) : ?><div role="list" class="dynamic-marquee_logo-list w-dyn-items">
                    <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="logo w-dyn-item"><img loading="eager" alt="<?php echo udesly_get_image()->alt ?>" src="<?php echo udesly_get_image()->src ?>" class="slider-logo" srcset="<?php echo udesly_get_image()->srcset ?>"></div><?php endwhile; ?>
                  </div>
                  <?php else : ?><div class="w-dyn-empty">
                    <div>No items found.</div>
                  </div><?php endif; ?>
                </div>
<?php wp_reset_postdata(); ?>
 