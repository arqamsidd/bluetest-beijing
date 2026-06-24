<?php


$args = [
    'wfPage' => '698502c1460ace425994d30b',
    'body' => '',
    'head' => 'head/page-telecommunication',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-telecommunication');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-telecommunication' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-telecommunication');
}

get_footer('', $args);
