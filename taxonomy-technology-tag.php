<?php


$args = [
    'wfPage' => '697a4ed9579f47752d680c61',
    'body' => '',
    'head' => 'head/single-key-feature',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('taxonomy-technology-tag');
}
     
get_header('', $args);

udesly_get_content_template( 'taxonomy-technology-tag' );

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('taxonomy-technology-tag');
}

get_footer('', $args);
