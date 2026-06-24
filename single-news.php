<?php


$args = [
    'wfPage' => '6979a5f33a9b8c69d5a9a1a1',
    'body' => '',
    'head' => 'head/single-news',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('single-news');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'single-news' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('single-news');
}

get_footer('', $args);
