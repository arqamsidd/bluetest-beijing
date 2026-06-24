<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('page-contact');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "post_type" => "employee",
  "paged" => $paged
];

$args = apply_filters('udesly/posts/employees', $args);

        $query = new WP_Query($args);
?>
<div class="w-dyn-list" udy-collection="employee">
            <?php if ( $query->have_posts() ) : ?><div role="list" class="our-team_loop w-dyn-items">
              <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="w-dyn-item">
                <div class="our-team_single">
                  <div class="our-team_image"><img src="<?php echo udesly_get_image()->src ?>" loading="lazy" alt="<?php echo udesly_get_image()->alt ?>" class="our-team_img" data-img="in6f8f39aa" srcset="<?php echo udesly_get_image()->srcset ?>"></div>
                  <div class="our-team_single_content">
                    <div class="our-team_content_inner">
                      <h1 class="heading-style-h5"><?php the_title() ?></h1>
                      <div class=""><?php echo udesly_get_custom_post_field( $post->ID, "designation", "PlainText" ) ?></div>
                    </div>
                  </div>
                </div>
              </div><?php endwhile; ?>
            </div>
            <?php else : ?><div class="w-dyn-empty">
              <div>No items found.</div>
            </div><?php endif; ?>
          </div>
<?php wp_reset_postdata(); ?>
 