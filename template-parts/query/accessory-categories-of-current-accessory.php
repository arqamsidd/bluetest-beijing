<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php
            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('page-accessories');
          }

                // Accessories are TAXONOMY TERMS, not posts. In the listing each card is a different
                // accessory term, passed in via get_template_part(..., ['term' => $term]). The old code
                // read udesly_get_custom_post_field($post->ID, ...) which is meaningless in a term loop,
                // so no category chips rendered (and the client-side category filter matched nothing).
                $term_id = isset($args['term'])
                  ? (is_object($args['term']) ? $args['term']->term_id : $args['term'])
                  : get_queried_object_id();
                $sub_posts_ids = udesly_get_custom_term_field( $term_id, "accessory-category", "ItemRefSet" );
                $sub_posts = [];
                $limit = 100;
                $i = 1;
                if (is_array($sub_posts_ids)) {
                  foreach ($sub_posts_ids as $sub_posts_id) {
                    if ($i > $limit) {
                      break;
                    }
                    $sub_term = get_term($sub_posts_id);
                    if ($sub_term && !is_wp_error($sub_term)) {
                      $sub_posts[] = $sub_term;
                    }
                    $i++;
                  }
                }
                $count = count($sub_posts);

            ?>
                <div class="w-dyn-list" udy-collection="accessory-category">
                        <?php if ( $count > 0 ) : ?><div role="list" class="accessory-categ w-dyn-items">
                          <?php foreach ($sub_posts as $cat_term) : ?><div role="listitem" class="w-dyn-item">
                            <div fs-list-field="category" class="pill-tag"><?php echo esc_html($cat_term->name); ?></div>
                          </div><?php endforeach ?>
                        </div><?php endif ?>
                      </div>
