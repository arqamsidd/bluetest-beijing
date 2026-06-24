<?php
/**
 * Technology CPT archive - /technology
 *
 * Renders the Webflow "Technology" landing design (template-parts/content/page-technologyy.php)
 * once, instead of the original Udesly stub which did wp_redirect('/').
 * The design is self-contained: its dynamic lists come from template-parts/query/* parts,
 * so it does not depend on the main archive loop / post data.
 */

$args = [
    'wfPage' => '6969514e9fe7e572d82e2639',
    'body'   => '',
    'head'   => 'head/page-technologyy',
];

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-technologyy');
}

get_header('', $args);

udesly_get_content_template('page-technologyy');

$args = [
    'footer' => 'footer/page-technologyy',
];

if (function_exists('udesly_output_frontend_editor_data')) {
    udesly_output_frontend_editor_data('page-technologyy');
}

get_footer('', $args);
