<?php


$args = [
    'wfPage' => '6969ae0a029af9bfa47d98fb',
    'body' => '',
    'head' => 'head/page-about-us',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-about-us');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-about-us' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-about-us');
}

get_footer('', $args);
