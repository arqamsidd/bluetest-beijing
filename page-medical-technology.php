<?php


$args = [
    'wfPage' => '69830553fd1b9e9cff34cc50',
    'body' => '',
    'head' => 'head/page-medical-technology',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-medical-technology');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-medical-technology' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-medical-technology');
}

get_footer('', $args);
