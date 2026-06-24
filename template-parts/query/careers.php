<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('page-careers');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "post_type" => "career",
  "paged" => $paged
];

$args = apply_filters('udesly/posts/careers', $args);

        $query = new WP_Query($args);
?>
<div class="w-dyn-list" udy-collection="career">
              <?php if ( $query->have_posts() ) : ?><div role="list" class="accordion-wrapper w-dyn-items">
                <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="w-dyn-item">
                  <div class="accordion-item">
                    <div id="q1" class="accordion-item-trigger">
                      <h4 class="accordion-heading"><?php the_title() ?></h4>
                      <div class="icon accordion-icon w-embed"><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.53118 -3.93406e-07L9.53157 18.0025M9.53157 18.0025L18.5312 9.00215M9.53157 18.0025L0.53125 9.00214" stroke="#EDF1F4" stroke-width="1.5" stroke-linejoin="bevel"></path>
                        </svg></div>
                    </div>
                    <div class="accordion-item-content">
                      <div class="accordion-item-content-inner">
                        <div class="w-richtext" data-richtext="r3fbe8166"><?php the_content() ?></div>
                        <a href="#formcareer" class="button is-icon career-apply w-inline-block">
                          <div>Apply now</div>
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                              <title>Arrow Right</title>
                              <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                            </polygon></svg></div>
                        </a>
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
 