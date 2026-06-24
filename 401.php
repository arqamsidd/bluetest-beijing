<?php


$args = [
    'wfPage' => '695d8a103a0ee4e2a74a0618',
    'body' => '',
    'head' => 'head/401',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('401');
}
     
get_header('', $args);

udesly_get_content_template( '401' );

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('401');
}

get_footer('', $args);
