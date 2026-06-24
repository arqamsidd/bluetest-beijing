<?php


$args = [
    'wfPage' => '6983661304798cee73a98538',
    'body' => '',
    'head' => 'head/page-automotive',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-automotive');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-automotive' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-automotive');
}

get_footer('', $args);
