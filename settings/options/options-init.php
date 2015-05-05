<?php

/*
 *
 * Require the framework class before doing anything else, so we can use the defined URLs and directories.
 * If you are running on Windows you may have URL problems which can be fixed by defining the framework url first.
 *
 */
//define('Redux_OPTIONS_URL', site_url('path the options folder'));
if(!class_exists('Redux_Options')){
    require_once(dirname(__FILE__) . '/defaults.php');
}

/*
 *
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 *
 * NOTE: the defined constansts for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 *
 */
function add_another_section($sections){
    //$sections = array();
    $sections[] = array(
        'title' => __('A Section added by hook', NECTAR_THEME_NAME),
        'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', NECTAR_THEME_NAME),
		'icon' => 'paper-clip',
		'icon_class' => 'icon-large',
        // Leave this as a blank section, no options just some intro text set above.
        'fields' => array()
    );

    return $sections;
}
//add_filter('redux-opts-sections-twenty_eleven', 'add_another_section');


/*
 * 
 * Custom function for filtering the args array given by a theme, good for child themes to override or add to the args array.
 *
 */
function change_framework_args($args){
    //$args['dev_mode'] = false;
    
    return $args;
}
//add_filter('redux-opts-args-twenty_eleven', 'change_framework_args');


/*
 *
 * Most of your editing will be done in this section.
 *
 * Here you can override default values, uncomment args and change their values.
 * No $args are required, but they can be over ridden if needed.
 *
 */
