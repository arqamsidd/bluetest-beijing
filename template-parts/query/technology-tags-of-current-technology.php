<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php

            if (function_exists('udesly_set_frontend_editor_data') && wp_doing_ajax()) {
              udesly_set_frontend_editor_data('page-technologyy');
          }

                global $post;
                $sub_posts_ids = get_the_terms( $post->ID, "technology-tag");
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
                <div class="w-dyn-list" udy-collection="technology-tag">
                      <?php if ( $count > 0 ) : ?><div role="list" class="db-tags-loop w-dyn-items">
                        <?php foreach ($sub_posts as $term) : ?><div role="listitem" class="w-dyn-item">
                          <div fs-list-field="tag" class="db-tag"><?php echo $term->name; ?></div>
                        </div><?php endforeach ?>
                      </div><?php endif ?>
                    </div>
 