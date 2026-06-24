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
  "post_type" => "technology",
  "paged" => $paged
];

$args = apply_filters('udesly/posts/technologies', $args);

        $query = new WP_Query($args);
?>
<div class="w-dyn-list" udy-collection="technology">
            <?php if ( $query->have_posts() ) : ?><div fs-list-element="list" role="list" class="db-loop_wrap w-dyn-items">
              <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="w-dyn-item">
                <div class="db-loop_single">
                  <div class="db-loop_content">
                    <?php $term = udesly_get_the_term('technology-category'); ?><?php $nested_term = udesly_get_the_term('technology-category'); ?><div fs-list-field="category" class="db-cateogry"><?php echo $nested_term->name; ?></div>
                    <h3 fs-list-field="title" class="db-loop_title"><?php the_title() ?></h3>
                    <div fs-list-field="description" class="text-color-gray w-richtext" data-richtext="r3fbe8166"><?php the_content() ?></div>
                    <div class="db-loop_arrow w-embed"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="5" fill="#1477FF"></rect>
                        <path d="M12.0103 28.0405L27.0405 13.0103M27.0405 13.0103L13.0195 13.0108M27.0405 13.0103L27.0405 27.0318" stroke="white" stroke-width="1.85455" stroke-linejoin="bevel"></path>
                      </svg></div>
                  </div>
                  <a href="<?php the_permalink() ?>" class="db-abs-link"></a>
                  <div class="db-loop-tags">
                    <div class="db-tags-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M5.5 7A1.5 1.5 0 0 1 4 5.5A1.5 1.5 0 0 1 5.5 4A1.5 1.5 0 0 1 7 5.5A1.5 1.5 0 0 1 5.5 7m15.91 4.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.11 0-2 .89-2 2v7c0 .55.22 1.05.59 1.41l8.99 9c.37.36.87.59 1.42.59s1.05-.23 1.41-.59l7-7c.37-.36.59-.86.59-1.41c0-.56-.23-1.06-.59-1.42"></path>
                      </svg></div>
                    <?php get_template_part('template-parts/query/technology-tags-of-current-technology') ?>
                  </div>
                </div>
              </div><?php endwhile; ?>
            </div>
            <?php else : ?><div class="w-dyn-empty">
              <div>No items found.</div>
            </div><?php endif; ?>
          </div>
<?php wp_reset_postdata(); ?>
 