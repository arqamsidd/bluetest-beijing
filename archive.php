<?php


$args = [
    'wfPage' => '695d8a103a0ee4e2a74a0617',
    'body' => '',
    'head' => 'head/front-page',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('front-page');
}
     
get_header('', $args);

udesly_get_content_template( 'front-page' );

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('front-page');
}

get_footer('', $args);
