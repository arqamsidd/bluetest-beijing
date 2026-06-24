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
  "order" => "ASC",
  "orderby" => "name",
  "paged" => $paged
];

$args = apply_filters('udesly/terms/chambers-sorted-by-name-v1', $args);

        $query = new WP_Term_Query($args);
?>
<div class="w-dyn-list" udy-collection="chamber">
                              <?php if ( ! empty($query->terms) ) : ?><div role="list" class="w-dyn-items">
                                <?php foreach ($query->get_terms() as $term) : ?><div role="listitem" class="w-dyn-item">
                                  <a href="<?php echo get_term_link($term) ?>" class="footer-nav_link dropdown-child w-dropdown-link"><?php echo $term->name; ?></a>
                                </div><?php endforeach ?>
                              </div>
                              <?php else : ?><div class="w-dyn-empty">
                                <div>No items found.</div>
                              </div><?php endif; ?>
                            </div>
 