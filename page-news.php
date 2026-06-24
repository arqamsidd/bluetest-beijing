<?php


$args = [
    'wfPage' => '6968e38da023f68677ed9f98',
    'body' => '',
    'head' => 'head/page-newss',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-newss');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-newss' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/page-newss',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-newss');
}

get_footer('', $args);
