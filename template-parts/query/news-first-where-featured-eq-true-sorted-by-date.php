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
  "posts_per_page" => 1,
  "order" => "ASC",
  "orderby" => "meta_value",
  "meta_key" => "date",
  "meta_query" => [
    "relation" => "AND",
    "featured" => [
                "relation" => "OR",
      [
        "key" => "featured",
        "value" => true,
        "type" => "BOOLEAN",
        "compare" => "="
      ]
    ]
  ],
  "paged" => $paged
];

$args = apply_filters('udesly/posts/news-first-where-featured-eq-true-sorted-by-date', $args);

        $query = new WP_Query($args);
?>
<div class="home-hero-news-abs w-dyn-list" udy-collection="news">
              <?php if ( $query->have_posts() ) : ?><div role="list" class="w-dyn-items">
                <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="collection-item-5 w-dyn-item">
                  <a href="<?php the_permalink() ?>" class="home-hero_news w-inline-block">
                    <div class="home-hero-news_image"><img src="<?php echo udesly_get_image()->src ?>" loading="lazy" alt="<?php echo udesly_get_image()->alt ?>" class="home-hero-news_img" data-img="i693c1c70" srcset="<?php echo udesly_get_image()->srcset ?>"></div>
                    <div class="home-hero-news_text">
                      <div class="home-hero-news_text_bottom">
                        <div class="pill-tag-copy">NEW</div>
                        <div class="button is-text home-hero-news">
                          <div>Read&nbsp;Story</div>
                          <div class="global-icon-x-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                              <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                <rect width="16" height="16" fill="currentColor"></rect>
                              </mask>
                              <g mask="url(#mask0_2936_12501)">
                                <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                              </g>
                            </svg></div>
                        </div>
                      </div>
                      <div class="home-hero-news_text_bottom">
                        <div class="heading-style-h5-copy"><?php the_title() ?></div>
                      </div>
                    </div>
                  </a>
                </div><?php endwhile; ?>
              </div>
              <?php else : ?><div class="w-dyn-empty"></div><?php endif; ?>
            </div>
<?php wp_reset_postdata(); ?>
 