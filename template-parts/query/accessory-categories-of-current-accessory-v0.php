<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php

            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('taxonomy-accessory');
          }

                $term_id = get_queried_object_id();
                $sub_posts_ids = udesly_get_custom_term_field( $term_id, "accessory-category", "ItemRefSet" );
                $sub_posts = [];
                $limit = 100;
                $i = 1;
                if (is_array($sub_posts_ids)) {
                  foreach ($sub_posts_ids as $sub_posts_id) {
                    if ($i > $limit) {
                      break;
                    }
                    $sub_posts[] = get_term($sub_posts_id);
                    $i++;
                  }
                }
                $count = count($sub_posts);

            ?>
                <div class="w-dyn-list" udy-collection="accessory-category">
                  <?php if ( $count > 0 ) : ?><div role="list" class="accessory-categs w-dyn-items">
                    <?php foreach ($sub_posts as $term) : ?><div role="listitem" class="w-dyn-item">
                      <div class="pill-tag"><?php echo $term->name; ?></div>
                    </div><?php endforeach ?>
                  </div>
                  <?php else : ?><div class="w-dyn-empty">
                    <div>No items found.</div>
                  </div><?php endif; ?>
                </div>
 