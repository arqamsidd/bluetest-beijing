<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('single-news');
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
  "posts_per_page" => 3,
  "order" => "ASC",
  "orderby" => "meta_value",
  "meta_key" => "date",
  "post__not_in" => [
    get_the_ID()
  ],
  "paged" => $paged
];

$args = apply_filters('udesly/posts/news-max-3-where-id-ne-current-sorted-by-date', $args);

        $query = new WP_Query($args);
?>
<div class="w-dyn-list" udy-collection="news">
            <?php if ( $query->have_posts() ) : ?><div role="list" class="news-loop_wrap w-dyn-items">
              <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="w-dyn-item">
                <a href="<?php the_permalink() ?>" class="news-loop_single w-inline-block">
                  <div class="news-loop_media"><?php $news_img = udesly_get_image(); if ($news_img->id == "") : $news_img = udesly_get_image(_u('in2a485a80', 'img')); /* No CMS image: use default placeholder */ ?><img class="news-loop_img placeholder" src="<?php echo $news_img->src ?>" alt="<?php echo $news_img->alt ?>" sizes="100vw" loading="lazy" srcset="<?php echo $news_img->srcset ?>" data-img="in2a485a80"><?php else : ?><img src="<?php echo $news_img->src ?>" loading="lazy" alt="<?php echo $news_img->alt ?>" class="news-loop_img" data-img="in38b8d9ca" srcset="<?php echo $news_img->srcset ?>"><?php endif ?><div class="news-loop_blur" style="background-image:url('<?php echo esc_url($news_img->src) ?>')"></div></div>
                  <div class="news-card_content">
                    <h3 class="feature-heading"><?php the_title() ?></h3>
                  </div>
                </a>
              </div><?php endwhile; ?>
            </div>
            <?php else : ?><div class="w-dyn-empty">
              <div>No items found.</div>
            </div><?php endif; ?>
          </div>
<?php wp_reset_postdata(); ?>
 