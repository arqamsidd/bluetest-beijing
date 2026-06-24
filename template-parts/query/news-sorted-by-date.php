<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('page-newss');
          }
?>
<?php

        if (isset($_GET['p_id'])) {
          $paged = max(1, intval($_GET['p_id']));
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "post_type" => "news",
  "order" => "DESC",
  "orderby" => "meta_value",
  "meta_key" => "date",
  // The "date" custom field stores Webflow ISO 8601 (e.g. 2026-06-10T00:00:00.000Z).
  // Sorting as a string is chronologically correct and avoids MySQL's DATETIME cast
  // failing on the "T...Z" suffix (which silently broke ordering). DESC = newest first.
  "posts_per_page" => 9,
  "paged" => $paged
];

// Server-side category filter — replaces the removed Finsweet CMS filter. ?news_category=<slug>
if (!empty($_GET['news_category'])) {
  $args["tax_query"] = [[
    "taxonomy" => "news-category",
    "field"    => "slug",
    "terms"    => sanitize_title(wp_unslash($_GET['news_category'])),
  ]];
}

$args = apply_filters('udesly/posts/news-sorted-by-date', $args);

        $query = new WP_Query($args);
?>
<div class="w-dyn-list" udy-collection="news">
            <?php if ( $query->have_posts() ) : ?><div fs-list-element="list" role="list" class="news-loop_wrap w-dyn-items">
              <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="w-dyn-item">
                <a href="<?php the_permalink() ?>" class="news-loop_single w-inline-block">
                  <div class="news-loop_media"><?php $news_img = udesly_get_image(); if ($news_img->id == "") : $news_img = udesly_get_image(_u('in2a485a80', 'img')); /* No CMS image: use default placeholder */ ?><img class="news-loop_img placeholder" src="<?php echo $news_img->src ?>" alt="<?php echo $news_img->alt ?>" sizes="100vw" loading="lazy" srcset="<?php echo $news_img->srcset ?>" data-img="in2a485a80"><?php else : ?><img src="<?php echo $news_img->src ?>" loading="lazy" alt="<?php echo $news_img->alt ?>" class="news-loop_img" data-img="in38b8d9ca" srcset="<?php echo $news_img->srcset ?>"><?php endif ?><div class="news-loop_blur" style="background-image:url('<?php echo esc_url($news_img->src) ?>')"></div></div>
                  <div class="news-card_content">
                    <h3 class="feature-heading"><?php the_title() ?></h3>
                  </div>
                </a>
                <?php get_template_part('template-parts/query/news-categories-of-current-news') ?>
              </div><?php endwhile; ?>
            </div>
            <?php else : ?><div class="w-dyn-empty">
              <div>No items found.</div>
            </div><?php endif; ?>
          </div>
          <?php
          // Server-side pagination — replaces the removed Finsweet load/pagination.
          // Links use ?p_id=N (the var this query already reads) and preserve the active category.
          $news_pagination = paginate_links([
            'base'      => trailingslashit(get_post_type_archive_link('news')) . '%_%',
            'format'    => '?p_id=%#%',
            'current'   => max(1, $paged),
            'total'     => $query->max_num_pages,
            'mid_size'  => 1,
            'end_size'  => 1,
            'prev_text' => '&larr; Prev',
            'next_text' => 'Next &rarr;',
            'add_args'  => !empty($_GET['news_category']) ? ['news_category' => sanitize_title(wp_unslash($_GET['news_category']))] : false,
          ]);
          if ($news_pagination) : ?>
            <style>
              .news-pagination{display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center;margin-top:3rem}
              .news-pagination .page-numbers{display:inline-flex;align-items:center;justify-content:center;min-width:2.5rem;height:2.5rem;padding:0 .85rem;border:1px solid #e0e0e0;border-radius:6px;color:inherit;text-decoration:none;font-family:'Space Grotesk',sans-serif;font-size:.95rem;line-height:1;transition:border-color .2s ease,color .2s ease,background-color .2s ease}
              .news-pagination a.page-numbers:hover{border-color:var(--base-color-brand--blue,#1477ff);color:var(--base-color-brand--blue,#1477ff)}
              .news-pagination .page-numbers.current{background:var(--base-color-brand--blue,#1477ff);border-color:var(--base-color-brand--blue,#1477ff);color:#fff}
              .news-pagination .page-numbers.dots{border-color:transparent}
            </style>
            <nav class="news-pagination" aria-label="News pagination"><?php echo $news_pagination; ?></nav>
          <?php endif; ?>
<?php wp_reset_postdata(); ?>
 