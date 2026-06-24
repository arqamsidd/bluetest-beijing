<?php


$args = [
    'wfPage' => '697e7e8a2c887be8a40b3124',
    'body' => '',
    'head' => 'head/page-temp',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-temp');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-temp' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-temp');
}

get_footer('', $args);
