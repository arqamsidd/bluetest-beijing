<?php


$args = [
    'wfPage' => '6969514e9fe7e572d82e2639',
    'body' => '',
    'head' => 'head/page-technologyy',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-technologyy');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-technologyy' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/page-technologyy',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-technologyy');
}

get_footer('', $args);
