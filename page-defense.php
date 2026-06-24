<?php


$args = [
    'wfPage' => '696a157d63f6db5de4fc4304',
    'body' => '',
    'head' => 'head/page-defense',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-defense');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-defense' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-defense');
}

get_footer('', $args);
