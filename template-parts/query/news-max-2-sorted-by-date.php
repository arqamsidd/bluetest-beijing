<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('front-page');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "post_type" => "news",
  "posts_per_page" => 2,
  "order" => "DESC",
  "orderby" => "meta_value",
  "meta_key" => "date",
  // "date" is Webflow ISO 8601; string sort is chronological. DESC = newest first.
  "paged" => $paged
];

$args = apply_filters('udesly/posts/news-max-2-sorted-by-date', $args);

        $query = new WP_Query($args);
?>
<div class="collection-list-wrapper w-dyn-list" udy-collection="news">
                <?php if ( $query->have_posts() ) : ?><div role="list" class="collection-list w-dyn-items">
                  <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="collection-item-3 w-dyn-item">
                    <div class="solution-slider-card news">
                      <a href="<?php the_permalink() ?>" class="link-block-2 w-inline-block"><?php if (udesly_get_image()->id == "") : /* No CMS image: show default placeholder */ ?><img src="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->alt ?>" class="solution-slider-card_img news" data-img="in2a485a80" srcset="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->srcset ?>"><?php else : ?><img src="<?php echo udesly_get_image()->src ?>" loading="lazy" alt="<?php echo udesly_get_image()->alt ?>" class="solution-slider-card_img news" data-img="in38b8d9ca" srcset="<?php echo udesly_get_image()->srcset ?>"><?php endif ?></a>
                      <div class="solution-slider-card_content news">
                        <a href="<?php the_permalink() ?>" class="link-block w-inline-block">
                          <h3 class="card-heading-fancy"><?php the_title() ?></h3>
                        </a>
                        <a href="<?php the_permalink() ?>" class="button is-text w-inline-block">
                          <div>Read more</div>
                          <div class="global-icon-x-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                              <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                <rect width="16" height="16" fill="currentColor"></rect>
                              </mask>
                              <g mask="url(#mask0_2936_12501)">
                                <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                              </g>
                            </svg></div>
                        </a>
                      </div>
                    </div>
                  </div><?php endwhile; ?>
                </div>
                <?php else : ?><div class="w-dyn-empty">
                  <div>No items found.</div>
                </div><?php endif; ?>
              </div>
<?php wp_reset_postdata(); ?>
 