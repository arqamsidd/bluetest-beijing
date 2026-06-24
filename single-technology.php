<?php


$args = [
    'wfPage' => '697a4e9c37bfe7bbb2f53098',
    'body' => '',
    'head' => 'head/single-technology',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('single-technology');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'single-technology' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/single-technology',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('single-technology');
}

get_footer('', $args);
