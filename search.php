<?php


$args = [
    'wfPage' => '6969aaa21401b4035517f7eb',
    'body' => '',
    'head' => 'head/search',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('search');
}
     
get_header('', $args);

udesly_get_content_template( 'search' );

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('search');
}

get_footer('', $args);
