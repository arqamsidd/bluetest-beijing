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
          $paged = $_GET['p_id'];
        } else {
          $paged = isset($args['paged']) ? $args['paged'] : 1;
        }



$args = [
  "taxonomy" => "news-category",
  "hide_empty" => 0,
  "paged" => $paged
];

$args = apply_filters('udesly/terms/news-categories', $args);

        $query = new WP_Term_Query($args);
?>
<div class="w-dyn-list" udy-collection="news-category">
                    <?php if ( ! empty($query->terms) ) : ?><div role="list" class="accessories-categories w-dyn-items">
                      <?php
                      $current_cat  = isset($_GET['news_category']) ? sanitize_title(wp_unslash($_GET['news_category'])) : '';
                      $news_archive = get_post_type_archive_link('news');
                      foreach ($query->get_terms() as $term) :
                        $is_active = ($current_cat === $term->slug) ? ' is-list-active' : '';
                      ?><div role="listitem" class="news-category-collection-item w-dyn-item"><a href="<?php echo esc_url(add_query_arg('news_category', $term->slug, $news_archive)); ?>" class="radio-button-field news w-radio<?php echo $is_active; ?>"><span class="heading-style-h3 w-form-label"><?php echo esc_html($term->name); ?></span>
                          <div class="facetcount">(<span><?php echo intval($term->count); ?></span>)</div>
                        </a></div><?php endforeach ?>
                    </div>
                    <?php else : ?><div class="w-dyn-empty"></div><?php endif; ?>
                  </div>
 