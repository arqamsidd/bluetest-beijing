<?php


$args = [
    'wfPage' => '6985027496ccde00b105e729',
    'body' => '',
    'head' => 'head/page-iot-wlan-bluetooth',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-iot-wlan-bluetooth');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-iot-wlan-bluetooth' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-iot-wlan-bluetooth');
}

get_footer('', $args);
