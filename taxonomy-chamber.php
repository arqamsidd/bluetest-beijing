<?php


$args = [
    'wfPage' => '69716b58abeff995018225a1',
    'body' => '',
    'head' => 'head/taxonomy-chamber',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('taxonomy-chamber');
}
     
get_header('', $args);

udesly_get_content_template( 'taxonomy-chamber' );

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('taxonomy-chamber');
}

get_footer('', $args);
