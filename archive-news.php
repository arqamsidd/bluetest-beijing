<?php
/**
 * News CPT archive - /news
 *
 * Renders the Webflow "News" landing design (template-parts/content/page-newss.php)
 * once, instead of the original Udesly stub which did wp_redirect('/').
 * The design is self-contained: its dynamic lists come from template-parts/query/* parts,
 * so it does not depend on the main archive loop / post data.
 */

$args = [
    'wfPage' => '6968e38da023f68677ed9f98',
    'body'   => '',
    'head'   => 'head/page-newss',
];

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-newss');
}

get_header('', $args);

udesly_get_content_template('page-newss');

$args = [
    'footer' => 'footer/page-newss',
];

if (function_exists('udesly_output_frontend_editor_data')) {
    udesly_output_frontend_editor_data('page-newss');
}

get_footer('', $args);
