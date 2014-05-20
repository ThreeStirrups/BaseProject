<?php

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/../vendor/php/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'my_theme_register_js_composer_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_js_composer_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin pre-packaged with a theme
        array(
            'name'			=> 'CMS Tree Page View', // The plugin name
            'slug'			=> 'cms-tree-page-view', // The plugin slug (typically the folder name)
            'source'			=> 'http://downloads.wordpress.org/plugin/cms-tree-page-view.1.2.27.zip', // The plugin source
            'required'			=> true, // If false, the plugin is only 'recommended' instead of required
            'version'			=> '1.2.27', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'	=> true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'		=> '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'			=> 'WP Sitemap Page', // The plugin name
            'slug'			=> 'wp-sitemap-page', // The plugin slug (typically the folder name)
            'source'			=> 'http://downloads.wordpress.org/plugin/wp-sitemap-page.zip', // The plugin source
            'required'			=> true, // If false, the plugin is only 'recommended' instead of required
            'version'			=> '1.1.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'	=> true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'		=> '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'          => 'Gravity Forms', // The plugin name
            'slug'          => 'gravityforms', // The plugin slug (typically the folder name)
            'source'            => get_template_directory() . '/vendor/plugins/gravityforms_1.8.7.14.zip', // The plugin source
            'required'          => false, // If false, the plugin is only 'recommended' instead of required
            'version'           => '1.8.7.14', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'      => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'          => 'Wordpress SEO by Yoast', // The plugin name
            'slug'          => 'wordpress-seo', // The plugin slug (typically the folder name)
            'source'            => 'http://downloads.wordpress.org/plugin/wordpress-seo.1.5.3.zip', // The plugin source
            'required'          => true, // If false, the plugin is only 'recommended' instead of required
            'version'           => '1.5.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'      => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'          => 'Wordpress Analytics by Yoast', // The plugin name
            'slug'          => 'google-analytics-for-wordpress', // The plugin slug (typically the folder name)
            'source'            => 'http://downloads.wordpress.org/plugin/google-analytics-for-wordpress.4.3.5.zip', // The plugin source
            'required'          => true, // If false, the plugin is only 'recommended' instead of required
            'version'           => '4.3.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'      => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'          => 'Advanced Custom Fields', // The plugin name
            'slug'          => 'advanced-custom-fields', // The plugin slug (typically the folder name)
            'source'            => 'http://downloads.wordpress.org/plugin/advanced-custom-fields.zip', // The plugin source
            'required'          => true, // If false, the plugin is only 'recommended' instead of required
            'version'           => '4.3.8', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'      => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'          => 'Advanced Custom Fields - Repeater', // The plugin name
            'slug'          => 'acf-repeater', // The plugin slug (typically the folder name)
            'source'            => get_template_directory() . '/vendor/plugins/acf-repeater.zip', // The plugin source
            'required'          => true, // If false, the plugin is only 'recommended' instead of required
            'version'           => '1.1.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'      => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'          => 'Advanced Custom Fields - Options Page', // The plugin name
            'slug'          => 'acf-options-page', // The plugin slug (typically the folder name)
            'source'            => get_template_directory() . '/vendor/plugins/acf-options-page.zip', // The plugin source
            'required'          => true, // If false, the plugin is only 'recommended' instead of required
            'version'           => '1.2.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'      => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'          => 'Advanced Custom Fields - Gallery', // The plugin name
            'slug'          => 'acf-gallery', // The plugin slug (typically the folder name)
            'source'            => get_template_directory() . '/vendor/plugins/acf-gallery.zip', // The plugin source
            'required'          => false, // If false, the plugin is only 'recommended' instead of required
            'version'           => '1.1.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'      => '', // If set, overrides default API URL and points to an external URL
        )
    );

    // Change this to your theme text domain, used for internationalising strings
    $theme_text_domain = 'tgmpa';

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'domain'		=> $theme_text_domain, // Text domain - likely want to be the same as your theme.
        'default_path'		=> '', // Default absolute path to pre-packaged plugins
        'parent_menu_slug'	=> 'themes.php', // Default parent menu slug
        'parent_url_slug'	=> 'themes.php', // Default parent URL slug
        'menu'			=> 'install-required-plugins', // Menu slug
        'has_notices'		=> true, // Show admin notices or not
        'is_automatic'		=> false, // Automatically activate plugins after installation or not
        'message'		=> '', // Message to output right before the plugins table
        'strings'		=> array(
            'page_title'			=> __( 'Install Required Plugins', $theme_text_domain ),
            'menu_title'			=> __( 'Install Plugins', $theme_text_domain ),
            'installing'			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
            'oops'				=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
            'notice_can_install_required'	=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'	=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_install'		=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'	=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'	=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate'		=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
            'notice_ask_to_update'		=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update'		=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
            'install_link'			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'				=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
            'plugin_activated'			=> __( 'Plugin activated successfully.', $theme_text_domain ),
            'complete'				=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
            'nag_type'				=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );
    tgmpa( $plugins, $config );
}

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if(function_exists('vc_set_as_theme')) vc_set_as_theme();