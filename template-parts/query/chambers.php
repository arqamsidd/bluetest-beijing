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
  "taxonomy" => "chamber",
  "hide_empty" => 0,
  "paged" => $paged
];

$args = apply_filters('udesly/terms/chambers', $args);

        $query = new WP_Term_Query($args);
?>
<div class="collection_featured swiper productcard-slider w-dyn-list" udy-collection="chamber">
                <?php if ( ! empty($query->terms) ) : ?><div role="list" class="swiper-wrapper w-dyn-items">
                  <?php foreach ($query->get_terms() as $term) : ?><div role="listitem" class="collection_featured-item swiper-slide w-dyn-item">
                    <div class="product-slider-card">
                      <div class="product-slider-card_top">
                        <h3 class="heading-fancy-xl"><?php echo $term->name; ?></h3>
                        <a href="<?php echo get_term_link($term) ?>" class="button is-icon gray color-blue slightlylarge w-inline-block">
                          <div>Read more</div>
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                              <title>Arrow Right</title>
                              <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                            </polygon></svg></div>
                        </a>
                      </div>
                      <div class="product-slider-card_info">
                        <div class="text-rich-text w-richtext" data-richtext="r3fbe8166"><?php echo udesly_get_custom_term_field( $term->term_id, "short-description-2", "RichText" ) ?></div>
                      </div>
                      <div class="product-slider-card_stats">
                        <div class="text-size-tiny text-color-gray">Quick stats:</div>
                        <div class="product-card-stats max-width-large">
                          <div class="w-richtext" data-richtext="r3fbe8166"><?php echo udesly_get_custom_term_field( $term->term_id, "pill-highlights", "RichText" ) ?></div>
                        </div>
                      </div><img src="<?php echo udesly_get_custom_term_field( $term->term_id, "hero-picture", "ImageRef" )->src ?>" loading="lazy" alt="<?php echo udesly_get_custom_term_field( $term->term_id, "hero-picture", "ImageRef" )->alt ?>" class="product-slider-card_img" data-img="in501035d7" srcset="<?php echo udesly_get_custom_term_field( $term->term_id, "hero-picture", "ImageRef" )->srcset ?>">
                    </div>
                  </div><?php endforeach ?>
                </div>
                <?php else : ?><div class="w-dyn-empty">
                  <div>No items found.</div>
                </div><?php endif; ?>
              </div>
 