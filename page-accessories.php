<?php


$args = [
    'wfPage' => '69690aa6e371b6c3b019ce9f',
    'body' => '',
    'head' => 'head/page-accessories',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-accessories');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-accessories' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-accessories');
}

get_footer('', $args);