function setup_framework_options(){
    $args = array();

    // Setting dev mode to true allows you to view the class settings/info in the panel.
    // Default: true
    $args['dev_mode'] = false;

	// Set the icon for the dev mode tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	// If $args['icon_type'] = 'iconfont', this should be the icon name.
	// Default: info-sign
	//$args['dev_mode_icon'] = 'info-sign';

	// Set the class for the dev mode tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['dev_mode_icon_class'] = 'icon-large';

    // If you want to use Google Webfonts, you MUST define the api key.
    //$args['google_api_key'] = 'xxxx';

    // Define the starting tab for the option panel.
    // Default: '0';
    //$args['last_tab'] = '0';

    // Define the option panel stylesheet. Options are 'standard', 'custom', and 'none'
    // If only minor tweaks are needed, set to 'custom' and override the necessary styles through the included custom.css stylesheet.
    // If replacing the stylesheet, set to 'none' and don't forget to enqueue another stylesheet!
    // Default: 'standard'
    //$args['admin_stylesheet'] = 'standard';

    // Add HTML before the form.
    $args['intro_text'] = '';

    // Add content after the form.
    $args['footer_text'] = '';

    // Set footer/credit line.
    //$args['footer_credit'] = __('<p>This text is displayed in the options panel footer across from the WordPress version (where it normally says \'Thank you for creating with WordPress\'). This field accepts all HTML.</p>', NECTAR_THEME_NAME);

    // Setup custom links in the footer for share icons
    /*$args['share_icons']['twitter'] = array(
        'link' => 'https://twitter.com/ThemeNectar',
        'title' => 'Follow ThemeNectar on Twitter!', 
        'img' => Redux_OPTIONS_URL . 'img/social/Twitter.png'
    );*/
    $args['share_icons']['facebook'] = array(
        'link' => 'http://www.facebook.com/pages/ThemeNectar/488077244574702',
        'title' => 'Like ThemeNectar on Facebook!', 
        'img' => Redux_OPTIONS_URL . 'img/social/Facebook.png'
    );

    // Enable the import/export feature.
    // Default: true
    $args['show_import_export'] = false;

	// Set the icon for the import/export tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	// If $args['icon_type'] = 'iconfont', this should be the icon name.
	// Default: refresh
	//$args['import_icon'] = 'refresh';

	// Set the class for the import/export tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['import_icon_class'] = 'icon-large';

    // Set a custom option name. Don't forget to replace spaces with underscores!
    $args['opt_name'] = 'dai';

    // Set a custom menu icon.
    //$args['menu_icon'] = '';

    // Set a custom title for the options page.
    // Default: Options
    $args['menu_title'] = __('Site Options', NECTAR_THEME_NAME);

    // Set a custom page title for the options page.
    // Default: Options
    $args['page_title'] = __('Site Options', NECTAR_THEME_NAME);

    // Set a custom page slug for options page (wp-admin/themes.php?page=***).
    // Default: redux_options
    $args['page_slug'] = 'options';

    // Set a custom page capability.
    // Default: manage_options
    //$args['page_cap'] = 'manage_options';

    // Set the menu type. Set to  "menu" for a top level menu, or "submenu" to add below an existing item.
    // Default: menu
    //$args['page_type'] = 'submenu';

    // Set the parent menu.
    // Default: themes.php
    // A list of available parent menus is available at http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    //$args['page_parent'] = 'options_general.php';

    // Set a custom page location. This allows you to place your menu where you want in the menu order.
    // Must be unique or it will override other items!
    // Default: null
    $args['page_position'] = 54;

    // Set a custom page icon class (used to override the page icon next to heading)
    //$args['page_icon'] = 'icon-themes';

	// Set the icon type. Set to "iconfont" for Font Awesome, or "image" for traditional.
	// Redux no longer ships with standard icons!
	// Default: iconfont
	//$args['icon_type'] = 'image';

    // Disable the panel sections showing as submenu items.
    // Default: true
    //$args['allow_sub_menu'] = false;
        
    // Set ANY custom page help tabs, displayed using the new help tab API. Tabs are shown in order of definition.
    $args['help_tabs'][] = array(
        'id' => 'redux-opts-1',
        'title' => __('Theme Information 1', NECTAR_THEME_NAME),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', NECTAR_THEME_NAME)
    );


    // Set the help sidebar for the options page.                                        
    $args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', NECTAR_THEME_NAME);

    $sections = array();
	

    $sections[] = array(
		'icon' => 'edit',
		'icon_class' => 'icon-large',
        'title' => __('General Settings', NECTAR_THEME_NAME),
        'desc' => __('<p class="description">Welcome to your options panel. You can switch between option groups by using the left-hand tabs.</p>', NECTAR_THEME_NAME),
        'fields' => array(
            array(
                'id' => 'favicon',
                'type' => 'upload',
                'title' => __('Favicon Upload', NECTAR_THEME_NAME), 
                'sub_desc' => __('Upload a 16px x 16px .png or .gif image that will be your favicon.', NECTAR_THEME_NAME),
                'desc' => ''
            ),
            array(
                'id' => 'show-institute',
                'type' => 'checkbox',
                'title' => __('Show Institute in Menu', NECTAR_THEME_NAME), 
                'sub_desc' => __('Toggle whether or not to enable a link to the DAI Institute in the navigation.', NECTAR_THEME_NAME),
                'desc' => '',
                'switch' => true,
                'std' => '0' 
            ),
			array(
                'id' => 'google-analytics',
                'type' => 'textarea',
                'title' => __('Google Analytics', NECTAR_THEME_NAME), 
                'sub_desc' => __('Please enter in your google analytics tracking code here. <br/> Remember to include the <strong>entire script from google</strong>, if you just enter your tracking ID it won\'t work.', NECTAR_THEME_NAME),
                'desc' => __('', NECTAR_THEME_NAME)
            ),
             array(
				'id'=>'custom-css',
				'type' => 'ace_editor',
				'title' => __('Custom CSS Code', NECTAR_THEME_NAME), 
				'subtitle' => __('If you have any custom CSS you would like added to the site, please enter it here.', NECTAR_THEME_NAME),
				'mode' => 'css',
	            'theme' => 'monokai',
				'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
	            'default' => "#header{\nmargin: 0 auto;\n}"
			)
        )
    );
	
	$sections[] = array(
		'icon' => 'map-marker',
		'icon_class' => 'icon-large',
        'title' => __('Contact Info', NECTAR_THEME_NAME),
        'desc' => __('Include your contact information here to be used across the site.', NECTAR_THEME_NAME),
        'fields' => array( 	
       		array(
                'id' => 'address',
                'type' => 'textarea',
                'title' => __('Address', NECTAR_THEME_NAME),
                'sub_desc' => __('Please enter your address as you would like it to be displayed.', NECTAR_THEME_NAME)
            ),
            array(
                'id' => 'phone',
                'type' => 'text',
                'title' => __('Primary Phone Number', NECTAR_THEME_NAME)
            ),
            array(
                'id' => 'phone-2',
                'type' => 'text',
                'title' => __('Secondary Phone Number', NECTAR_THEME_NAME),
            )
        )
    );
	
	$sections[] = array(
		'icon' => 'file-alt',
		'icon_class' => 'icon-large',
        'title' => __('Social Media', NECTAR_THEME_NAME),
        'desc' => __('Enter in your social media locations here and then activate which ones you would like to display in your footer options & header options tabs. <br/><br/> <strong>Remember to include the "http://" in all URLs!</strong>', NECTAR_THEME_NAME),
        'fields' => array(
            array(
                'id' => 'facebook-url', 
                'type' => 'text', 
                'title' => __('Facebook URL', NECTAR_THEME_NAME),
                'sub_desc' => __('Please enter in your Facebook URL.', NECTAR_THEME_NAME),
                'desc' => ''
			),
			array(
                'id' => 'twitter-url', 
                'type' => 'text', 
                'title' => __('Twitter URL', NECTAR_THEME_NAME),
                'sub_desc' => __('Please enter in your Twitter URL.', NECTAR_THEME_NAME),
                'desc' => ''
			),
			array(
                'id' => 'google-plus-url', 
                'type' => 'text', 
                'title' => __('Google+ URL', NECTAR_THEME_NAME),
                'sub_desc' => __('Please enter in your Google+ URL.', NECTAR_THEME_NAME),
                'desc' => ''
			),
			array(
                'id' => 'pinterest-url', 
                'type' => 'text', 
                'title' => __('Pinterest URL', NECTAR_THEME_NAME),
                'sub_desc' => __('Please enter in your Pinterest URL.', NECTAR_THEME_NAME),
                'desc' => ''
			),
			array(
                'id' => 'youtube-url', 
                'type' => 'text', 
                'title' => __('Youtube URL', NECTAR_THEME_NAME),
                'sub_desc' => __('Please enter in your Youtube URL.', NECTAR_THEME_NAME),
                'desc' => ''
			),
			array(
                'id' => 'linkedin-url', 
                'type' => 'text', 
                'title' => __('LinkedIn URL', NECTAR_THEME_NAME),
                'sub_desc' => __('Please enter in your LinkedIn URL.', NECTAR_THEME_NAME),
                'desc' => ''
			),
			array(
                'id' => 'instagram-url', 
                'type' => 'text', 
                'title' => __('Instagram URL', NECTAR_THEME_NAME),
                'sub_desc' => __('Please enter in your Instagram URL.', NECTAR_THEME_NAME),
                'desc' => ''
			),
        )
    );
	
    $tabs = array();

    if (function_exists('wp_get_theme')){
        $theme_data = wp_get_theme();
        $item_uri = $theme_data->get('ThemeURI');
        $description = $theme_data->get('Description');
        $author = $theme_data->get('Author');
        $author_uri = $theme_data->get('AuthorURI');
        $version = $theme_data->get('Version');
        $tags = $theme_data->get('Tags');
    }else{
        $theme_data = wp_get_theme(trailingslashit(get_stylesheet_directory()) . 'style.css');
        $item_uri = $theme_data['URI'];
        $description = $theme_data['Description'];
        $author = $theme_data['Author'];
        $author_uri = $theme_data['AuthorURI'];
        $version = $theme_data['Version'];
        $tags = $theme_data['Tags'];
     }
    
    $item_info = '<div class="redux-opts-section-desc">';
    $item_info .= '<p class="redux-opts-item-data description item-uri">' . __('<strong>Site URL:</strong> ', NECTAR_THEME_NAME) . '<a href="' . $item_uri . '" target="_blank">' . $item_uri . '</a></p>';
    $item_info .= '<p class="redux-opts-item-data description item-author">' . __('<strong>Author:</strong> ', NECTAR_THEME_NAME) . ($author_uri ? '<a href="' . $author_uri . '" target="_blank">' . $author . '</a>' : $author) . '</p>';
    $item_info .= '<p class="redux-opts-item-data description item-version">' . __('<strong>Version:</strong> ', NECTAR_THEME_NAME) . $version . '</p>';
    $item_info .= '</div>';

    $tabs['item_info'] = array(
		'icon' => 'info-sign',
		'icon_class' => 'icon-large',
        'title' => __('Site Information', NECTAR_THEME_NAME),
        'content' => $item_info
    );
    
    if(file_exists(trailingslashit(dirname(__FILE__)) . 'README.html')) {
        $tabs['docs'] = array(
			'icon' => 'book',
			'icon_class' => 'icon-large',
            'title' => __('Documentation', NECTAR_THEME_NAME),
            'content' => nl2br(file_get_contents(trailingslashit(dirname(__FILE__)) . 'README.html'))
        );
    }

    global $Redux_Options;
    $Redux_Options = new Redux_Options($sections, $args, $tabs);

}

add_action('init', 'setup_framework_options', 0);

/*
 * 
 * Custom function for the callback referenced above
 *
 */
function my_custom_field($field, $value) {
    print_r($field);
    print_r($value);
}

/*
 * 
 * Custom function for the callback validation referenced above
 *
 */
function validate_callback_function($field, $value, $existing_value) {
    $error = false;
    $value =  'just testing';
    /*
    do your validation
    
    if(something) {
        $value = $value;
    } elseif(somthing else) {
        $error = true;
        $value = $existing_value;
        $field['msg'] = 'your custom error message';
    }
    */
    
    $return['value'] = $value;
    if($error == true) {
        $return['error'] = $field;
    }
    return $return;
}
