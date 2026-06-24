<?php


$args = [
    'wfPage' => '697a120f73986cf3b7228c79',
    'body' => '',
    'head' => 'head/taxonomy-accessory',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('taxonomy-accessory');
}
     
get_header('', $args);

udesly_get_content_template( 'taxonomy-accessory' );

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('taxonomy-accessory');
}

get_footer('', $args);
