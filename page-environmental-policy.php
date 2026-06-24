<?php


$args = [
    'wfPage' => '69851737053d0a8a43fefc88',
    'body' => '',
    'head' => 'head/page-environmental-policy',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-environmental-policy');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-environmental-policy' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-environmental-policy');
}

get_footer('', $args);
