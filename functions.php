<?php

    function udesly_theme_utils_get_term_id_by_slug( $slug, $type ) {
        $term = get_term_by("slug", $slug, $type);

        if ($term) {
            return $term->term_id;
        }
        return 0;
    }

    function udesly_theme_utils_get_post_id_by_slug( $slug, $type ) {
        $post = get_page_by_path($slug, OBJECT, $type);

        if ($post) {
            return $post->ID;
        }
        return 0;
    }

        
    function udesly_bluetest_beijing_setup() {
        
/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
        add_theme_support(
            'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
        );
        
        add_theme_support('woocommerce');

/**
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
        $logo_width  = 300;
        $logo_height = 100;

        add_theme_support(
            'custom-logo',
                array(
                    'height'               => $logo_height,
                    'width'                => $logo_width,
                    'flex-width'           => true,
                    'flex-height'          => true,
                    'unlink-homepage-logo' => true,
                )
        );

        add_theme_support( 'title-tag' );
        
        add_theme_support( 'menus' );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );
        
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
         
        add_theme_support( 'post-thumbnails' ); 
    }
    
    add_action( 'after_setup_theme', 'udesly_bluetest_beijing_setup' );

    add_action( 'admin_notices', function() {
        if (function_exists("udesly_define_post_type")) {
            return;
        }
        $class = 'notice notice-error';
        $message = 'The theme will not work properly without the Udesly App plugin installed!';
        printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
    });
    
    
    
    require_once get_template_directory() . '/tgm-plugin/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'udesly_register_required_plugins' );

function udesly_register_required_plugins() {

    $plugins = array(

        array(
            'name'      => 'Udesly App',
            'slug'      => 'udesly-wp-app',
            'source'    => 'https://github.com/udesly-adapter/udesly-wp-app/archive/master.zip',
        ),
        
    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'udesly',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}




   

    function define_post_types_for_bluetest_beijing() {

        if (!function_exists('udesly_define_post_type')) {
            return;
        }
        
        udesly_define_post_type("client-logo", [
        "labels" => [
            "name" => __("Client Logos"),
            "singular_name" => __("Client Logo"),
        ],
        "rewrite" => [
            "name" => __("client-logo"),
        ],
    ]);
udesly_define_post_type("technology", [
        "labels" => [
            "name" => __("Technologies"),
            "singular_name" => __("Technology"),
        ],
        "rewrite" => [
            "name" => __("technology"),
        ],
    ]);
udesly_define_post_type("career", [
        "labels" => [
            "name" => __("Careers"),
            "singular_name" => __("Career"),
        ],
        "rewrite" => [
            "name" => __("career"),
        ],
    ]);
udesly_define_post_type("employee", [
        "labels" => [
            "name" => __("Employees"),
            "singular_name" => __("Employee"),
        ],
        "rewrite" => [
            "name" => __("employee"),
        ],
    ]);
udesly_define_post_type("accessory-feature", [
        "labels" => [
            "name" => __("Accessory Features"),
            "singular_name" => __("Accessory Feature"),
        ],
        "rewrite" => [
            "name" => __("accessory-feature"),
        ],
    ]);
udesly_define_post_type("news", [
        "labels" => [
            "name" => __("News"),
            "singular_name" => __("News"),
        ],
        "rewrite" => [
            "name" => __("news"),
        ],
    ]);
udesly_define_post_type("key-feature", [
        "labels" => [
            "name" => __("Chamber Key Features"),
            "singular_name" => __("Chamber Key Feature"),
        ],
        "rewrite" => [
            "name" => __("key-feature"),
        ],
    ]);
        
        udesly_define_taxonomy("news-category", [
        "labels" => [
            "name" => __("News Categories"),
            "singular_name" => __("News Category"),
        ],
        "rewrite" => [
            "name" => __("news-category"),
        ],
    ], ["news"]);
udesly_define_taxonomy("technology-tag", [
        "labels" => [
            "name" => __("Technology Tags"),
            "singular_name" => __("Technology Tag"),
        ],
        "rewrite" => [
            "name" => __("technology-tag"),
        ],
    ], ["technology"]);
udesly_define_taxonomy("technology-category", [
        "labels" => [
            "name" => __("Technology Categories"),
            "singular_name" => __("Technology Category"),
        ],
        "rewrite" => [
            "name" => __("technology-category"),
        ],
    ], ["technology"]);
udesly_define_taxonomy("accessory-category", [
        "labels" => [
            "name" => __("Accessory Categories"),
            "singular_name" => __("Accessory Category"),
        ],
        "rewrite" => [
            "name" => __("accessory-category"),
        ],
    ], ["accessory"]);
udesly_define_taxonomy("accessory", [
        "labels" => [
            "name" => __("Accessories"),
            "singular_name" => __("Accessory"),
        ],
        "rewrite" => [
            "name" => __("accessory"),
        ],
    ], ["accessory-feature"]);
udesly_define_taxonomy("chamber", [
        "labels" => [
            "name" => __("Chambers"),
            "singular_name" => __("Chamber"),
        ],
        "rewrite" => [
            "name" => __("chamber"),
        ],
    ], ["key-feature"]);
    
    }


   
    
    add_action('init', 'define_post_types_for_bluetest_beijing');
    
    
    function udesly_referenced_items_contains($array_a, $array_b) {
    
       if (!$array_a || sizeof($array_a) == 0 || !$array_b || sizeof($array_b) == 0) {
         return false;
       }
       
       foreach($array_a as $item) {
         $slug = $item->slug ? $item->slug : $item->post_name;
         if (in_array($slug, $array_b)) {
           return true;
         }
       }
    
       return false;
    }
    
    function udesly_referenced_item_contains($item, $array_b) {
    
       if (!$array_b || sizeof($array_b) == 0) {
         return false;
       }
       
         $slug = $item->slug ? $item->slug : $item->post_name;
         if (in_array($slug, $array_b)) {
           return true;
         }
       
    
       return false;
    }
    

 function udesly_theme_set_images_items_lightbox_script($id, $field, $type) {
	$images = udesly_get_custom_post_field( $id, $field, $type );
	
	$items_to_json = [];
	
	foreach ($images as $imageItem) {
		$image = $imageItem["image"];
		$items_to_json[] = [
			"type" => "image",
			"url" => $image->src,
			"caption" => $image->caption
		];
	}
		
	echo json_encode($items_to_json);
}
      

        
        add_action('acf/init', function() {

            if (!function_exists('udesly_custom_field_text')) {
                return;
            }
        
            udesly_register_custom_fields_for_taxonomy('news-category', [
            udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
        ]);        
udesly_register_custom_fields_for_post_type('client-logo',[
         udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
    ]);        
udesly_register_custom_fields_for_taxonomy('technology-tag', [
            udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
        ]);        
udesly_register_custom_fields_for_taxonomy('technology-category', [
            udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
        ]);        
udesly_register_custom_fields_for_post_type('technology',[
         udesly_custom_field_text([
            "name" => "inner-heading", 
            "label" => "Intro Heading", 
            "instructions" => "", 
            ]),   
udesly_custom_field_rich_text([
            "name" => "main-content", 
            "label" => "Main Content", 
            "instructions" => "", 
            ]),   
udesly_custom_field_text([
            "name" => "download-file-title", 
            "label" => "Download Label", 
            "instructions" => "", 
            ]),   
udesly_custom_field_file([
            "name" => "download-file", 
            "label" => "Download File", 
            "instructions" => "", 
            ]),   
udesly_custom_field_text([
            "name" => "read-more-label", 
            "label" => "Read More Label", 
            "instructions" => "", 
            ]),   
udesly_custom_field_text([
            "name" => "read-more-link", 
            "label" => "Read More Link", 
            "instructions" => "", 
            "type" => "url"
            ]),   
udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
    ]);        
udesly_register_custom_fields_for_post_type('career',[
         udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
    ]);        
udesly_register_custom_fields_for_post_type('employee',[
         udesly_custom_field_text([
            "name" => "designation", 
            "label" => "Designation", 
            "instructions" => "", 
            ]),   
udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
    ]);        
udesly_register_custom_fields_for_taxonomy('accessory-category', [
            udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
        ]);        
udesly_register_custom_fields_for_post_type('accessory-feature',[
         udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
    ]);        
udesly_register_custom_fields_for_taxonomy('accessory', [
            udesly_custom_field_image([
            "name" => "main-image", 
            "label" => "Main Image", 
            "instructions" => "", 
            ]),    
udesly_custom_field_term_relation([
            "name" => "accessory-category", 
            "label" => "Categories", 
            "instructions" => "", 
            "taxonomy" => "accessory-category",
            "field_type" => "multi_select"
            ]),    
udesly_custom_field_set([
            "name" => "gallery", 
            "label" => "Gallery", 
            "instructions" => "",
            ]),    
udesly_custom_field_text([
            "name" => "inner-heading", 
            "label" => "Inner Heading", 
            "instructions" => "", 
            ]),    
udesly_custom_field_rich_text([
            "name" => "description", 
            "label" => "Description", 
            "instructions" => "", 
            ]),    
udesly_custom_field_text([
            "name" => "features-heading", 
            "label" => "Features Heading", 
            "instructions" => "", 
            ]),    
udesly_custom_field_file([
            "name" => "more-info", 
            "label" => "More Info", 
            "instructions" => "", 
            ]),    
udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
        ]);        
udesly_register_custom_fields_for_post_type('news',[
         udesly_custom_field_checkbox([
            "name" => "featured",
            "label" => "Featured",
            "instructions" => ""
            ]),   
udesly_custom_field_date([
            "name" => "date",
            "label" => "Date",
            "instructions" => ""
            ]),   
udesly_custom_field_text([
            "name" => "intro-line", 
            "label" => "Intro Line", 
            "instructions" => "", 
            ]),   
udesly_custom_field_text([
            "name" => "download-label", 
            "label" => "Download Label", 
            "instructions" => "", 
            ]),   
udesly_custom_field_file([
            "name" => "download-file", 
            "label" => "Download File", 
            "instructions" => "", 
            ]),   
udesly_custom_field_text([
            "name" => "read-more-label", 
            "label" => "Read More Label", 
            "instructions" => "", 
            ]),   
udesly_custom_field_text([
            "name" => "read-more-link", 
            "label" => "Read More Link", 
            "instructions" => "", 
            "type" => "url"
            ]),   
udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
    ]);        
udesly_register_custom_fields_for_post_type('key-feature',[
         udesly_custom_field_text([
            "name" => "feature-name", 
            "label" => "Feature Name", 
            "instructions" => "", 
            ]),   
udesly_custom_field_text([
            "name" => "order", 
            "label" => "Order", 
            "instructions" => "The order of this feature among other features list", 
            "type" => "number",
            ]),   
udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
    ]);        
udesly_register_custom_fields_for_taxonomy('chamber', [
            udesly_custom_field_text([
            "name" => "tagline", 
            "label" => "Tagline", 
            "instructions" => "", 
            ]),    
udesly_custom_field_image([
            "name" => "icon", 
            "label" => "Icon", 
            "instructions" => "", 
            ]),    
udesly_custom_field_image([
            "name" => "hero-picture", 
            "label" => "Featured Image", 
            "instructions" => "", 
            ]),    
udesly_custom_field_image([
            "name" => "hero-image", 
            "label" => "Hero Image", 
            "instructions" => "", 
            ]),    
udesly_custom_field_rich_text([
            "name" => "pill-highlights", 
            "label" => "Pill Highlights", 
            "instructions" => "Use next line for next pill", 
            ]),    
udesly_custom_field_rich_text([
            "name" => "short-description-2", 
            "label" => "Short Description", 
            "instructions" => "", 
            ]),    
udesly_custom_field_text([
            "name" => "body-text-heading", 
            "label" => "Body Text Heading", 
            "instructions" => "", 
            ]),    
udesly_custom_field_rich_text([
            "name" => "body-text", 
            "label" => "Body Text", 
            "instructions" => "", 
            ]),    
udesly_custom_field_set([
            "name" => "product-gallery", 
            "label" => "Product Gallery", 
            "instructions" => "",
            ]),    
udesly_custom_field_text([
            "name" => "key-features-heading", 
            "label" => "Key Features Heading", 
            "instructions" => "", 
            ]),    
udesly_custom_field_file([
            "name" => "datasheet-file", 
            "label" => "Datasheet File", 
            "instructions" => "", 
            ]),    
udesly_custom_field_text([
            "name" => "first-image-text-heading", 
            "label" => "First Image/Text Heading", 
            "instructions" => "", 
            ]),    
udesly_custom_field_rich_text([
            "name" => "first-image-text-content", 
            "label" => "First Image/Text Content", 
            "instructions" => "", 
            ]),    
udesly_custom_field_image([
            "name" => "first-image-text-image", 
            "label" => "First Image/Text Image", 
            "instructions" => "", 
            ]),    
udesly_custom_field_text([
            "name" => "second-image-text-heading", 
            "label" => "Second Image/Text Heading", 
            "instructions" => "", 
            ]),    
udesly_custom_field_rich_text([
            "name" => "second-image-text-content", 
            "label" => "Second Image/Text Content", 
            "instructions" => "", 
            ]),    
udesly_custom_field_image([
            "name" => "second-image-text-image", 
            "label" => "Second Image/Text Image", 
            "instructions" => "", 
            ]),    
udesly_custom_field_text([
            "name" => "chamber-video-embed", 
            "label" => "Chamber Video Embed", 
            "instructions" => "", 
            ]),    
udesly_custom_field_image([
            "name" => "yt-gif", 
            "label" => "YT Gif", 
            "instructions" => "", 
            ]),    
udesly_custom_field_file([
            "name" => "extra-sheets", 
            "label" => "Extra Sheets", 
            "instructions" => "", 
            ]),    
udesly_custom_field_checkbox([
            "name" => "_noSearch",
            "label" => "No Search",
            "instructions" => ""
            ])
        ]);
        
        });
        