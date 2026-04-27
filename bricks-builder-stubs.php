<?php

namespace Bricks {
    // Exit if accessed directly
    class Admin
    {
        const EDITING_CAP = 'edit_posts';
        public function __construct()
        {
        }
        /**
         * Add meta box: Template type
         *
         * @since 1.0
         */
        public function add_meta_boxes()
        {
        }
        /**
         * Meta box: Template type render
         *
         * @since 1.0
         */
        public function meta_box_template_type($post)
        {
        }
        /**
         * Meta box: Save/delete template type
         *
         * @since 1.0
         */
        public function meta_box_save_post($post_id)
        {
        }
        /**
         * Render dashboard widget
         *
         * @since 1.0
         */
        public function dashboard_widget()
        {
        }
        /**
         * Post custom column
         *
         * @since 1.0
         */
        public function posts_custom_column($column, $post_id)
        {
        }
        /**
         * Add bulk action "Export"
         *
         * @since 1.0
         */
        public function bricks_template_bulk_action_export($actions)
        {
        }
        /**
         * Handle bulk action "Export"
         *
         * @param string $redirect_url Redirect URL.
         * @param string $doaction     Action to run.
         * @param array  $items        Items to run action on.
         *
         * @since 1.0
         */
        public function bricks_template_handle_bulk_action_export($redirect_url, $doaction, $items)
        {
        }
        /**
         * Export templates
         *
         * @param array $template_ids IDs of templates to export.
         *
         * @since 1.0
         */
        public function export_templates($template_ids)
        {
        }
        /**
         * Import templates form
         *
         * @since 1.0
         */
        public function import_templates_form()
        {
        }
        /**
         * Template type filter dropdown
         *
         * @since 1.9.3
         */
        public function template_type_filter_dropdown()
        {
        }
        /**
         * Template type filter query
         *
         * @since 1.9.3
         */
        public function template_type_filter_query($query)
        {
        }
        /**
         * Import global settings
         *
         * @since 1.0
         */
        public function import_global_settings()
        {
        }
        /**
         * Generate and download JSON file with global settings
         *
         * @since 1.0
         */
        public static function export_global_settings()
        {
        }
        /**
         * Save settings in WP dashboard on form 'save' submit
         *
         * @since 1.0
         */
        public function save_settings()
        {
        }
        /**
         * Reset settings in WP dashboard on form 'reset' submit
         *
         * @since 1.0
         */
        public function reset_settings()
        {
        }
        /**
         * Save element manager
         *
         * @since 2.0
         */
        public function save_element_manager()
        {
        }
        /**
         * Get element usage count via AJAX for multiple elements
         *
         * @since 2.0
         */
        public function get_element_usage_count()
        {
        }
        /**
         * Template columns
         *
         * @since 1.0
         */
        public function bricks_template_posts_columns($columns)
        {
        }
        /**
         * Template custom column
         *
         * @since 1.0
         */
        public function bricks_template_posts_custom_column($column, $post_id)
        {
        }
        /**
         * Set default settings
         *
         * @since 1.0
         */
        public static function set_default_settings()
        {
        }
        public function gutenberg_scripts()
        {
        }
        /**
         * Admin scripts and styles
         *
         * @since 1.0
         */
        public function admin_enqueue_scripts($hook)
        {
        }
        /**
         * Admin menu
         *
         * @since 1.0
         */
        public function admin_menu()
        {
        }
        public function admin_screen_getting_started()
        {
        }
        public function admin_screen_settings()
        {
        }
        public function admin_screen_elements()
        {
        }
        public function admin_screen_sidebars()
        {
        }
        public function admin_screen_system_information()
        {
        }
        public function admin_screen_license()
        {
        }
        /**
         * Form submissions admin screen
         *
         * @since 1.9.2
         */
        public function admin_screen_form_submissions()
        {
        }
        /**
         * Admin notice: Show regenerate CSS files notification after Bricks theme update
         *
         * @since 1.3.7
         */
        public static function admin_notice_regenerate_css_files()
        {
        }
        /**
         * Admin notices
         *
         * @since 1.0
         */
        public function admin_notices()
        {
        }
        public static function admin_notice_html($type, $text, $dismissible = true, $extra_classes = '')
        {
        }
        /**
         * Add custom post state: "Bricks"
         *
         * If post has last been saved with Bricks (check post meta value: '_bricks_editor_mode')
         *
         * @param array    $post_states Array of post states.
         * @param \WP_Post $post        Current post object.
         *
         * @since 1.0
         */
        public function add_post_state($post_states, $post)
        {
        }
        /**
         * Add editor body class 'active'
         *
         * @since 1.0
         *
         * @return string
         */
        public function admin_body_class($classes)
        {
        }
        /**
         * Add custom image sizes to WordPress media library in admin area
         *
         * Also used to build dropdown of control 'images' for single image element.
         *
         * @since 1.0
         */
        public function image_size_names_choose($default_sizes)
        {
        }
        /**
         * Make sure 'editor_mode' URL param is not removed from admin URL
         */
        public function admin_url($link)
        {
        }
        /**
         * Save Editor mode based on the admin bar links
         *
         * @see Setup->admin_bar_menu()
         *
         * @since 1.3.7
         */
        public function save_editor_mode()
        {
        }
        /**
         * Builder tab HTML (toggle via builder tab)
         *
         * @since 1.0
         *
         * @return string
         */
        public function builder_tab_html()
        {
        }
        /**
         * "Edit with Bricks" link for post type 'page', 'post' and all other CPTs
         *
         * @since 1.0
         */
        public function row_actions($actions, $post)
        {
        }
        /**
         * Dismiss HTTPS notice
         *
         * @since 1.8.4
         */
        public function dismiss_https_notice()
        {
        }
        /**
         * Delete form submissions table
         *
         * @since 1.9.2
         */
        public function form_submissions_drop_table()
        {
        }
        /**
         * Reset/clear all form submissions table entries (rows)
         *
         * @since 1.9.2
         */
        public function form_submissions_reset_table()
        {
        }
        /**
         * Delete form submissions of form ID
         *
         * @since 1.9.2
         */
        public function form_submissions_delete_form_id()
        {
        }
        /**
         * Show admin notice
         *
         * @param string $message Notice message
         * @param string $type    success|error|warning|info
         * @param string $class   Additional CSS class
         *
         * @since 1.9.1
         */
        public static function show_admin_notice($message, $type = 'success', $class = '')
        {
        }
        /**
         * Dismiss Instagram access token notice
         *
         * @since 1.9.1
         */
        public function dismiss_instagram_access_token_notice()
        {
        }
        /**
         * Reindex query filters
         *
         * @since 1.9.6
         */
        public function reindex_query_filters()
        {
        }
        /**
         * Regenerate code signatures
         *
         * @since 1.9.7
         */
        public function regenerate_code_signatures()
        {
        }
        /**
         * Return query args for code signature regeneration & code review results
         *
         * @see Code review && crawl_and_update_code_signatures below.
         *
         * @since 1.9.7
         */
        public static function get_code_instances_query_args($filter = false)
        {
        }
        /**
         * Update code signatures for all Bricks data & global elemnts
         *
         * @since 1.9.7
         *
         * @param bool $only_regenerate_if_missing If true, only regenerate the signature if it's missing.
         */
        public static function crawl_and_update_code_signatures($only_regenerate_if_missing = false)
        {
        }
        /**
         * Add a code signature to query editor settings.
         *
         * @since 2.3.2
         *
         * @param array $query_settings Query settings.
         * @param bool  $only_regenerate_if_missing If true, only regenerate the signature if it's missing.
         * @param bool  $strip_slashes If true, strip slashes from the query editor code before hashing.
         *
         * @return array
         */
        public static function process_query_settings_for_signature($query_settings = [], $only_regenerate_if_missing = false, $strip_slashes = false)
        {
        }
        /**
         * Return synthetic elements for global queries so code review can reuse the element review UI.
         *
         * @since 2.3.2
         *
         * @return array
         */
        public static function get_global_query_elements_for_code_review()
        {
        }
        /**
         * Process code and svg elements and queryEditors to add a code signature to element settings
         *
         * @since 1.9.7
         *
         * @param array $elements
         * @param bool  $only_regenerate_if_missing If true, only regenerate the signature if it's missing.
         */
        public static function process_elements_for_signature($elements = [], $only_regenerate_if_missing = false, $strip_slashes = false)
        {
        }
        /**
         * Duplicate page or post in WP admin (Bricks or WordPress)
         *
         * @since 1.9.8
         */
        public function bricks_duplicate_content()
        {
        }
        /**
         * Duplicate page or post incl. taxnomy terms (Bricks or WordPress)
         *
         * Handles Bricks data ID duplication as well.
         *
         * @param int $post_id
         * @return int|bool
         * @since 1.9.8
         */
        public static function duplicate_content($post_id = 0)
        {
        }
        /**
         * Determine if duplicate content is allowed for a post.
         *
         * @param int $post_id
         * @return bool
         *
         * @since 1.9.8
         * @since 1.12 Refactored for duplicate content Bricks settings.
         */
        public static function use_duplicate_content($post_id)
        {
        }
        /**
         * Delete template screenshots
         *
         * @since 1.10
         */
        public function delete_template_screenshots()
        {
        }
        /**
         * Manually trigger index job
         *
         * @since 1.10
         */
        public function run_index_job()
        {
        }
        /**
         * Remove all index jobs
         *
         * @since 1.11
         */
        public function remove_all_index_jobs()
        {
        }
        /**
         * System information wp_remote_post test
         *
         * To debug query filter index issue.
         *
         * @since 1.11
         */
        public function system_info_wp_remote_post_test()
        {
        }
        /**
         * Fix filter element database
         *
         * @since 1.12.2
         */
        public function bricks_fix_filter_element_db()
        {
        }
        /**
         * Return elements that need code review
         *
         * @since 2.0
         */
        public static function code_review_items($bricks_data, $code_review, &$code_signature_results)
        {
        }
        /**
         * Add custom column to the WordPress users list (used for account activation status)
         *
         * @since 2.1
         */
        public function add_user_activation_status_column($columns)
        {
        }
        /**
         * Add content to the custom column in the WordPress users list (used for account activation status)
         *
         * @since 2.1
         */
        public function user_activation_status_column_content($content, $column_name, $user_id)
        {
        }
        /**
         * User activation / deactivation / resend activation email actions
         *
         * @since 2.1
         */
        public function bricks_user_activation_action()
        {
        }
    }
    // Exit if accessed directly
    class Ajax
    {
        public function __construct()
        {
        }
        /**
         * Command palette: Get posts for the PopupCommandPalette.vue
         *
         * @since 2.0
         */
        public function command_palette_get_posts()
        {
        }
        /**
         * Check if current endpoint is Bricks AJAX endpoint
         *
         * @param string $action E.g. 'get_template_elements_by_id' or 'form_submit'.
         * @param string $action E.g. 'get_template_elements_by_id' or 'form_submit'.
         *
         * @since 1.11
         *
         * @return boolean
         * @return boolean
         */
        public static function is_current_endpoint($action)
        {
        }
        /**
         * Builder: Generate code signature
         *
         * @since 1.9.7
         */
        public function generate_code_signature()
        {
        }
        /**
         * Decode stringified JSON data
         *
         * @since 1.0
         */
        public static function decode($data, $run_wp_slash = true)
        {
        }
        /**
         * Form element: Regenerate nonce
         *
         * @since 1.9.6
         */
        public function regenerate_form_nonce()
        {
        }
        /**
         *
         * Query Sort/Filter: Regenerate nonce
         *
         * @since 1.11
         */
        public function regenerate_query_nonce()
        {
        }
        /**
         * Verify nonce (AJAX call)
         *
         * wp-admin: 'bricks-nonce-admin'
         * builder:  'bricks-nonce-builder'
         * frontend: 'bricks-nonce' (= default)
         *
         * @return void
         */
        public static function verify_nonce($nonce = 'bricks-nonce')
        {
        }
        /**
         * Verify request: nonce and user access
         *
         * Check for builder in order to not trigger on wp_auth_check
         *
         * @since 1.0
         */
        public static function verify_request($nonce = 'bricks-nonce')
        {
        }
        /**
         * Generate Style Manager CSS file
         *
         * Creates style-manager.min.css (contains color variables, utility classes, and global variables with scale property.
         *
         * @return bool True on success, false on failure
         *
         * @since 2.2
         */
        public static function generate_style_manager_css_file()
        {
        }
        /**
         * Generate color palette CSS file (deprecated - use generate_style_manager_css_file instead)
         *
         * @deprecated 2.2 Use generate_style_manager_css_file() instead
         */
        public static function generate_color_palette_css_file($color_palettes)
        {
        }
        /**
         * Save color palette
         *
         * @since 1.0
         */
        public function save_color_palette()
        {
        }
        /**
         * Save panel width
         *
         * @since 1.0
         */
        public function save_panel_width()
        {
        }
        /**
         * Save builder state 'off' (enabled by default)
         *
         * @since 1.3.2
         */
        public function save_builder_scale_off()
        {
        }
        /**
         * Save builder width locked state (disabled by default)
         *
         * Only apply for bas breakpoint. Allows users on smaller screen not having to set a custom width on every page load.
         *
         * @since 1.3.2
         */
        public function save_builder_width_locked()
        {
        }
        /**
         * Get pages
         *
         * @since 1.0
         */
        public function get_pages()
        {
        }
        /**
         * Create new page
         *
         * @since 1.0
         * @since 2.0: Command palette support
         */
        public function create_new_page()
        {
        }
        /**
         * Duplicate page or post in the builder (Bricks or WordPress)
         *
         * @since 1.9.8
         * @since 2.0: Command palette support
         */
        public function duplicate_content()
        {
        }
        /**
         * Render element HTML from settings
         *
         * AJAX call / REST API call: In-builder (getHTML for PHP-rendered elements)
         *
         * @since 1.0
         */
        public static function render_element($data)
        {
        }
        /**
         * Generate the HTML based on the builder content data (post Id or content)
         *
         * Used to feed Rank Math SEO & Yoast content analysis (@since 1.11)
         *
         * NOTE: This method doesn't generate any styles!
         */
        public function get_html_from_content()
        {
        }
        /**
         * Get template elements by template ID
         *
         * To generate global classes CSS in builder.
         *
         * @since 1.8.2
         */
        public function get_template_elements_by_id()
        {
        }
        /**
         * Query control: Get posts
         *
         * @since 1.0
         */
        public function get_posts()
        {
        }
        /**
         * Get users
         *
         * @since 1.2.2
         *
         * @return void
         */
        public function get_users()
        {
        }
        /**
         * Get terms
         *
         * @since 1.0
         */
        public function get_terms_options()
        {
        }
        /**
         * Render Bricks data for static header/content/footer and query loop preview HTML in builder
         *
         * @since 1.0
         */
        public static function render_data()
        {
        }
        /**
         * Don't check for chnage when creating revision as all that changed is the postmeta
         *
         * @since 1.7
         */
        public function dont_check_for_revision_changes()
        {
        }
        /**
         * Save post
         *
         * @since 1.0
         */
        public function save_post()
        {
        }
        /**
         * Save generated template screenshot
         *
         * @since 1.10
         */
        public function save_template_screenshot()
        {
        }
        /**
         * Sanitize Bricks postmeta
         */
        public function sanitize_bricks_postmeta($meta_value, $meta_key, $object_type)
        {
        }
        /**
         * Sanitize Bricks postmeta page settings
         *
         * @since 1.9.9
         */
        public function sanitize_bricks_postmeta_page_settings($meta_value, $meta_key, $object_type)
        {
        }
        /**
         * Update postmeta: Prevent user without builder access from updating Bricks postmeta
         */
        public function update_bricks_postmeta($check, $object_id, $meta_key, $meta_value, $prev_value)
        {
        }
        /**
         * Create autosave
         *
         * @since 1.0
         */
        public static function create_autosave()
        {
        }
        /**
         * Get bulider URL
         *
         * To reload builder with newly saved postName/postTitle (page settigns)
         *
         * @since 1.0
         */
        public function get_builder_url()
        {
        }
        /**
         * Publish post
         *
         * @since 1.0
         */
        public function publish_post()
        {
        }
        /**
         * Get image metadata
         *
         * @since 1.0
         */
        public function get_image_metadata()
        {
        }
        /**
         * Get Image Id from a custom field
         *
         * @since 1.0
         */
        public function get_image_from_custom_field()
        {
        }
        /**
         * Download image to WordPress media libary (Unsplash)
         *
         * @since 1.0
         */
        public function download_image()
        {
        }
        /**
         * Import paste element images (cross-site)
         *
         * @since 1.12.2
         */
        public function import_images()
        {
        }
        /**
         * Parse content through dynamic data logic
         *
         * @since 1.5.1
         */
        public function get_dynamic_data_preview_content()
        {
        }
        /**
         * Get latest remote templates data in builder (PopupTemplates.vue)
         *
         * @since 1.0
         */
        public function get_remote_templates_data()
        {
        }
        /**
         * Builder: Get "My templates" from db
         *
         * @since 1.4
         */
        public function get_my_templates_data()
        {
        }
        /**
         * Get current user
         *
         * Verify logged-in user when builder is loaded on the frontend.
         *
         * @since 1.5
         */
        public function get_current_user_id()
        {
        }
        /**
         * Delete bricks query loop random seed transient
         *
         * @since 1.7.1
         */
        public function query_loop_delete_random_seed_transient()
        {
        }
        /**
         * Get custom shape divider (SVG) from attachment ID
         *
         * Only allow to select SVG files from the media library for security reasons.
         *
         * @since 1.8.6
         */
        public function get_custom_shape_divider()
        {
        }
        public function restore_global_class()
        {
        }
        /**
         * Delete global classes permanently
         *
         * @since 1.11
         */
        public function delete_global_classes_permanently()
        {
        }
        /**
         * Used in the builder only
         *
         * - Force Query is_looping to true
         * - Force Query loop_object
         * - If the loop_object is WP_Post, setup the post data and save in global $post (Mimic the loop)
         * - Caution: Never restore global $post in this function. Don't use this if unsure.
         *
         * @since 1.12.2
         */
        public static function simulate_bricks_query($loop_settings)
        {
        }
        /**
         * Clean up orphaned elements across site
         *
         * @since 2.0
         */
        public function cleanup_orphaned_elements()
        {
        }
        /**
         * Scan for orphaned elements across site
         *
         * @since 2.0
         */
        public function scan_orphaned_elements()
        {
        }
        /**
         * Get builder data for instant navigation (page-specific data only)
         *
         * @since 2.2
         */
        public function get_partial_builder_data()
        {
        }
        /**
         * Query API
         *
         * @since 2.1
         */
        public function query_api()
        {
        }
    }
    // Exit if accessed directly
    class Api
    {
        const API_NAMESPACE = 'bricks/v1';
        public static $request_data = [];
        // Store request data from the API request (@since 2.2)
        public static $query_element_id = null;
        // Holds the current query element ID during a REST API request (@since 2.1)
        public static $active_templates = [];
        // Holds the current active templates during a REST API request (@since 2.2)
        /**
         * WordPress REST API help docs:
         *
         * https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-custom-endpoints/
         * https://developer.wordpress.org/rest-api/extending-the-rest-api/modifying-responses/
         */
        public function __construct()
        {
        }
        /**
         * Custom REST API endpoints
         */
        public function rest_api_init_custom_endpoints()
        {
        }
        /**
         * Return element HTML retrieved via Fetch API
         *
         * @since 1.5
         */
        public static function render_element($request)
        {
        }
        /**
         * Element render permission check
         *
         * @since 1.5
         */
        public function render_element_permissions_check($request)
        {
        }
        /**
         * Return all templates data in one call (templates, authors, bundles, tags, theme style)
         *
         * @param  array $data
         * @return array
         *
         * @since 1.0
         */
        public function get_templates_data($data)
        {
        }
        /**
         * Return templates array OR specific template by array index
         *
         * @since 1.0
         *
         * @param  array $data
         *
         * @return array
         */
        public function get_templates($data)
        {
        }
        /**
         * Get API endpoint
         *
         * Use /api to get Bricks Community Templates
         * Default: Use /wp-json (= default WP REST API prefix)
         *
         * @param string $endpoint API endpoint.
         * @param string $base_url Base URL.
         *
         * @since 1.0
         *
         * @return string
         */
        public static function get_endpoint($endpoint = 'get-templates', $base_url = BRICKS_REMOTE_URL)
        {
        }
        /**
         * Get the Bricks REST API url
         *
         * @since 1.5
         *
         * @return string
         */
        public static function get_rest_api_url()
        {
        }
        /**
         * Check if current endpoint is Bricks API endpoint
         *
         * @param string $endpoint E.g. 'render_element' or 'load_query_page' for our infinite scroll.
         *
         * @since 1.8.1
         *
         * @return bool
         */
        public static function is_current_endpoint($endpoint)
        {
        }
        /**
         * Check if current request is a Bricks REST API request
         *
         * Works reliably during init hook before REST API is fully initialized.
         *
         * @since 2.0
         *
         * @return bool
         */
        public static function is_bricks_rest_request($endpoint = '')
        {
        }
        /**
         * Get template authors
         *
         * @since 1.0
         *
         * @return array
         */
        public static function get_template_authors()
        {
        }
        /**
         * Get template bundles
         *
         * @since 1.0
         *
         * @return array
         */
        public static function get_template_bundles()
        {
        }
        /**
         * Get template tags
         *
         * @since 1.0
         *
         * @return array
         */
        public static function get_template_tags()
        {
        }
        /**
         * Get news feed
         *
         * NOTE: Not in use.
         *
         * @return array
         */
        public static function get_feed()
        {
        }
        /**
         * Query loop: Infinite scroll permissions callback
         *
         * @since 1.5
         */
        public function render_query_page_permissions_check($request)
        {
        }
        /**
         * Query loop: Infinite scroll callback
         * Or AJAX pagination (@since 1.12.2)
         *
         * @since 1.5
         */
        public function render_query_page($request)
        {
        }
        /**
         * AJAX popup callback
         *
         * @since 1.9.4
         */
        public function render_popup_content($request)
        {
        }
        /**
         * Ajax Popup permissions callback
         *
         * @since 1.9.4
         */
        public function render_popup_content_permissions_check($request)
        {
        }
        /**
         * Similar like render_query_page() but for AJAX query result
         *
         * For load more, AJAX pagination, infinite scroll, sort, filter, live search.
         *
         * @since 1.9.6
         */
        public function render_query_result($request)
        {
        }
        /**
         * Query loop: Query result permissions callback
         *
         * @since 1.9.6
         */
        public function render_query_result_permissions_check($request)
        {
        }
        /**
         * Get global classes categorized by their usage across the site
         *
         * @since 1.12
         */
        public function get_global_classes_site_usage()
        {
        }
        /**
         * Permission check for get_global_classes_site_usage endpoint
         */
        public function get_global_classes_site_usage_permissions_check($request)
        {
        }
        public static function replace_query_element_with_component_data($query_element, $query_element_id)
        {
        }
    }
    // Exit if accessed directly
    class Assets_Color_Palettes
    {
        public function __construct()
        {
        }
        /**
         * Color palette database option updated: Generate/delete CSS file
         *
         * @since 1.3.4
         */
        public function updated($mix, $value)
        {
        }
        /**
         * Generate/delete color palettes CSS file
         *
         * @since 1.3.4
         *
         * @return void|string File name
         */
        public static function generate_css_file($color_palettes)
        {
        }
    }
    // Exit if accessed directly
    class Assets_Files
    {
        public function __construct()
        {
        }
        /**
         * Auto-regenerate CSS files after theme update
         *
         * Runs after updating the theme via the one-click updater!
         *
         * NOTE: Not in use
         *
         * @since 1.8.1
         */
        public function __upgrader_process_complete($upgrader, $hook_extra)
        {
        }
        /**
         * Auto-regenerate CSS files after theme update
         *
         * Runs after manual theme upload!
         *
         * @since 1.8.1
         */
        public function upgrader_post_install($response, $hook_extra, $result)
        {
        }
        /**
         * Schedule single WP cron job to regenerate CSS files after theme update (one-click & manual upload)
         *
         * Runs 'bricks_regenerate_css_files' after 1 second to make sure the theme is updated.
         *
         * @since 1.8.1
         */
        public static function schedule_css_file_regeneration()
        {
        }
        /**
         * Regenerate CSS files automatically after theme update
         *
         * @since 1.8.1
         */
        public static function regenerate_css_files()
        {
        }
        /**
         * Regenerate CSS file on every post save
         *
         * Catches Bricks builder & WordPress editor saves (CU #3kavbt2)
         *
         * Example: User updates a custom field like ACF color, etc. in WP editor
         *
         * @since 1.5.7
         */
        public function save_post($post_id, $post)
        {
        }
        /**
         * Post deleted: Delete post CSS file
         *
         * @param int    $post_id The post ID.
         * @param object $post The post object.
         *
         * @since 1.3.4
         */
        public function deleted_post($post_id, $post)
        {
        }
        /**
         * Frontend: Load assets (CSS & JS files) on requested page
         *
         * @since 1.3.4
         */
        public function load_css_files()
        {
        }
        /**
         * Check inside template elements and post content for other CSS file needs
         *
         * @since 1.5.7
         */
        public function load_content_extra_css_files($content_elements = [])
        {
        }
        /**
         * Builder: Generate page-specific CSS file (on builder save)
         *
         * @param int    $post_id Post ID.
         * @param string $content_type header/content/footer (to get correct Bricks post meta data).
         * @param array  $elements Array of elements.
         *
         * @return void|string File name
         *
         * @since 1.3.4
         */
        public static function generate_post_css_file($post_id, $content_type, $elements)
        {
        }
        /**
         * Generate individual CSS file
         *
         * @param string $data The type of CSS file to generate: colorPalettes, themeStyles, individual post ID, etc.
         * @param string $index The index of the CSS file to generate (e.g. 0 = colorPalettes, 1 = themeStyles, etc.).
         * @param bool   $return Whether to return the generated CSS file name or not.
         *
         * Trigger 1: Click on "Regenerate CSS files" button under "CSS loading method - External Files" in Bricks settings.
         * Trigger 2: Edit default breakpoint 'width' (@since 1.5.1)
         * Trigger 3: CLI command: wp bricks regenerate_assets (@since 1.8.1)
         * Trigger 4: Theme update (one-click & manual upload) (@since 1.8.1)
         */
        public static function regenerate_css_file($data = false, $index = false, $return = false)
        {
        }
        /**
         * Return CSS files list to frontend for processing one-by-one via AJAX 'bricks_regenerate_css_file'
         *
         * NOTE: Generate global CSS classes inline (need to know which element(s) a global class is actually set for).
         *
         * @return array
         */
        public static function get_css_files_list($return = false)
        {
        }
    }
    // Exit if accessed directly
    class Assets_Global_Custom_Css
    {
        public function __construct()
        {
        }
        public function added($option_name, $value)
        {
        }
        public function updated($old_value, $value, $option_name)
        {
        }
        public static function generate_css_file($global_settings)
        {
        }
    }
    // Exit if accessed directly
    class Assets_Global_Elements
    {
        public function __construct()
        {
        }
        public function updated($mix, $value)
        {
        }
        public static function generate_css_file($global_elements)
        {
        }
    }
    // Exit if accessed directly
    class Assets_Global_Variables
    {
        public function __construct()
        {
        }
        public function updated($old_value, $value)
        {
        }
        public static function generate_css_file($global_variables)
        {
        }
    }
    // Exit if accessed directly
    class Assets_Theme_Styles
    {
        public function __construct()
        {
        }
        /**
         * Theme Styles updated in database: Regenerate CSS files for every theme style
         *
         * @since 1.3.4
         */
        public function updated($mix, $value)
        {
        }
        /**
         * Generate/delete theme style CSS files
         *
         * Naming convention: theme-style-{theme_style_name}.min.css
         *
         * @since 1.3.4
         *
         * @return array File names
         */
        public static function generate_css_file($theme_styles)
        {
        }
    }
    // Exit if accessed directly
    class Assets
    {
        public static $wp_uploads_dir = '';
        public static $css_dir = '';
        public static $css_url = '';
        public static $google_fonts_urls = [];
        public static $global_colors = [];
        public static $db_colors_generated = false;
        // (@since 2.1)
        public static $inline_css = ['color_vars' => '', 'theme_style' => '', 'global' => '', 'global_classes' => '', 'global_variables' => '', 'page' => '', 'template' => '', 'header' => '', 'content' => '', 'footer' => '', 'popup' => ''];
        public static $elements = [];
        // Set by Assets_Files::generate_post_css_file() method during AJAX
        public static $post_id = 0;
        /**
         * Store inline CSS per css_type (content, theme_style, etc.) & breakpoint
         *
         * key: css_type
         * subkeys: breakpoints
         * sub-subkeys: css selector
         */
        public static $inline_css_breakpoints = [];
        public static $global_classes_elements = [];
        // Item = Individual unique CSS rules - avoid inline style duplicates (@since 1.8)
        public static $unique_inline_css = [];
        // Dynamic data CSS string (e.g. dynamic data 'featured_image' set in single post template, etc.)
        public static $inline_css_dynamic_data = '';
        // Stores the post_id values for all the templates and pages where we need to fetch the page settings values
        public static $page_settings_post_ids = [];
        // Keep track of the elements inside of a loop that were already styled - avoid duplicates (@since 1.5)
        public static $css_looping_elements = [];
        // Keep track the common selectors inside of a loop that were already styled - avoid duplicates (@since 1.8)
        public static $generated_loop_common_selectors = [];
        // Keep track of the current element that is being styled (@since 1.8)
        public static $current_generating_element = null;
        // Keep track of element IDs that will add data-loop-index attribute (@since 1.8)
        public static $loop_index_elements = [];
        public function __construct()
        {
        }
        /**
         * Enqueue Style Manager CSS file
         *
         * Contains color palette variables, utility classes, and global variables with scale property.
         *
         * @since 2.2
         */
        public function enqueue_style_manager_css()
        {
        }
        /**
         * Helper function to set Bricks assets directory & URL
         *
         * In the constructor and on blog switch (multisite).
         *
         * @since 1.9.9
         */
        public static function set_assets_directory()
        {
        }
        /**
         * CSS loading method "External Files": Autoload PHP files
         *
         * @since 1.3.5
         */
        public static function autoload_files()
        {
        }
        /**
         * Enqueue RTL specific scripts
         *
         * @since 2.0
         */
        public function enqueue_rtl_specific_scripts()
        {
        }
        /**
         * Load element setting specific scripts (icon fonts, animations, lightbox, etc.)
         *
         * Run for all CSS loading methods.
         *
         * @since 1.3.4
         */
        public static function enqueue_setting_specific_scripts($settings = [])
        {
        }
        /**
         * Minify CSS string (remove line breaks & tabs)
         *
         * @param string $inline_css CSS string.
         *
         * @since 1.3.4
         */
        public static function minify_css($inline_css)
        {
        }
        /**
         * Reset the duplication tracking arrays
         *
         * These arrays are used to avoid duplicates in inline CSS generation,
         * must reset them before generating new set of CSS for each post/page/template.
         *
         * Currently used in Assets_Files::regenerate_css_files() method (#86c4gzbq8)
         *
         * @since 2.0.1
         */
        public static function reset_duplication_tracking()
        {
        }
        /**
         * Generate inline CSS
         *
         * Bricks Settings: "CSS loading Method" set to "Inline Styles" (= default)
         *
         * - Color Vars
         * - Theme Styles
         * - Global CSS Classes
         * - Global Custom CSS
         * - Page Custom CSS
         * - Header
         * - Content
         * - Footer
         * - Custom Fonts
         * - Template
         *
         * @param int $post_id Post ID.
         *
         * @return string $inline_css
         */
        public static function generate_inline_css($post_id = 0)
        {
        }
        /**
         * Generates list of global palette colors as CSS vars
         *
         * @param array  $color_palettes
         * @param string $mode 'light'|'dark' (@since 2.2)
         *
         * @return string
         */
        public static function generate_inline_css_color_vars($color_palettes, $mode = 'light')
        {
        }
        /**
         * Helper function to generate color code based on color array
         *
         * @param array $color
         *
         * @return string
         */
        public static function generate_css_color($color)
        {
        }
        /**
         * Generate theme style CSS string
         *
         * @return string Inline CSS for theme styles.
         */
        public static function generate_inline_css_theme_style($settings = [])
        {
        }
        /**
         * Get global variables
         *
         * @since 1.9.8
         */
        public static function get_global_variables()
        {
        }
        public static function format_variables_as_css($variables)
        {
        }
        /**
         * Generate global classes CSS string
         *
         * @return string Styles for global classes.
         *
         * @since 1.12: Add key param to generate separate CSS to avoid duplicated styles (no result template)
         */
        public static function generate_global_classes($key = 'global_classes')
        {
        }
        public static function generate_inline_css_page_settings()
        {
        }
        /**
         * Get page settings scripts
         *
         * @param string $script_key customScriptsHeader, customScriptsBodyHeader, customScriptsBodyFooter.
         *
         * @return string
         */
        public static function get_page_settings_scripts($script_key = '')
        {
        }
        /**
         * Load Adobe & Google fonts according to inline CSS (source of truth) and remove loading wrapper
         *
         * @param string $inline_css The CSS to scan for fonts.
         * @param bool   $return_html_links Optional. If true, returns HTML link tags instead of enqueuing. Default false.
         * @return string|void HTML link tags if $return_html_links is true, void otherwise.
         */
        public static function load_webfonts($inline_css, $return_html_links = false)
        {
        }
        /**
         * Loop over repeater items to generate CSS for each item (e.g. Slider 'items')
         *
         * @since 1.3.5
         */
        public static function generate_inline_css_from_repeater($settings, $repeater_items, $css_selector, $repeater_control, $css_type)
        {
        }
        /**
         * Generate CSS string from individual setting
         *
         * @return array key: CSS selector. value: array of CSS rules for this CSS selector.
         *
         * @since 1.3.5
         */
        public static function generate_css_rules_from_setting($settings, $setting_key, $setting_value, $controls, $selector, $css_type, $is_component_root = false)
        {
        }
        /**
         * Generate CSS string
         *
         * @param array  $element Array containing all element data (to retrieve element settings and name).
         * @param array  $controls Array containing all element controls (to retrieve CSS selectors and properties).
         * @param string $css_type String global/page/header/content/footer/mobile.
         *
         * @return string (use & process asset-optimization)
         */
        public static function generate_inline_css_from_element($element, $controls, $css_type)
        {
        }
        /**
         * Normalize element custom CSS to the runtime root selector.
         *
         * @since 2.3.3
         *
         * @param string $custom_css Raw custom CSS.
         * @param string $element_id Element ID.
         * @param array  $settings Element settings.
         *
         * @return string
         */
        public static function normalize_element_custom_css($custom_css, $element_id, $settings)
        {
        }
        /**
         * Generate inline CSS for breakpoints of specific type (content, theme_style, etc.)
         *
         * @since 1.3.5
         *
         * @return string
         */
        public static function generate_inline_css_for_breakpoints($css_type, $desktop_css)
        {
        }
        /**
         * Get @media rule for specific breakpoint
         *
         * @param string $bp The breakpoint key to return the @media rule for.
         *
         * @since 1.7.2
         */
        public static function get_at_media_rule_for_breakpoint($bp)
        {
        }
        /**
         * Generate CSS from elements
         *
         * @param array  $elements Array to loop through all the elements to generate CSS string of entire data.
         * @param string $css_type header, footer, content, etc. (see: $inline_css).
         *
         * @return void
         */
        public static function generate_css_from_elements($elements, $css_type)
        {
        }
        public static function generate_css_from_element($element, $css_type)
        {
        }
        /**
         * Add the attribute [data-query-loop-index] to the current style element
         *
         * Only add HTML attribute once per element ID.
         *
         * @since 1.8
         */
        public static function maybe_add_query_loop_index_attribute_to_element()
        {
        }
        /**
         * Wrap WordPress block styles in cascade layer when enabled
         *
         * NOTE: Not in use, but keeping it here for reference
         */
        public function wrap_block_styles_in_cascade_layer($tag, $handle)
        {
        }
        /**
         * Wrap mediaelement styles in cascade layer
         *
         * @since 2.0
         */
        public function wrap_mediaelement_styles_in_cascade_layer($tag, $handle)
        {
        }
        /**
         * Wrap select2 styles in cascade layer
         *
         * @since 2.0
         */
        public function wrap_select2_styles_in_cascade_layer($tag, $handle)
        {
        }
        /**
         * Wrap WooCommerce photoswipe styles in cascade layer
         *
         * @since 2.0.2
         *
         * @since 2.1: NOTE: Not in use as it causes Woo product gallery lightbox to not work
         */
        public function wrap_photoswipe_styles_in_cascade_layer($tag, $handle)
        {
        }
        /**
         * Maybe run condition check for element
         * NOT IN USE: Remove condition check for now because not all conditions working on External CSS setup. CSS files generated via AJAX call, conditions lie "Current URL", "URL Parameter" would not work properly. (#86c82h81z; @since 2.2)
         * #86c5e06gg; @since 2.2
         */
        public static function maybe_run_condition_check($element)
        {
        }
    }
    // Exit if accessed directly
    /**
     * Responsible for handling the custom redirection logic for authentication-related pages.
     *
     * Login page
     * Registration page
     * Lost password page
     * Reset password page
     *
     * @since 1.9.2
     */
    class Auth_Redirects
    {
        public function __construct()
        {
        }
        /**
         * Main function to handle authentication redirects
         *
         * Depending on the current URL and the action parameter, decides which page to redirect to.
         */
        public function handle_auth_redirects()
        {
        }
        /**
         * Clears the bypass cookie when the user logs in.
         */
        public function clear_bypass_auth_cookie()
        {
        }
        /**
         * Modifies the password reset email to use the custom reset password page URL.
         *
         * This modification only occurs if:
         * 1. A custom reset password page is set
         * 2. The WordPress auth URL behavior is not set to default
         *
         * @since 1.11
         *
         * @param string $message    The current email message.
         * @param string $key        The password reset key.
         * @param string $user_login The username for the user.
         * @param object $user_data  WP_User object.
         *
         * @return string The modified email message.
         */
        public function modify_reset_password_email($message, $key, $user_login, $user_data)
        {
        }
        /**
         * Handle redirect after successful logout
         *
         * @since 1.12.2
         *
         * @param string           $redirect_to           The redirect destination URL.
         * @param string           $requested_redirect_to The requested redirect destination URL.
         * @param WP_User|WP_Error $user                  The logged out user.
         * @return string
         */
        public function handle_logout_redirect($redirect_to, $requested_redirect_to, $user)
        {
        }
        /**
         * Check user activation status (filter)
         *
         * @since 2.1
         */
        public function check_user_activation_status($user, $username, $password)
        {
        }
        /**
         * Send activation email on user registration
         *
         * @since 2.1
         */
        public function on_user_registration($user_id)
        {
        }
    }
    // Exit if accessed directly
    /**
     * Autoloads plugin classes using PSR-4.
     */
    class Autoloader
    {
        /**
         * Handle autoloading of PHP classes
         *
         * @param String $class
         * @return void
         */
        public static function autoload($class)
        {
        }
        public static function load_functions()
        {
        }
        /**
         * Register SPL autoloader
         *
         * @param bool $prepend
         */
        public static function register($prepend = false)
        {
        }
    }
    // Exit if accessed directly
    /**
     * Convert Gutenberg blocks to Bricks elements and vice versa
     */
    class Blocks
    {
        /**
         * In order to convert Gutenberg content into a flat Bricks data, this object needs to be instantiated
         */
        public function __construct()
        {
        }
        /**
         * Load post gutenberg blocks
         *
         * @param int $post_id
         */
        public static function load_blocks($post_id)
        {
        }
        /**
         * Prepare Bricks elements instances that are possible to be converted
         */
        public static function load_elements()
        {
        }
        /**
         * Convert gutenberg post content into bricks data
         *
         * @param int $post_id
         */
        public function convert_blocks_to_bricks($post_id)
        {
        }
        /**
         * Convert Gutenberg block to Bricks element
         *
         * To populate Bricks with existing Gutenberg blocks.
         *
         * Supported blocks (Gutenberg blockName > Bricks element['name']):
         * - core/columns, core/buttons, core/group > container
         * - core/heading       > heading
         * - core/paragraph     > text
         * - core/list          > text
         * - core/buttons       > button
         * - core/image         > image
         * - core/html          > html
         * - core/code          > code
         * - core/preformatted  > code
         * - core/video         > video
         * - core-embed/youtube > video
         * - core-embed/vimeo   > video
         * - core/audio         > audio
         * - core/shortcode     > shortcode
         * - core/search        > search
         */
        public function convert_block_to_element($block, $parent_id = 0)
        {
        }
        /**
         * Add common block settings to Bricks data
         *
         * @param array $settings Bricks element settings.
         * @param array $attributes GT block attributes.
         *
         * @return array
         */
        public function add_common_block_settings($settings, $attributes)
        {
        }
        /**
         * Generate blocks HTML string from Bricks content elements (to store as post_content)
         *
         * @param array $elements Array of all Bricks elements on a section.
         * @param int   $post_id The post ID.
         *
         * @return string
         *
         * @since 1.0
         */
        public static function serialize_bricks_to_blocks($elements, $post_id)
        {
        }
    }
    // Exit if accessed directly
    /**
     * Breakpoints
     *
     * Default behavior: From largest to smallest breakpoints via max-width rules.
     *
     * Mobile-first possible via custom breakpoints:
     * Set a small breakpoint as 'base' to use min-width rules.
     *
     * Custom breakpoints @since 1.5.1
     */
    class Breakpoints
    {
        public static $breakpoints = [];
        public static $base_key = 'desktop';
        public static $base_width = 0;
        public static $is_mobile_first = false;
        public function __construct()
        {
        }
        /**
         * Calculate the breakpoints on init to get the proper breakpoints translations
         *
         * @since 1.5.1
         */
        public static function init_breakpoints()
        {
        }
        /**
         * Automatically regenerate Bricks CSS files after theme update
         *
         * @since 1.5.1
         */
        public function admin_notice_regenerate_bricks_css_files()
        {
        }
        /**
         * Regenerate Bricks CSS files (via Bricks > Settings > General)
         *
         * E.g. frontend.min.css, element & woo CSS files, etc.
         *
         * Manual trigger: "Regenerate CSS files" button
         * Auto trigger: After theme update (compare version number in db against current theme version)
         *
         * @since 1.5.1
         */
        public static function regenerate_bricks_css_files()
        {
        }
        /**
         * Create breakpoint
         *
         * @since 1.5.1
         */
        public function update_breakpoints()
        {
        }
        /**
         * Update @media rules for breakpoint in CSS files
         *
         * When changing default breakpoint width OR default breakpoint reset.
         */
        public static function update_media_rule_width_in_css_files($current_width = 0, $new_width = 0, $default_width = 0)
        {
        }
        /**
         * Default breakpoints
         *
         * - desktop (default base breakpoint)
         * - tablet_portrait
         * - mobile_landscape
         * - mobile_portrait
         *
         * @return Array
         */
        public static function get_default_breakpoints()
        {
        }
        /**
         * Get all breakpoints (default & custom)
         */
        public static function get_breakpoints()
        {
        }
        /**
         * Get breakpoint by key
         */
        public static function get_breakpoint_by($key = 'key', $value = '')
        {
        }
    }
    /**
     * Builder Permissions
     *
     * Manages the available permissions for builder access control
     */
    class Builder_Permissions
    {
        const DEFAULT_CAPABILITIES = ['bricks_full_access' => 'Full access', 'bricks_edit_content' => 'Edit content', 'bricks_no_access' => 'No access'];
        /**
         * Get all permission sections with their corresponding permissions
         */
        public static function get_sections($load_elements = false)
        {
        }
        /**
         * Get all available permissions as a flat array
         */
        public static function get_all_permissions()
        {
        }
        /**
         * Get default permissions for built-in capabilities
         *
         * @param string $capability The capability to get permissions for.
         * @return array Array of permissions for the capability.
         */
        public static function get_default_capability_permissions($capability)
        {
        }
        /**
         * Check if a user has a specific permission
         *
         * @param string $permission The permission to check.
         * @param int    $user_id Optional user ID. Defaults to current user.
         * @return bool True if user has permission, false otherwise.
         */
        public static function user_has_permission($permission, $user_id = null)
        {
        }
        /**
         * Delete a custom capability and its permissions
         *
         * @param string $capability_id The capability to delete.
         * @return bool True if successful, false otherwise.
         */
        public static function delete_capability($capability_id)
        {
        }
        /**
         * Save custom capabilities from settings form
         *
         * @param array $capabilities Array of capabilities with their permissions.
         * @return bool True if successful, false otherwise.
         */
        public static function save_custom_capabilities($capabilities)
        {
        }
        /**
         * Get all permissions the current user has
         *
         * @return array Array of all permissions the current user has.
         */
        public static function get_current_user_permissions()
        {
        }
        /**
         * Check if user has access to any element
         *
         * @param int $user_id Optional user ID. Defaults to current user.
         * @return bool True if user has access to at least one element, false otherwise.
         */
        public static function user_can_add_any_element($user_id = null)
        {
        }
        /**
         * Check if user can modify the number of elements through any means
         * (adding elements, inserting components/templates, copying/pasting, etc.)
         *
         * @param int $user_id Optional user ID. Defaults to current user.
         * @return bool True if user can modify element count, false otherwise.
         */
        public static function user_can_modify_element_count($user_id = null)
        {
        }
        /**
         * Get all capabilities that have a specific permission
         *
         * @param string $permission The permission to check for.
         * @return array Array of capability names that have this permission.
         */
        public static function get_capabilities_by_permission($permission)
        {
        }
    }
    // Exit if accessed directly
    class Builder
    {
        public static $dynamic_data = [];
        // key: DD tag; value: DD tag value (@since 1.7.1)
        public static $html_attributes = [];
        // key: header, main, footer, element ID; value: array with element attributes (@since 1.10)
        public static $elements_html = [];
        // (@since 2.0)
        public static $preview_texts = [];
        // (@since 2.0)
        public static $looping_html = [];
        // (@since 2.0)
        public static $templates_data = [];
        // (@since 2.0)
        public static $looping_dynamic_data = [];
        // (#86c4tzdxq; @since 2.2)
        public static $query_api_cache = [];
        // Cached data for query API results (@since 2.1)
        public function __construct()
        {
        }
        /**
         * Remove 'admin-bar' inline styles
         *
         * Necessary for WordPress 6.4+ as html {margin-top: 32px !important} causes gap in builder.
         *
         * @since 1.9.3
         */
        public function remove_admin_bar_inline_styles()
        {
        }
        /**
         * Don't cache headers or browser history buffer in builder
         *
         * To fix browser back button issue.
         *
         * https://developer.mozilla.org/en-US/docs/Web/HTTP/Caching
         * https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cache-Control
         *
         * "at present any pages using Cache-Control: no-store will not be eligible for bfcache."
         * - https://web.dev/bfcache/#minimize-use-of-cache-control-no-store
         *
         * @since 1.6.2
         */
        public function dont_cache_headers()
        {
        }
        /**
         * Remove admin bar and CSS
         *
         * @since 1.0
         */
        public function show_admin_bar()
        {
        }
        /**
         * Set a different language locale in builder if user has specified a different admin language
         *
         * @since 1.1.2
         */
        public function maybe_set_locale($locale)
        {
        }
        /**
         * Set language direction in builder (panels)
         *
         * Apply only to main window (toolbar & panels). Canvas should use frontend direction.
         *
         * @since 1.5
         */
        public function set_language_direction()
        {
        }
        /**
         * Canvas: Add element x-template render scripts to wp_footer
         */
        public function element_x_templates()
        {
        }
        /**
         * Before site wrapper (opening tag to render builder)
         *
         * @since 1.0
         */
        public function before_site_wrapper()
        {
        }
        /**
         * After site wrapper (closing tag to render builder)
         *
         * @since 1.0
         */
        public function after_site_wrapper()
        {
        }
        /**
         * Enqueue styles and scripts
         *
         * @since 1.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Enqueue inline styles for static areas
         *
         * NOTE: Not in use (handled in StaticArea.vue line198). Keep for future reference.
         *
         * @since 1.8.2 (#862jzhynp)
         */
        public function static_area_styles()
        {
        }
        /**
         * Get WordPress data for use in builder x-template (to reduce AJAX calls)
         *
         * @return array
         *
         * @since 1.0
         */
        public static function get_wordpress_data()
        {
        }
        /**
         * Get all fonts
         *
         * - Adobe fonts (@since 1.7.1)
         * - Custom fonts
         * - Google fonts
         * - Standard fonts
         *
         * @since 1.2.1
         *
         * @return array
         */
        public static function get_fonts()
        {
        }
        /**
         * Get standard (web safe) fonts
         *
         * @since 1.0
         *
         * @return array
         */
        public static function get_standard_fonts()
        {
        }
        /**
         * Get Google fonts
         *
         * Return fonts array with 'family' & 'variants' (to update font-weight for each font in builder)
         *
         * @since 1.0
         *
         * @return array
         */
        public static function get_google_fonts()
        {
        }
        /**
         * Template placeholder image (if importImages set to false)
         *
         * @since 1.0
         */
        public static function get_template_placeholder_image($is_svg = false, $format = 'url')
        {
        }
        /**
         * Template preview data
         *
         * @since 1.0
         */
        public static function get_template_preview_data($post_id)
        {
        }
        /**
         * Post thumbnail data (for use in _background control)
         *
         * @since 1.0
         */
        public function get_post_thumbnail()
        {
        }
        /**
         * Custom TinyMCE settings for builder
         *
         * @since 1.0
         */
        public function tiny_mce_before_init($in)
        {
        }
        /**
         * WordPress editor
         *
         * Without tag button, "Add media" button (use respective elements instead)
         *
         * @since 1.0
         */
        public function get_wp_editor()
        {
        }
        /**
         * Add 'superscript' & 'subscript' button to TinyMCE in builder
         *
         * @since 1.4
         */
        public function add_editor_buttons($buttons)
        {
        }
        /**
         * Builder strings
         *
         * @since 1.0
         */
        public static function i18n()
        {
        }
        /**
         * Custom save messages
         *
         * @since 1.0
         *
         * @return array
         */
        public function save_messages()
        {
        }
        /**
         * Get icon font classes
         *
         * @since 1.0
         *
         * @return array
         */
        public static function get_icon_font_classes()
        {
        }
        /**
         * Based on post_type or template type select the first elements category to show up on builder.
         */
        public static function get_first_elements_category($post_id = 0)
        {
        }
        /**
         * Check permissions for a certain user to access the Bricks builder
         *
         * @since 1.0
         */
        public function template_redirect()
        {
        }
        /**
         * Get page data for builder
         *
         * @since 1.0
         *
         * @return array
         */
        public static function builder_data($post_id)
        {
        }
        /**
         * Get partial page data for builder (lighter version for instant navigation)
         *
         * NOTE: This is a dedicated function to keep things separate
         * But this functionality could be integrated into builder_data with a $partial_load parameter in the future
         *
         * @since 2.2
         *
         * @return array
         */
        public static function partial_builder_data($post_id)
        {
        }
        /**
         * Bricks 2.0 render mode
         *
         * Collect HTML string of every single element for initial fast builder render
         *
         * Use Frontend::render_data() instead of Ajax::render_element so all attributes can be collected successfully as well without execute apply_filters bricks/element/render_attributes
         *
         * @since 2.0 (#86c2z8bmd)
         */
        public static function collect_elements_html($html, $instance)
        {
        }
        /**
         * Bricks 2.0 builder render mode
         *
         * Collect query loop first node HTML string if the query located inside a component.
         *
         * @since 2.0
         */
        public static function collect_looping_html($html, $element_data, $instance)
        {
        }
        /**
         * Collect dynamic data used inside looping
         *
         * @since 2.2 #86c4tzdxq
         */
        public static function collect_looping_dynamic_data($value, $tag, $original_tag, $args, $post, $context, $provider)
        {
        }
        /**
         * Collect query results for API calls
         *
         * Used in PopupQueryApi.vue
         *
         * @since 2.1
         */
        public static function collect_query_api_results($results, $element_id)
        {
        }
        /**
         * Screens all elements and try to convert dynamic data to enhance builder experience
         *
         * @param array $elements
         * @param int   $post_id
         */
        public static function render_dynamic_data_on_elements($elements, $post_id)
        {
        }
        /**
         * On the settings array, if _background exists and is set to image, get the image URL
         * Needed when setting element background image
         *
         * @param array $settings
         * @param int   $post_id
         */
        public static function render_dynamic_data_on_settings($settings, $post_id)
        {
        }
        /**
         * Builder: Force Bricks template to avoid conflicts with other builders (Elementor PRO, etc.)
         */
        public function template_include($template)
        {
        }
        /**
         * Helper function to check if a AJAX or REST API call comes from inside the builder
         *
         * NOTE: Use bricks_is_builder_call() to check if AJAX/REST API call inside the builder
         *
         * @since 1.5.5
         *
         * @return boolean
         */
        public static function is_builder_call()
        {
        }
        /**
         * Return the maximum number of query loop results to display in the builder
         *
         * @since 1.11
         */
        public static function get_query_max_results()
        {
        }
        /**
         * Get query max results info
         *
         * @since 1.11
         */
        public static function get_query_max_results_info()
        {
        }
        /**
         * Check if user enabled through Bricks > Settings > Builder builderCloudflareRocketLoader
         *
         * - Ensure that the request is coming from Cloudflare.
         * - TODO: Will be set as default in a future version of Bricks. (#86c2rdm5a)
         *
         * @since 2.0
         */
        public static function cloudflare_rocket_loader_disabled()
        {
        }
        /**
         * Add data-cfasync="false" to all <script> tags to avoid Cloudflare Rocket Loader
         *
         * @since 2.0
         */
        public function cloudflare_rocket_loader_modify_script_tags()
        {
        }
        /**
         * Returns an array of invalid code signatures elements IDs
         *
         * @param array $data (elements data)
         * @since 2.0
         */
        public static function get_invalid_code_signatures($data)
        {
        }
    }
    // Exit if accessed directly
    /**
     * Builder access 'bricks_full_access' or 'bricks_edit_content'
     *
     * Set per user role under 'Bricks > Settings > Builder access OR by editing a user profile individually.
     *
     * 'bricks_edit_content' capability can't:
     *
     * - Add, clone, delete, save elements/templates
     * - Resize elements (width, height)
     * - Adjust element spacing (padding, margin)
     * - Access custom context menu
     * - Edit any CSS controls (property 'css' check)
     * - Edit any controls under "Style" tab
     * - Edit any controls with 'fullAccess' set to true
     * - Delete revisions
     * - Edit template settings
     * - Edit any page settings except 'SEO' (default panel)
     */
    class Capabilities
    {
        const FULL_ACCESS = 'bricks_full_access';
        const EDIT_CONTENT = 'bricks_edit_content';
        const UPLOAD_SVG = 'bricks_upload_svg';
        const EXECUTE_CODE = 'bricks_execute_code';
        const BYPASS_MAINTENANCE = 'bricks_bypass_maintenance';
        const FORM_SUBMISSION_ACCESS = 'bricks_form_submission_access';
        // @since 1.11
        // Allow to disable for individual user (@since 1.6)
        const NO_ACCESS = 'bricks_no_access';
        const UPLOAD_SVG_OFF = 'bricks_upload_svg_off';
        const EXECUTE_CODE_OFF = 'bricks_execute_code_off';
        const BYPASS_MAINTENANCE_OFF = 'bricks_bypass_maintenance_off';
        const FORM_SUBMISSION_ACCESS_OFF = 'bricks_form_submission_access_off';
        // @since 1.11
        // To run set_user_capabilities only once
        public static $capabilities_set = false;
        // Builder access (default: no access)
        public static $full_access = false;
        public static $edit_content = false;
        public static $no_access = true;
        // Upload SVG & execute code (default: false)
        public static $upload_svg = false;
        public static $execute_code = false;
        // Bypass maintenance mode (default: false)
        public static $bypass_maintenance = false;
        // Default values for the new capability (default: false) (@since 1.11)
        public static $form_submission_access = false;
        public function __construct()
        {
        }
        /**
         * Set capabilities of administrator
         *
         * @since 2.0
         */
        public static function set_administrator_capabilities()
        {
        }
        /**
         * Set capabilities of logged in user
         *
         * - builder access
         * - upload svg
         * - exectute code
         * - bypass maintenance (@since 1.9.4)
         * - form submission access (@since 1.11)
         *
         * @since 1.6
         */
        public static function set_user_capabilities()
        {
        }
        public function manage_users_columns($columns)
        {
        }
        public function manage_users_custom_column($output, $column_name, $user_id)
        {
        }
        /**
         * Check current user capability to use builder (full access OR edit content)
         *
         * @param int $post_id Post ID to check access for.
         * @return boolean
         */
        public static function current_user_can_use_builder($post_id = 0)
        {
        }
        /**
         * Check if current user has full access
         *
         * @deprecated 2.0 in favor of Builder_Permissions::get_current_user_permissions()
         *
         * @return boolean
         */
        public static function current_user_has_full_access()
        {
        }
        /**
         * Check if current user has no access
         *
         * @deprecated 2.0 in favor of Builder_Permissions::user_has_permission()
         *
         * @return boolean
         * @since 1.6
         */
        public static function current_user_has_no_access()
        {
        }
        /**
         * Logged-in user can upload SVGs
         *
         * current_user_can not working on multisite for super admin.
         *
         * @return boolean
         * @since 1.6
         */
        public static function current_user_can_upload_svg()
        {
        }
        /**
         * Logged-in user can execute code
         *
         * current_user_can not working on multisite for super admin.
         *
         * @return boolean
         * @since 1.6
         */
        public static function current_user_can_execute_code()
        {
        }
        /**
         * Logged-in user can bypass maintenance mode
         *
         * current_user_can not working on multisite for super admin.
         *
         * @return boolean
         * @since 1.9.4
         */
        public static function current_user_can_bypass_maintenance_mode()
        {
        }
        /**
         * Logged-in user can access form submissions
         *
         * current_user_can not working on multisite for super admin.
         *
         * @return boolean
         * @since 1.11
         */
        public static function current_user_can_form_submission_access()
        {
        }
        /**
         * Reset user role capabilities for Bricks
         */
        public static function set_defaults()
        {
        }
        /**
         * Capabilities for access to the builder
         *
         * @return array
         */
        public static function builder_caps()
        {
        }
        public static function save_builder_capabilities($capabilities = [])
        {
        }
        public static function save_capabilities($capability, $add_to_roles = [])
        {
        }
        /**
         * Update Bricks-specific user capabilities:
         *
         * - bricks_cap_builder_access
         * - bricks_cap_upload_svg
         * - bricks_cap_execute_code
         * - bricks_cap_bypass_maintenance (@since 1.9.4)
         * - bricks_cap_form_submission_access (@since 1.11)
         */
        public function update_user_profile($user_id)
        {
        }
        public function user_profile($user)
        {
        }
    }
    // Exit if accessed directly
    /**
     * WP CLI commands for Bricks
     *
     * https://wp-cli.org/
     *
     * @since 1.8.1
     */
    class CLI
    {
        public function __construct()
        {
        }
        public function regenerate_assets()
        {
        }
    }
    // Exit if accessed directly
    class Compatibility
    {
        public function __construct()
        {
        }
        public static function register()
        {
        }
        /**
         * Learndash Course Grid Add One: Load assets if shortcode found
         *
         * wp_enqueue_scripts for learndash_course_grid_load_resources() only loads pre 2.0 legacy assets from [ld_course_list]
         *
         * @see class-compatibility.php integration for Elementor
         *
         * @since 1.7
         */
        public function learndash_course_grid_load_assets($course_grids, $post)
        {
        }
        /**
         * LiteSpeed Cache plugin: Ignore Bricks builder
         *
         * Tested with version 3.6.4
         *
         * @return void
         */
        public function litespeed_no_cache()
        {
        }
        /**
         * Weglot: Disable Weglot translations inside the builder
         *
         * @since 1.8.6
         *
         * @return void
         */
        public function weglot_disable_translation()
        {
        }
        /**
         * Check if user has membership access to Bricks content in Helpers::render_with_bricks
         *
         * @since 1.5.4
         */
        public function pmpro_has_membership_access($render)
        {
        }
        /**
         * Yith WooCommerce Product Add-Ons: Dequeue script on builder as it conflicts with Bricks drag & drop
         *
         * @since 1.6.2
         */
        public function yith_wapo_dequeue_script()
        {
        }
    }
    // Exit if accessed directly
    class Components
    {
        public function __construct()
        {
        }
        /**
         * Upgrade components to latest data structure
         *
         * @since 1.12
         */
        public static function upgrade_components($components, $is_import = true)
        {
        }
        public function get_component_instances()
        {
        }
    }
    // Exit if accessed directly
    class Conditions
    {
        public static $groups = [];
        public static $options = [];
        public function __construct()
        {
        }
        public function init()
        {
        }
        /**
         * Set condition groups
         *
         * @return void
         *
         * @since 1.8.4
         */
        public function set_groups()
        {
        }
        /**
         * Set condition options
         *
         * @return void
         *
         * @since 1.8.4
         */
        public function set_options()
        {
        }
        /**
         * Return all controls (builder)
         *
         * @return array
         */
        public static function get_controls_data()
        {
        }
        /**
         * Transform dynamic data tag
         *
         * Add ':value' to ACF true_false tag to get unlocalized value.
         *
         * @since 1.9.9
         */
        public static function maybe_transform_dynamic_tag($dynamic_tag)
        {
        }
        /**
         * Convert boolean-like strings to actual booleans for proper true/false comparisions
         *
         * @since 1.7
         */
        public static function boolean_converter(&$value, &$required)
        {
        }
        /**
         * Check element conditions
         *
         * At least one condition set must be fulfilled for the element to be rendered.
         *
         * Inside a condition all items must evaluate to true.
         *
         * @return boolean true = render element | false = don't render element
         *
         * @since 1.5.4
         */
        public static function check($conditions, $instance, $force_run = false)
        {
        }
    }
    // Exit if accessed directly
    class Converter
    {
        public function __construct()
        {
        }
        /**
         * Convert global elements to components
         */
        public function convert_global_elements()
        {
        }
        /**
         * Get all items that need to run through converter
         *
         * - themeStyles
         * - globalSettings
         * - globalClasses
         * - globalElements
         * - template IDs (+ their page settings)
         * - post IDs (+ their page settings)
         *
         * @since 1.4
         */
        public function get_converter_items()
        {
        }
        /**
         * Run converter
         *
         * @since 1.4 Convert element IDs & class names for 1.4 ('bricks-element-' to 'brxe-')
         */
        public function run_converter()
        {
        }
        public static function convert_container_to_section_block_element($elements = [])
        {
        }
    }
    // Exit if accessed directly
    /**
     * Custom Fonts Upload
     *
     * Font naming convention: custom_font_{font_id}
     *
     * @since 1.0
     */
    class Custom_Fonts
    {
        public static $fonts = false;
        public static $font_face_rules = '';
        public function __construct()
        {
        }
        /**
         * Map meta capabilities for custom fonts
         *
         * @param array  $caps    The user's actual capabilities.
         * @param string $cap     Capability name.
         * @param int    $user_id The user ID.
         * @param array  $args    Adds the context to the cap. Typically the object ID.
         * @return array The user's actual capabilities.
         */
        public function map_meta_cap($caps, $cap, $user_id, $args)
        {
        }
        /**
         * Admin notice to inform users about the new Font Manager
         *
         * @since 2.0
         */
        public function admin_notice_use_font_manager()
        {
        }
        /**
         * Generate custom font-face rules when viewing/editing "Custom fonts" in admin area
         *
         * @since 1.7.2
         */
        public function generate_custom_font_face_rules()
        {
        }
        /**
         * Add inline style for custom @font-face rules
         *
         * @since 1.7.2
         */
        public function add_inline_style_font_face_rules()
        {
        }
        /**
         * Get all custom fonts (in-builder, frontend, and assets generation)
         */
        public static function get_custom_fonts()
        {
        }
        /**
         * Generate custom font-face rules
         *
         * Load all font-faces. Otherwise always forced to select font-family + font-weight.
         *
         * @param int $font_id Custom font ID.
         * @return string Font-face rules for $font_id.
         */
        public static function generate_font_face_rules($font_id = 0)
        {
        }
        /**
         * Preload custom fonts in wp_head
         *
         * Hook priority 1 to ensure it runs before other styles/scripts.
         *
         * @see https://web.dev/articles/codelab-preload-web-fonts
         * @since 2.0
         */
        public function preload_custom_fonts()
        {
        }
        public function admin_enqueue_scripts()
        {
        }
        public function add_meta_boxes()
        {
        }
        /**
         * Enable font file uploads for the following mime types: .TTF, .woff, .woff2
         *
         * Specified in 'get_custom_fonts_mime_types' function below.
         *
         * .EOT only supported in IE (https://caniuse.com/?search=eot)
         *
         * https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types
         */
        public function upload_mimes($mime_types)
        {
        }
        public function render_meta_boxes($post)
        {
        }
        public static function render_font_faces_meta_box($font_face = [], $font_variant = 400)
        {
        }
        public function save_font_faces()
        {
        }
        public function manage_columns($columns)
        {
        }
        public function render_columns($column, $post_id)
        {
        }
        public function post_row_actions($actions, $post)
        {
        }
        public function register_post_type()
        {
        }
        /**
         * Get custom font data for the font editor
         */
        public function get_custom_font_data()
        {
        }
        /**
         * Create a draft custom font post and return the post ID
         *
         * @since 2.0
         */
        public function create_draft_font()
        {
        }
        /**
         * Delete an empty draft custom font post
         *
         * This cleans up unused draft posts when users create but don't use fonts
         *
         * @since 2.0
         */
        public function delete_draft_font()
        {
        }
        /**
         * Download Google Font and convert it to a custom font
         *
         * @since 1.0
         * @throws \Exception When user doesn't have permissions or when font download/processing fails.
         */
        public function download_google_font()
        {
        }
        /**
         * Process uploaded font files and extract metadata.
         *
         * @since 1.0
         * @throws \Exception When user doesn't have permissions or file upload/processing fails.
         */
        public function process_font_files()
        {
        }
        /**
         * Move a custom font to trash
         *
         * @since 2.0
         */
        public function move_font_to_trash()
        {
        }
        /**
         * Get trashed fonts
         *
         * @since 2.0
         */
        public function get_trashed_fonts()
        {
        }
        /**
         * Restore font from trash
         *
         * @since 2.0
         */
        public function restore_font()
        {
        }
        /**
         * Delete font permanently
         *
         * @since 2.0
         */
        public function delete_font_permanently()
        {
        }
    }
    // Exit if accessed directly
    class Database
    {
        public static $posts_per_page = 0;
        public static $all_templates = [];
        // @since 2.0
        public static $active_templates = [];
        public static $default_template_types = [
            'header',
            'footer',
            'archive',
            'search',
            'error',
            'wc_archive',
            'wc_product',
            'wc_cart',
            'wc_cart_empty',
            'wc_form_checkout',
            'wc_form_pay',
            'wc_thankyou',
            'wc_order_receipt',
            // Woo Phase 3
            'wc_account_dashboard',
            'wc_account_orders',
            'wc_account_view_order',
            'wc_account_downloads',
            'wc_account_addresses',
            'wc_account_form_edit_address',
            'wc_account_form_edit_account',
            'wc_account_form_login',
            'wc_account_form_lost_password',
            'wc_account_form_lost_password_confirmation',
            'wc_account_reset_password',
        ];
        public static $header_position = 'top';
        public static $global_data = [];
        public static $page_data = ['preview_or_post_id' => 0, 'language' => ''];
        public static $global_settings = [];
        public static $page_settings = [];
        public static $adobe_fonts = [];
        public static $main_query_id = '';
        // Holds the element ID of the main query element set in set_main_archive_query() @since 1.12.2
        public function __construct()
        {
        }
        /**
         * Initialize active templates
         *
         * @since 1.12
         */
        public static function init_active_templates()
        {
        }
        /**
         * Support autoupdate
         *
         * To always show "Enable/disable auto-updates" link for Bricks.
         * Otherwise, link only shows when an update is available.
         */
        public function wp_prepare_themes_for_js($prepared_themes)
        {
        }
        /**
         * Log every save of empty global classes to debug where it's coming from
         *
         * Triggered in Bricks via:
         *
         * ajax.php:      wp_ajax_bricks_save_post (save post in builder)
         * templates.php: wp_ajax_bricks_import_template (template import)
         * converter.php: wp_ajax_bricks_run_converter (run converter from Bricks settings)
         *
         * @link https://developer.wordpress.org/reference/hooks/update_option_option/
         *
         * @since 1.7
         */
        public function update_option_bricks_global_classes($old_value, $new_value, $option_name)
        {
        }
        /**
         * Customize WP Main Query: Set all query_vars by user for archive/search/error template pages
         * So the pagination will not encounter 404 errors
         *
         * @since 1.9.1
         */
        public function set_main_archive_query($query)
        {
        }
        /**
         * Set active templates for use throughout the theme
         */
        public static function set_active_templates($post_id = 0)
        {
        }
        /**
         * Finds the most suitable template id for a specific context
         *
         * @param array  $template_ids Organized by type.
         * @param string $template_part header, footer or content.
         * @param string $content_type What type of content is expected: content, archive, search, error.
         * @param string $post_id Current post_id or preview_id.
         * @param string $preview_type If template, and populate content is set.
         * @param array  $excluded_ids Array of template IDs to exclude from consideration. (@since 1.11.1)
         */
        public static function find_template_id($template_ids, $template_part, $content_type, $post_id, $preview_type, $excluded_ids = [])
        {
        }
        /**
         * Find all the templates available for a specific context based on the template conditions
         *
         * @param array  $template_ids List of templates per template type.
         * @param string $template_part header, footer or content.
         */
        public static function find_templates($template_ids, $template_part, $post_id, $preview_type)
        {
        }
        /**
         * Get all templates by type
         * - If Object Cache is enabled, it will return the cached templates
         * - If Object Cache is not enabled, it will query the database for all templates
         * - The templates are saved in static variable self::$all_templates so subsequent calls will return the cached templates
         *
         * @return array
         * - Array of template IDs organized by type (header, footer, content, archive)
         * @since 2.0
         */
        public static function get_all_templates_by_type()
        {
        }
        /**
         * Set default header/footer template
         *
         * If no template with matching templateCondition(s) has been set.
         *
         * Can be disabled via admin setting 'defaultTemplatesDisabled'.
         *
         * @since 1.0
         */
        public static function set_default_template($template_type = '')
        {
        }
        /**
         * Helper function to screen a set of template or theme style conditions and check if they apply given the context
         *
         * @param array  $found Holds array of found object IDs (the key is the score).
         * @param string $object_id Could be template_id or the style_id.
         * @param array  $conditions Template or Theme Style conditions.
         * @param int    $post_id Real or Preview).
         * @param string $preview_type The preview type (single, search, archive, etc.).
         *
         * @return array Found conditions array ($score => $object_id)
         */
        public static function screen_conditions($found, $object_id, $conditions, $post_id, $preview_type)
        {
        }
        /**
         * Check if header or footer is disabled (via page settings) for the current context
         *
         * Page setting keys: headerDisabled, footerDisabled
         *
         * @return bool
         * @since 1.5.4
         */
        public static function is_template_disabled($template_type)
        {
        }
        /**
         * Get template elements
         *
         * @since 1.0
         *
         * @param string  $content_type Type of content (header, content, footer).
         * @param boolean $force_post_data Force checking only the specific post data without considering templates.
         */
        public static function get_template_data($content_type, $force_post_data = false)
        {
        }
        /**
         * Get Bricks data by post_id and content_area (header/content/footer)
         *
         * @since 1.0
         */
        public static function get_data($post_id = 0, $content_area = '')
        {
        }
        /**
         * Get the Bricks data key for a specific template type (header/content/footer)
         *
         * @since 1.5.1
         *
         * @param string $content_area
         * @return string
         */
        public static function get_bricks_data_key($content_area = '')
        {
        }
        /**
         * Get global settings from options table
         *
         * @since 1.0
         */
        public static function get_setting($key, $default = false)
        {
        }
        /**
         * Get global queries from the correct site store.
         *
         * @since 2.3.2
         *
         * @return array
         */
        public static function get_global_queries()
        {
        }
        /**
         * Update global queries in the correct site store.
         *
         * @since 2.3.2
         *
         * @param array $global_queries Global queries.
         *
         * @return bool
         */
        public static function update_global_queries($global_queries)
        {
        }
        /**
         * Get global data from options table
         *
         * @since 1.0
         */
        public static function get_global_data()
        {
        }
        /**
         * Default color palette (https://www.materialui.co/colors)
         *
         * Only used if no custom colorPalette is saved in db.
         *
         * @since 1.0
         *
         * @since 2.2: Use 'light' key for colors instead of 'hex'
         *
         * @return array
         */
        public static function default_color_palette()
        {
        }
        /**
         * Set page data needed for AJAX calls (builder)
         *
         * @since 1.3
         */
        public static function set_ajax_page_data()
        {
        }
        /**
         * Get page data from post meta
         *
         * @since 1.0
         */
        public static function set_page_data($post_id = 0)
        {
        }
        /**
         * Return current page type, not considering AJAX calls
         *
         * @param object $object Queried object.
         *
         * @since 1.8
         */
        public static function get_current_page_type($object)
        {
        }
        /**
         * Get Components data with improved performance and nested component support
         * Currently set to a maximum depth of 10 to prevent infinite recursion
         * - If the main query set inside 10 nested components then this logic will not work, practically impossible right?
         *
         * @since 2.0
         * @param array $bricks_data The elements data array
         * @return array The modified elements data with components settings and nested components included
         */
        public static function get_component_data($bricks_data = [], $max_depth = 10)
        {
        }
        /**
         * Recursively retrieve nested template data
         *
         * @param array $bricks_data The elements data array to search for template elements
         *
         * Add 3 more parameters to prvent infinite recursion (#86c99238z; @since 2.3.3)
         * @param array $processed_template_ids Array of already processed template IDs to prevent infinite loops
         * @param int   $depth Current recursion depth
         * @param int   $max_depth Maximum recursion depth to prevent infinite loops (10 for now, can be adjusted as needed)
         *
         * @return array
         *
         * @since 1.9.1
         */
        public static function get_nested_template_data($bricks_data = [], $processed_template_ids = [], $depth = 0, $max_depth = 10)
        {
        }
        /**
         * Get elements sequence in builder
         *
         * This is used to determine the order of elements in the builder.
         *
         * @since 1.9.1
         *
         * @return array (sequence of ids)
         */
        public static function elements_sequence_in_builder($elements)
        {
        }
        /**
         * Get sequence of ids by children
         *
         * @since 1.9.1
         */
        public static function get_ids_by_children($elements, $parent_element)
        {
        }
        /**
         * Get the element by id from elements array
         *
         * @since 1.9.1
         */
        public static function get_element_by_id($element_id, $elements)
        {
        }
        /**
         * Set page data language for WPML or Polylang
         * #86c94gr3q
         *
         * @since 2.3.2
         */
        public static function set_page_data_language($language)
        {
        }
    }
    // Exit if accessed directly
    abstract class Element
    {
        /**
         * Gutenberg block name: 'core/heading', etc.
         *
         * Mapping of Gutenberg block to Bricks element to load block post_content in Bricks and save Bricks data as WordPress post_content.
         */
        public $block = null;
        // Builder
        public $element;
        public $category;
        public $name;
        public $label;
        public $keywords;
        public $icon;
        public $controls;
        public $control_groups;
        public $control_options;
        public $css_selector;
        public $scripts = [];
        public $post_id = 0;
        public $draggable = true;
        // false to prevent dragging over entire element in builder
        public $deprecated = false;
        // true to hide element in panel (editing of existing deprecated element still works)
        public $panel_condition = [];
        // array conditions to show the element in the panel
        // Frontend
        public $id;
        public $cid;
        // Component ID (@since 1.12)
        public $uid;
        // Unique ID for element inside component {id-instanceId} (@since 2.0)
        public $tag = 'div';
        public $attributes = [];
        public $settings;
        public $theme_styles = [];
        public $is_frontend = false;
        /**
         * Custom attributes
         *
         * true: renders custom attributes on element '_root' (= default)
         * false: handle custom attributes in element render_attributes( 'xxx', true ) function (e.g. Nav Menu)
         *
         * @since 1.3
         */
        public $custom_attributes = true;
        /**
         * Nestable elements
         *
         * @since 1.5
         */
        public $nestable = false;
        // true to allow to insert child elements (e.g. Container, Div)
        public $nestable_item;
        // First child of nestable element (Use as blueprint for nestable children & when adding repeater item)
        public $nestable_children;
        // Array of children elements that are added inside nestable element when it's added to the canvas.
        public $nestable_html = '';
        // Nestable HTML with placeholder for element 'children'
        public $vue_component;
        // Set specific Vue component to render element in builder (e.g. 'bricks-nestable' for Section, Container, Div)
        public $original_query = '';
        public $support_masonry = false;
        // @since 1.11.1
        public function __construct($element = null)
        {
        }
        /**
         * Populate element data (when element is requested)
         *
         * Builder: Load all elements
         * Frontend: Load only requested elements
         *
         * @since 1.0
         */
        public function load()
        {
        }
        /**
         * Add element-specific WordPress actions to run in constructor
         *
         * @since 1.0
         */
        public function add_actions()
        {
        }
        /**
         * Add element-specific WordPress filters to run in constructor
         *
         * E.g. 'nav_menu_item_title' filter in Element_Nav_Menu
         *
         * @since 1.0
         */
        public function add_filters()
        {
        }
        /**
         * Set default CSS selector of each control with 'css' property
         *
         * To target specific element child tag (such as 'a' in 'button' etc.)
         * Avoids having to set CSS selector manually for each element control.
         *
         * @since 1.0
         */
        public function set_css_selector($custom_css_selector)
        {
        }
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        /**
         * Return element tag
         *
         * Default: 'div'
         * Next:    $tag set in theme styles
         * Last:    $tag set in element settings
         *
         * Custom tag: Check element 'tag' and 'customTag' settings.
         *
         * @since 1.4
         */
        public function get_tag()
        {
        }
        /**
         * Element-specific control groups
         *
         * @since 1.0
         */
        public function set_control_groups()
        {
        }
        /**
         * Element-specific controls
         *
         * @since 1.0
         */
        public function set_controls()
        {
        }
        /**
         * Control groups used by all elements under 'style' tab
         *
         * @since 1.0
         */
        public function set_common_control_groups()
        {
        }
        /**
         * Controls used by all elements under 'style' tab
         *
         * @since 1.0
         */
        public function set_controls_before()
        {
        }
        /**
         * Controls used by all elements under 'style' tab
         *
         * @since 1.0
         */
        public function set_controls_after()
        {
        }
        /**
         * Builder: Helper function to get HTML tag validation rules
         *
         * @since 1.10.3
         */
        public function get_in_builder_html_tag_validation_rules()
        {
        }
        /**
         * Get default data
         *
         * @since 1.0
         */
        public function get_default_data()
        {
        }
        /**
         * Builder: Element placeholder HTML
         *
         * @since 1.0
         */
        final public function render_element_placeholder($data = [], $type = 'info')
        {
        }
        /**
         * Return element attribute: id
         *
         * @since 1.5
         *
         * @since 1.7.1: Parse dynamic data for _cssId (same for _cssClasses)
         */
        public function get_element_attribute_id()
        {
        }
        /**
         * Set element root attributes (element ID, classes, etc.)
         *
         * @since 1.4
         */
        public function set_root_attributes()
        {
        }
        /**
         * Helper function to get motion parallax settings.
         *
         * @since 2.3
         */
        protected function get_motion_parallax_settings()
        {
        }
        /**
         * Return true if element has 'css' settings
         *
         * @return boolean
         *
         * @since 1.5
         */
        public function has_css_settings($settings)
        {
        }
        /**
         * Convert the global classes ids into the classes names
         *
         * @param array $class_ids The global classes ids.
         *
         * @return array
         */
        public static function get_element_global_classes($class_ids)
        {
        }
        /**
         * Set HTML element attribute + value(s)
         *
         * @param string       $key         Element identifier.
         * @param string       $attribute   Attribute to set value(s) for.
         * @param string|array $value       Set single value (string) or values (array).
         *
         * @since 1.0
         */
        public function set_attribute($key, $attribute, $value = null)
        {
        }
        /**
         * Set link attributes
         *
         * Helper to set attributes for control type 'link'
         *
         * @since 1.0
         *
         * @param string $attribute_key Desired key for set_attribute.
         * @param string $link_settings Element control type 'link' settings.
         */
        public function set_link_attributes($attribute_key, $link_settings)
        {
        }
        /**
         * Remove attribute
         *
         * @param string      $key        Element identifier.
         * @param string      $attribute  Attribute to remove.
         * @param string|null $value Set to remove single value instead of entire attribute.
         *
         * @since 1.0
         */
        public function remove_attribute($key, $attribute, $value = null)
        {
        }
        /**
         * Render HTML attributes for specific element
         *
         * @param string  $key                   Attribute identifier.
         * @param boolean $add_custom_attributes true to get custom atts for elements where we don't add them to the wrapper (Nav Menu).
         *
         * @since 1.0
         */
        public function render_attributes($key, $add_custom_attributes = false)
        {
        }
        /**
         * Calculate element custom attributes based on settings (dynamic data too)
         *
         * @since 1.3
         */
        public function get_custom_attributes($settings = [])
        {
        }
        public static function stringify_attributes($attributes = [])
        {
        }
        /**
         * Enqueue element-specific styles and scripts
         *
         * @since 1.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Element HTML render
         *
         * @since 1.0
         */
        public function render()
        {
        }
        /**
         * Element HTML render in builder via x-template
         *
         * @since 1.0
         */
        public static function render_builder()
        {
        }
        /**
         * Builder: Get nestable item
         *
         * Use as blueprint for nestable children & when adding repeater item.
         *
         * @since 1.5
         */
        public function get_nestable_item()
        {
        }
        /**
         * Builder: Array of child elements added when inserting new nestable element
         *
         * @since 1.5
         */
        public function get_nestable_children()
        {
        }
        /**
         * Frontend: Lazy load (images, videos)
         *
         * Global settings 'disableLazyLoad': Disable lazy load altogether
         * Page settings 'disableLazyLoad': Disable lazy load on this page (@since 1.8.6)
         * Element settings 'disableLazyLoad': Carousel, slider, testimonials (= bricksSwiper) (@since 1.4)
         *
         * @since 1.0
         */
        public function lazy_load()
        {
        }
        /**
         * Enqueue element scripts & styles, set attributes, render
         *
         * @since 1.0
         */
        public function init()
        {
        }
        /**
         * Calculate column width
         */
        public function calc_column_width($columns_count = 1, $max = false)
        {
        }
        /**
         * Column width calculator
         *
         * @param int $columns Number of columns.
         * @param int $count   Total amount of items.
         */
        public function column_width($columns, $count)
        {
        }
        /**
         * Post fields
         *
         * Shared between elements: Carousel, Posts, Products, etc.
         *
         * @since 1.0
         */
        public function get_post_fields()
        {
        }
        /**
         * Post content
         *
         * Shared between elements: Carousel, Posts
         *
         * @since 1.0
         */
        public function get_post_content()
        {
        }
        /**
         * Post overlay
         *
         * Shared between elements: Carousel, Posts
         *
         * @since 1.0
         */
        public function get_post_overlay()
        {
        }
        /**
         * Get swiper controls
         *
         * Elements: Carousel, Slider, Team Members.
         *
         * @since 1.0
         */
        public static function get_swiper_controls()
        {
        }
        /**
         * Render swiper nav: Navigation (arrows) & pagination (dots)
         *
         * Elements: Carousel, Slider, Team Members.
         *
         * @param array $options SwiperJS options.
         *
         * @since 1.4
         */
        public function render_swiper_nav($options = false)
        {
        }
        /**
         * Custom loop builder controls
         *
         * Shared between Container, Template, ...
         *
         * @since 1.3.7
         */
        public function get_loop_builder_controls($group = '')
        {
        }
        /**
         * Render the query loop trail
         *
         * Trail enables infinite scroll
         *
         * @since 1.5
         *
         * @param Query  $query    The query object.
         * @param string $node_key The element key to add the query data attributes (used in the posts element).
         *
         * @return string
         */
        public function render_query_loop_trail($query, $node_key = '')
        {
        }
        /**
         * Get the dynamic data for a specific tag
         *
         * @param string $tag Dynamic data tag.
         * @param string $context text, image, media, link.
         * @param array  $args Needed to set size for avatar image.
         * @param string $post_id Post ID.
         *
         * @return mixed
         */
        public function render_dynamic_data_tag($tag = '', $context = 'text', $args = [], $post_id = 0)
        {
        }
        /**
         * Render dynamic data tags on a string
         *
         * @param string $content
         *
         * @return mixed
         */
        public function render_dynamic_data($content = '')
        {
        }
        /**
         * Set Post ID
         *
         * @param int $post_id
         *
         * @return void
         */
        public function set_post_id($post_id = 0)
        {
        }
        /**
         * Setup query for templates according to 'templatePreviewType'
         *
         * To alter builder template and template preview query. NOT the frontend!
         *
         * 1. Set element $post_id
         * 2. Populate query_args from"Populate content" settings and set it to global $wp_query
         *
         * @param integer $post_id
         *
         * @since 1.0
         */
        public function setup_query($post_id = 0)
        {
        }
        /**
         * Restore custom query after element render()
         *
         * @since 1.0
         */
        public function restore_query()
        {
        }
        /**
         * Render control 'icon' HTML (either font icon 'i' or 'svg' HTML)
         *
         * @param array $icon Contains either 'icon' CSS class or 'svg' URL data.
         * @param array $attributes Additional icon HTML attributes.
         *
         * @see ControlIcon.vue
         * @return string SVG HMTL string
         *
         * @since 1.2.1
         */
        public static function render_icon($icon, $attributes = [])
        {
        }
        /**
         * Add attributes to SVG HTML string
         *
         * @since 1.4
         */
        public static function render_svg($svg = '', $attributes = [])
        {
        }
        /**
         * Change query if we are previewing a CPT archive template (set in-builder via "Populated Content")
         *
         * @since 1.4
         */
        public function maybe_set_preview_query($query_vars, $settings, $element_id)
        {
        }
        /**
         * Is layout element: Section, Container, Block, Div
         *
         * For element control visibility in builder (flex controls, shape divider, etc.)
         *
         * @return boolean
         *
         * @since 1.5
         */
        public function is_layout_element()
        {
        }
        /**
         * Generate breakpoint-specific @media rules for nav menu & mobile menu toggle
         *
         * If not set to 'always' or 'never'
         *
         * @since 1.5.1
         * @since 2.2: Support passing just breakpoint width as parameter, not only full breakpoint array
         */
        public function generate_mobile_menu_inline_css($settings = [], $breakpoint = '')
        {
        }
        /**
         * Return true if any of the element classes contains a match
         *
         * @param array $values_to_check Array of values to check the global class settings for.
         *
         * @see image.php 'popupOverlay', video.php 'overlay', etc.
         *
         * @since 1.7.1
         */
        public function element_classes_have($values_to_check = [])
        {
        }
        /**
         * Enqueue Masonry scripts
         *
         * @since 1.11.1
         */
        public function maybe_enqueue_masonry_scripts()
        {
        }
        /**
         * Support masonry layout
         *
         * @since 1.11.1
         */
        public function support_masonry_element()
        {
        }
        public function element_has_flow_spacing()
        {
        }
        public function enabled_masonry()
        {
        }
        public function maybe_masonry_trail_nodes()
        {
        }
        /**
         * Get component repeater item settings (by repeater item.id)
         *
         * Merge settings of repeater item with component settings.
         *
         * @since 1.12
         */
        public function get_component_repeater_item_settings($settings = [], $control_key = '')
        {
        }
        /**
         * Helper function to get map marker controls
         * - Used in Map element (main & repeater), Map connector element
         * - Not include markerType control as select type control not supported dynamic data (Not useable if using Query loop)
         *
         * @since 2.0
         */
        public function get_map_marker_controls($group = '', $overwrite = [], $is_main = false)
        {
        }
        /**
         * Search criteria controls
         * $type: 'element' | 'template'
         *
         * Used by filter-search element & search results template
         *
         * @since 2.2
         */
        public static function search_criteria_controls($type = 'element')
        {
        }
    }
    // Exit if accessed directly
    class Element_Accordion_Nested extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'accordion-nested';
        public $icon = 'ti-layout-accordion-merged';
        public $scripts = ['bricksAccordion'];
        public $nestable = true;
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function get_nestable_item()
        {
        }
        public function get_nestable_children()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Accordion extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'accordion';
        public $icon = 'ti-layout-accordion-merged';
        public $scripts = ['bricksAccordion'];
        public $css_selector = '.accordion-item';
        public $loop_index = 0;
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function render_repeater_item($accordion, $title_tag, $icon, $icon_expanded)
        {
        }
    }
    // Exit if accessed directly
    class Element_Alert extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'alert';
        public $icon = 'ti-alert';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Animated_Typing extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'animated-typing';
        public $icon = 'ti-more';
        public $scripts = ['bricksAnimatedTyping'];
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Audio extends \Bricks\Element
    {
        public $block = 'core/audio';
        public $category = 'media';
        public $name = 'audio';
        public $icon = 'ti-volume';
        public $scripts = ['bricksAudio'];
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
    }
    // Exit if accessed directly
    class Element_Back_To_Top extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'back-to-top';
        public $icon = 'ti-arrow-up';
        public $nestable = true;
        public $tag = 'button';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function get_nestable_children()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Container extends \Bricks\Element
    {
        public $category = 'layout';
        public $name = 'container';
        public $icon = 'ti-layout-width-default';
        public $vue_component = 'bricks-nestable';
        public $nestable = true;
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        /**
         * Return shape divider HTML
         */
        public static function get_shape_divider_html($settings = [])
        {
        }
        /**
         * Return background video HTML
         */
        public function get_background_video_html($settings)
        {
        }
        public function render()
        {
        }
        /**
         * Modify html for element instance
         * - Wrap nav link in <li> if inside nav items or dropdown content
         * - Priority: 0 to run before other filters that might modify the HTML before this function
         *
         * @since 2.0
         */
        public function maybe_wrap_nav_link($html, $element_instance)
        {
        }
        /**
         * Extract Video poster from background settings
         *
         * @param array $background Background video poster settings
         * @return string Video poster URL
         * @since 2.2
         */
        public function extract_background_video_poster_url($video_poster)
        {
        }
    }
    class Element_Block extends \Bricks\Element_Container
    {
        public $category = 'layout';
        public $name = 'block';
        public $icon = 'ti-layout-width-full';
        public $nestable = true;
        public function get_label()
        {
        }
    }
    // Exit if accessed directly
    class Breadcrumbs extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'breadcrumbs';
        public $icon = 'ti-layout-menu-separated';
        public static $link_format = '<a class="item" href="%s">%s</a>';
        public static $current_span_format = '<span class="item" aria-current="page">%s</span>';
        public static $separator_span_format = '<span class="separator" aria-hidden="true">%s</span>';
        // Added aria-hidden for separator
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Main function to generate the breadcrumbs
         *
         * @return string
         *
         * @since 1.8.1
         */
        public function bricks_breadcrumbs()
        {
        }
        /**
         * Populate breadcrumbs parent links
         *
         * @param int    $parent
         * @param string $type
         * @return array
         *
         * @since 1.8.1
         */
        public function populate_breadcrumbs_parent_links($parent, $type)
        {
        }
    }
    // Exit if accessed directly
    class Element_Button extends \Bricks\Element
    {
        public $block = 'core/button';
        public $category = 'basic';
        public $name = 'button';
        public $icon = 'ti-control-stop';
        public $tag = 'span';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public static function render_builder()
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
    }
    // Exit if accessed directly
    class Custom_Render_Element extends \Bricks\Element
    {
        /**
         * Set Bricks query instance
         *
         * @param Bricks\Query $bricks_query
         */
        public function set_bricks_query($bricks_query)
        {
        }
        /**
         * Start the iteration
         *
         * @see includes/query.php render() method
         */
        public function start_iteration()
        {
        }
        /**
         * Set the loop object for the current iteration.
         *
         * @param object $object
         */
        public function set_loop_object($object)
        {
        }
        /**
         * Move to the next iteration
         */
        public function next_iteration()
        {
        }
        /**
         * End the iteration
         */
        public function end_iteration()
        {
        }
        /**
         * Set loop object type to 'post'
         * Posts element, Carousel element, Products element, Related Posts element are supported post loop only.
         */
        public function set_loop_object_type($object_type, $object, $query_id)
        {
        }
    }
    // Exit if accessed directly
    class Element_Carousel extends \Bricks\Custom_Render_Element
    {
        public $category = 'media';
        public $name = 'carousel';
        public $icon = 'ti-layout-slider-alt';
        public $css_selector = '.swiper-slide';
        public $scripts = ['bricksSwiper'];
        public $draggable = false;
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Code extends \Bricks\Element
    {
        public $block = ['core/code', 'core/preformatted'];
        public $category = 'general';
        public $name = 'code';
        public $icon = 'ion-ios-code';
        public $scripts = ['bricksPrettify'];
        public function enqueue_scripts()
        {
        }
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function get_code_snippet($code, $language)
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
    }
    // Exit if accessed directly
    class Element_Countdown extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'countdown';
        public $icon = 'ti-timer';
        public $css_selector = '.field';
        public $scripts = ['bricksCountdown'];
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Counter extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'counter';
        public $icon = 'ti-dashboard';
        public $scripts = ['bricksCounter'];
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    class Element_Div extends \Bricks\Element_Container
    {
        public $category = 'layout';
        public $name = 'div';
        public $icon = 'ti-layout-width-default-alt';
        public $nestable = true;
        public function get_label()
        {
        }
    }
    // Exit if accessed directly
    class Element_Divider extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'divider';
        public $icon = 'ti-layout-line-solid';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Dropdown extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'dropdown';
        public $icon = 'ti-arrow-circle-down';
        public $scripts = ['bricksSubmenuPosition'];
        public $nestable = true;
        public $tag = 'li';
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function get_nestable_children()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Facebook_Page extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'facebook-page';
        public $icon = 'ti-facebook';
        public $scripts = ['bricksFacebookSDK'];
        public $draggable = false;
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Filter_Element extends \Bricks\Element
    {
        public $category = 'filter';
        public $input_name = '';
        public $filter_type = '';
        public $filtered_source = [];
        public $choices_source = [];
        public $data_source = [];
        public $populated_options = [];
        public $rendered_options = [];
        // Only for filter-checkbox, filter-radio (@since 2.3)
        public $page_filter_value = [];
        public $query_settings = [];
        public $target_query_results_count = 0;
        public function enqueue_scripts()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls_after()
        {
        }
        /**
         * Retrieve the standard controls for filter inputs for frontend
         */
        public function get_common_filter_settings()
        {
        }
        /**
         * Determine whether this input is a filter input
         * Will be overriden by each input if needed
         *
         * @return boolean
         */
        public function is_filter_input()
        {
        }
        /**
         * Normalize filter display mode for checkbox/radio filters.
         *
         * The builder can send an empty string when the select control is cleared, but
         * runtime rendering should still fall back to the default radio/checkbox mode.
         *
         * @since 2.3.3
         *
         * @return string
         */
        public function get_display_mode()
        {
        }
        /**
         * Check if this filter has indexing job in progress
         *
         * @since 1.10
         */
        public function is_indexing()
        {
        }
        public function prepare_sources()
        {
        }
        public function set_data_source()
        {
        }
        public function set_data_source_from_taxonomy()
        {
        }
        /**
         * Similar to set_data_source_from_custom_field, but separate for easier maintenance in the future
         */
        public function set_data_source_from_wp_field()
        {
        }
        public function set_data_source_from_custom_field()
        {
        }
        /**
         * Set options with count
         * DO NOT use this method if no count is needed as it will generate more queries.
         *
         * Used in: filter-checkbox, filter-radio, filter-select
         */
        public function set_options_with_count()
        {
        }
        /**
         * Get populated options
         * Only used for filter-select, filter-radio, filter-checkbox
         *
         * @since 2.0.2
         */
        public function get_populated_options()
        {
        }
        /**
         * For filter-select, filter-radio, filter-checkbox
         *
         * @since 1.11
         */
        public function get_option_text_with_count($option)
        {
        }
        /**
         * For filter-select, filter-radio
         */
        public function setup_sort_options()
        {
        }
        /**
         * For filter-select, filter-radio
         * Note: Not retrieving the per_page options from the query history for now
         *
         * @since 1.12.2
         */
        public function setup_per_page_options()
        {
        }
        public static function get_per_page_options_array($settings = [])
        {
        }
        /**
         * Sort the terms hierarchically
         */
        public static function sort_terms_hierarchically(&$data_source, &$new_source, $parentId = 0)
        {
        }
        /**
         * Now we need to flatten the arrays.
         * If no children, just push to $flattern and set depth to 0
         * If has children, push the childrens to $flattern and set depth to its parent depth + 1 (recursively).
         * The children must be placed under its parent
         * Then save all nested children's value_id to children_ids key of its parent (recursively)
         */
        public static function flatten_terms_hierarchically(&$source, &$flattern, $parentId = 0, $depth = 0)
        {
        }
        /**
         * Some of the flattened terms may have children_ids
         * But we need to merge the children_ids to its parent recursively
         * Not in Beta
         */
        public static function update_children_ids(&$flattened_terms, &$updated_data_source)
        {
        }
        /**
         * Return query filter controls
         *
         * If element support query filters.
         *
         * Only common controls are returned.
         * Each element might add or remove controls.
         *
         * @since 1.9.6
         */
        public function get_filter_controls()
        {
        }
        /**
         * Compares the both values in string format
         *
         * @since 1.12
         */
        public static function is_option_value_matched($option, $value)
        {
        }
        /**
         * Used by Filter Range and Active Filter element
         */
        public static function get_range_formatted_value($value, $settings)
        {
        }
        /**
         * Smart comparison function that handles both numeric and alphanumeric sorting
         *
         * @param string $a First value to compare
         * @param string $b Second value to compare
         * @param string $order Sort order ('asc' or 'desc')
         * @return int -1, 0, or 1 for sorting
         */
        public static function smart_compare($a, $b, $order = 'asc')
        {
        }
        /**
         * Used by Filter Datepicker and Active Filter element to get the date format based on settings
         *
         * @since 2.3
         */
        public static function get_datepicker_format($settings)
        {
        }
        /**
         * Use by filter-checkbox & filter-radio to render Show More / Less button
         *
         * @since 2.3
         */
        public function get_show_more_less_html()
        {
        }
    }
    // Exit if accessed directly
    class Filter_Active_Filters extends \Bricks\Filter_Element
    {
        public $name = 'filter-active-filters';
        public $icon = 'ti-filter';
        public $filter_type = 'active-filters';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Filter_Checkbox extends \Bricks\Filter_Element
    {
        public $name = 'filter-checkbox';
        public $icon = 'ti-check-box';
        public $filter_type = 'checkbox';
        public $rendered_options = [];
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function is_filter_input()
        {
        }
        public function render()
        {
        }
        /**
         * Generate options HTML
         * $this->rendered_options will be set in this function
         *
         * @since 2.3
         */
        public function get_options_html()
        {
        }
    }
    // Exit if accessed directly
    class Filter_DatePicker extends \Bricks\Filter_Element
    {
        public $name = 'filter-datepicker';
        public $icon = 'ti-calendar';
        public $filter_type = 'datepicker';
        public $min_date = null;
        // timestamp
        public $max_date = null;
        // timestamp
        public $css_selector = 'input';
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function is_filter_input()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Filter_Radio extends \Bricks\Filter_Element
    {
        public $name = 'filter-radio';
        public $icon = 'ti-control-record';
        public $filter_type = 'radio';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Generate options HTML
         * $this->rendered_options will be set in this function
         *
         * @since 2.3
         */
        public function get_options_html()
        {
        }
    }
    // Exit if accessed directly
    class Filter_Range extends \Bricks\Filter_Element
    {
        public $name = 'filter-range';
        public $icon = 'ti-arrows-horizontal';
        public $filter_type = 'range';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Filter_Search extends \Bricks\Filter_Element
    {
        public $name = 'filter-search';
        public $icon = 'ti-search';
        public $filter_type = 'search';
        public $css_selector = 'input';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Filter_Select extends \Bricks\Filter_Element
    {
        public $name = 'filter-select';
        public $icon = 'ti-widget-alt';
        public $filter_type = 'select';
        public $scripts = ['bricksChoices'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Filter_Submit extends \Bricks\Filter_Element
    {
        public $name = 'filter-submit';
        public $icon = 'ti-mouse';
        public $filter_type = 'apply';
        public $button_type = 'button';
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Form extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'form';
        public $icon = 'ti-layout-cta-left';
        public $tag = 'form';
        public $scripts = ['bricksForm', 'bricksTinyMCE'];
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Split a text into key-value pairs
         *
         * This function takes a text and splits it into key-value pairs using the colon (:) as the delimiter.
         * If the text contains a colon, it will split the text into two parts: the key and the value.
         * If the text does not contain a colon, it will use the entire text as both the key and the value.
         *
         * @param string $text The text to split.
         * @return array An array containing the key-value pairs.
         *
         * @since 1.10.2
         */
        public function split_text($text)
        {
        }
        /**
         * Generate recaptcha HTML
         *
         * @since 1.5
         */
        public function generate_recaptcha_html()
        {
        }
        /**
         * Generate hCaptcha HTML
         *
         * @since 1.9.2
         */
        public function generate_hcaptcha_html()
        {
        }
        /**
         * Generate Turnstile HTML
         *
         * @since 1.9.2
         */
        public function generate_turnstile_html()
        {
        }
        /**
         * Generate CSS styles for honeypot fields
         *
         * @param array $fields The form fields
         *
         * @since 1.12.2
         */
        public function generate_honeypot_field_styles($fields)
        {
        }
        /**
         * Get taxonomy data for updating post taxonomies
         *
         * @param array $taxonomy_settings The taxonomy settings from the form
         * @param int   $post_id           The post ID to get current terms for
         * @return array An array of taxonomy data including field ID, taxonomy, options, and current term IDs
         *
         * @since 2.2
         */
        public function get_taxonomy_data($taxonomy_settings, $post_id)
        {
        }
    }
    // Exit if accessed directly
    class Element_Heading extends \Bricks\Element
    {
        public $block = 'core/heading';
        public $category = 'basic';
        public $name = 'heading';
        public $icon = 'ti-text';
        public $tag = 'h3';
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        // NOTE: Render separator in ContentEditable.js (@since 1.11)
        public static function render_builder()
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
    }
    // Exit if accessed directly
    class Element_Html extends \Bricks\Element
    {
        public $block = 'core/html';
        public $category = 'general';
        public $name = 'html';
        public $icon = 'ti-html5';
        public $deprecated = true;
        // NOTE Undocumented
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public static function render_builder()
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
    }
    // Exit if accessed directly
    class Element_Icon_Box extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'icon-box';
        public $icon = 'ti-check-box';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public static function render_builder()
        {
        }
    }
    // Exit if accessed directly
    class Element_Icon extends \Bricks\Element
    {
        public $category = 'basic';
        public $name = 'icon';
        public $icon = 'ti-star';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Image_Gallery extends \Bricks\Element
    {
        public $block = 'core/gallery';
        public $category = 'media';
        public $name = 'image-gallery';
        public $icon = 'ti-gallery';
        public $scripts = ['bricksIsotope'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        /**
         * Get responsive load more setting values per breakpoint.
         *
         * @since 2.3
         *
         * @param array  $settings      Element settings.
         * @param string $setting_key   Setting key.
         * @param array  $breakpoints   Available breakpoints.
         * @param string $setting_type  Setting type.
         *
         * @return array
         */
        public function get_responsive_load_more_setting_values($settings, $setting_key, $breakpoints, $setting_type = 'count')
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
    }
    // Exit if accessed directly
    class Element_Image extends \Bricks\Element
    {
        public $block = 'core/image';
        public $category = 'basic';
        public $name = 'image';
        public $icon = 'ti-image';
        public $tag = 'figure';
        public $custom_attributes = false;
        public $wp_img_data = [];
        // Image data for wp_get_attachment_image_src filter (@since 2.0.2)
        public function get_label()
        {
        }
        /**
         * Enqueue PhotoSwipe lightbox script file as needed (frontend only)
         *
         * @since 1.3.4
         */
        public function enqueue_scripts()
        {
        }
        public function set_controls()
        {
        }
        public function get_mask_url($settings)
        {
        }
        protected function set_mask_attributes($mask_url, $mask_settings)
        {
        }
        public function get_normalized_image_settings($settings)
        {
        }
        public function render()
        {
        }
        public function get_block_html($settings)
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        /**
         * Not done yet: Custom block alt & caption strings have to be extracted from $block['innerHTML']
         */
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
        /**
         * Amend image src with width and height attributes
         *
         * @param array $image Image attributes.
         * @param int   $attachment_id Attachment ID.
         *
         * @return array
         */
        public function amend_image_src($image, $attachment_id)
        {
        }
    }
    // Exit if accessed directly
    class Element_Instagram_Feed extends \Bricks\Element
    {
        public $category = 'media';
        public $name = 'instagram-feed';
        public $icon = 'ion-logo-instagram';
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_List extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'list';
        public $icon = 'ti-list';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Logo extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'logo';
        public $icon = 'ti-home';
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Map_Connector extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'map-connector';
        public $icon = 'ti-pin-alt';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        // Render Info Box Popup template
        public function maybe_render_info_box()
        {
        }
        /**
         * Generate marker image settings
         */
        public function get_marker_image($image)
        {
        }
    }
    // Exit if accessed directly
    class Element_Map_Leaflet extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'map-leaflet';
        public $icon = 'ti-map-alt';
        public $scripts = ['bricksMapLeaflet'];
        public $draggable = false;
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Map extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'map';
        public $icon = 'ti-location-pin';
        public $scripts = ['bricksMap'];
        public $draggable = false;
        public function get_label()
        {
        }
        /**
         * Triggered when element->load()
         *
         * @since 2.0
         */
        public function add_actions()
        {
        }
        /**
         * Register scripts (previously in setup.php)
         *
         * @since 2.0
         */
        public function register_script()
        {
        }
        public function enqueue_scripts()
        {
        }
        /**
         * Add language parameter to Google Maps API script
         *
         * @since 2.2
         *
         * @param string $src
         * @param string $handle
         * @return string
         */
        public function add_google_maps_language_param($src, $handle)
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Process repeater item from query data
         *
         * @param array $data
         * @return array
         * @since 2.0
         */
        public function repeater_item_from_query($data)
        {
        }
        /**
         * Refactor function to parse infoImages
         *
         * @param array   $settings
         * @param Element $element
         * @since 2.0
         */
        public static function parse_info_images($settings, $element)
        {
        }
        /**
         * Render Info Box Popup template
         *
         * @since 2.0
         */
        public function get_info_box_template_id()
        {
        }
    }
    // Exit if accessed directly
    class Element_Nav_Menu extends \Bricks\Element
    {
        public $category = 'wordpress';
        public $name = 'nav-menu';
        public $icon = 'ti-menu';
        public $custom_attributes = false;
        public $scripts = ['bricksSubmenuListeners', 'bricksSubmenuPosition'];
        public $wp_nav_menu_items = [];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        /**
         * Render menu item & their sub menus recursively
         *
         * When using Nav menu inside dropdown content.
         *
         * @since 1.8
         */
        public function render_menu_items_of_parent_id($parent_id)
        {
        }
        public function render()
        {
        }
        /**
         * Add submenu toggle icon
         * Render mega menu (desktop menu)
         */
        public function walker_nav_menu_start_el($output, $item, $depth, $args)
        {
        }
        /**
         * Mega menu:  Add .brx-has-megamenu && .menu-item-has-children
         * Multilevel: Add .brx-has-multilevel && .menu-item-has-children
         * Builder:    Add .current-menu-item
         *
         * @since 1.5.3
         */
        public function nav_menu_css_class($classes, $menu_item, $args, $depth)
        {
        }
        /**
         * Return template ID of mega menu
         *
         * @since 1.8
         */
        public function get_mega_menu_template_id($menu_item_id)
        {
        }
        /**
         * Return true if multilevel is enabled
         *
         * @since 1.8
         */
        public function is_multilevel($menu_item_id)
        {
        }
    }
    // Exit if accessed directly
    class Element_Nav_Nested extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'nav-nested';
        public $icon = 'ti-menu';
        public $tag = 'nav';
        public $scripts = ['bricksNavNested', 'bricksSubmenuListeners', 'bricksSubmenuPosition'];
        public $nestable = true;
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function get_nestable_children()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Offcanvas extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'offcanvas';
        public $icon = 'ti-layout-sidebar-left';
        public $scripts = ['bricksOffcanvas'];
        public $nestable = true;
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        public function get_nestable_children()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Pagination extends \Bricks\Element
    {
        public $category = 'query';
        public $name = 'pagination';
        public $icon = 'ti-angle-double-right';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function pagination_args($args)
        {
        }
    }
    // Exit if accessed directly
    class Element_Pie_Chart extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'pie-chart';
        public $icon = 'ti-pie-chart';
        public $scripts = ['bricksPieChart'];
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Author extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-author';
        public $icon = 'ti-user';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Comments extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-comments';
        public $icon = 'ti-comments';
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        /**
         * Author HTML tag
         *
         * @since 1.10
         */
        public function comment_author_link($comment_author_tag)
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Content extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-content';
        public $icon = 'ti-wordpress';
        public function enqueue_scripts()
        {
        }
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Excerpt extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-excerpt';
        public $icon = 'ti-paragraph';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Render taxonomy or author description
         *
         * @param string $description
         *
         * @since 1.6.2
         */
        public function render_description($description)
        {
        }
        /**
         * Render post excerpt
         *
         * @since 1.6.2
         */
        public function render_post_excerpt()
        {
        }
        /**
         * Render no excerpt
         *
         * @since 1.6.2
         */
        public function render_no_excerpt()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Meta extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-meta';
        public $icon = 'ti-receipt';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Navigation extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-navigation';
        public $icon = 'ti-layout-menu-separated';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Reading_Progress_Bar extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-reading-progress-bar';
        public $icon = 'ti-line-double';
        public $scripts = ['bricksPostReadingProgressBar'];
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Reading_Time extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-reading-time';
        public $icon = 'ti-time';
        public $scripts = ['bricksPostReadingTime'];
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Sharing extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-sharing';
        public $icon = 'ti-share';
        public $css_selector = 'a';
        public function get_label()
        {
        }
        /**
         * No longer needed as we use "title" attribute instead of tooltips
         * which can overflow the viewport on RTL, etc.
         *
         * @since 1.12
         */
        // public function enqueue_scripts() {
        // balloon.css tooltip library
        // wp_enqueue_style( 'bricks-tooltips' );
        // }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Taxonomy extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-taxonomy';
        public $icon = 'ti-clip';
        public $css_selector = '&.separator a, .bricks-button';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Title extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-title';
        public $icon = 'ti-text';
        public $tag = 'h3';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Post_Table_Of_Contents extends \Bricks\Element
    {
        public $category = 'single';
        public $name = 'post-toc';
        public $icon = 'ti-list';
        public $css_selector = '.toc-list';
        public $scripts = ['bricksTableOfContents'];
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Posts extends \Bricks\Custom_Render_Element
    {
        public $category = 'wordpress';
        public $name = 'posts';
        public $icon = 'ti-layout-media-overlay';
        public $css_selector = '.bricks-layout-inner';
        public $scripts = ['bricksIsotope'];
        // @var array Arguments passed to WP_Query.
        public $query_vars = null;
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Modify the no results content to match the Posts element output
         *
         * @since 2.0
         */
        public function no_results_html($html)
        {
        }
    }
    // Exit if accessed directly
    class Element_Pricing_Tables extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'pricing-tables';
        public $icon = 'ti-money';
        public $css_selector = '.pricing-table';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Progress_Bar extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'progress-bar';
        public $icon = 'ti-line-double';
        public $css_selector = '.bar';
        public $scripts = ['bricksProgressBar'];
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Query_Results_Summary extends \Bricks\Element
    {
        public $category = 'query';
        public $name = 'query-results-summary';
        public $icon = 'ti-bar-chart-alt';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Rating extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'rating';
        public $icon = 'ti-star';
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Related_Posts extends \Bricks\Custom_Render_Element
    {
        public $category = 'single';
        public $name = 'related-posts';
        public $icon = 'ti-pin-alt';
        public $css_selector = 'li';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Search extends \Bricks\Element
    {
        public $block = 'core/search';
        public $category = 'wordpress';
        public $name = 'search';
        public $icon = 'ti-search';
        public $css_selector = 'form';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
    }
    class Element_Section extends \Bricks\Element_Container
    {
        public $category = 'layout';
        public $name = 'section';
        public $icon = 'ti-layout-accordion-separated';
        public $tag = 'section';
        public $nestable = true;
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        /**
         * Get child elements
         *
         * @return array Array of child elements.
         *
         * @since 1.5
         */
        public function get_nestable_children()
        {
        }
    }
    // Exit if accessed directly
    class Element_Shortcode extends \Bricks\Element
    {
        public $block = 'core/shortcode';
        public $category = 'wordpress';
        public $name = 'shortcode';
        public $icon = 'ti-shortcode';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
    }
    // Exit if accessed directly
    class Element_Sidebar extends \Bricks\Element
    {
        public $category = 'wordpress';
        public $name = 'sidebar';
        public $icon = 'ti-layout-sidebar-right';
        public function get_label()
        {
        }
        /**
         * Load required WP styles on the frontend
         *
         * @since 1.8
         */
        public function enqueue_scripts()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Slider_Nested extends \Bricks\Element
    {
        public $category = 'media';
        public $name = 'slider-nested';
        public $icon = 'ti-layout-slider';
        public $scripts = ['bricksSplide'];
        public $nestable = true;
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function get_nestable_item()
        {
        }
        public function get_nestable_children()
        {
        }
        /**
         * Render arrows (use custom HTML solution as splideJS only accepts SVG path via 'arrowPath')
         */
        public function render_arrows()
        {
        }
        /**
         * Render individual slides
         */
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Slider extends \Bricks\Element
    {
        public $category = 'media';
        public $name = 'slider';
        public $icon = 'ti-layout-slider';
        public $scripts = ['bricksSwiper'];
        public $draggable = false;
        public $loop_index = 0;
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function render_repeater_item($slide)
        {
        }
    }
    // Exit if accessed directly
    class Element_Slot extends \Bricks\Element
    {
        public $name = 'slot';
        public $icon = 'ti-widgetized';
        public $vue_component = 'bricks-nestable';
        public $nestable = true;
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls_before()
        {
        }
        public function set_controls()
        {
        }
        public function set_controls_after()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Social_Icons extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'social-icons';
        public $icon = 'ti-twitter';
        public $css_selector = 'li.has-link a, li.no-link';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Svg extends \Bricks\Element
    {
        public $category = 'media';
        public $name = 'svg';
        public $icon = 'ti-vector';
        public $tag = 'svg';
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Tabs_Nested extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'tabs-nested';
        public $icon = 'ti-layout-tab';
        public $scripts = ['bricksTabs'];
        public $nestable = true;
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        /**
         * Get child elements
         *
         * @return array Array of child elements.
         *
         * @since 1.5
         */
        public function get_nestable_children()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Tabs extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'tabs';
        public $icon = 'ti-layout-tab';
        public $scripts = ['bricksTabs'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Team_Members extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'team-members';
        public $icon = 'ti-id-badge';
        public $tag = 'ul';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Template extends \Bricks\Element
    {
        public $block = 'core/template';
        public $category = 'general';
        public $name = 'template';
        public $icon = 'ti-layers';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Builder: Helper function to add data to builder render call (AJAX or REST API)
         *
         * @since 1.5
         *
         * @param boolean $template_id
         * @return array
         */
        public static function get_builder_call_additional_data($template_id)
        {
        }
    }
    // Exit if accessed directly
    class Element_Testimonials extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'testimonials';
        public $icon = 'ti-comment-alt';
        public $css_selector = '.swiper-slide';
        public $scripts = ['bricksSwiper'];
        public $draggable = false;
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Text_Basic extends \Bricks\Element
    {
        public $block = 'core/paragraph';
        public $category = 'basic';
        public $name = 'text-basic';
        public $icon = 'ti-align-justify';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public static function render_builder()
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        // NOTE: Convert block to element settings: Use Bricks "Rich Text" element instead
        // public function convert_block_to_element_settings( $block, $attributes ) {}
    }
    // Exit if accessed directly
    class Element_Text_Link extends \Bricks\Element
    {
        public $block = 'core/paragraph';
        public $category = 'basic';
        public $name = 'text-link';
        public $icon = 'ti-link';
        public $tag = 'a';
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public static function _render_builder()
        {
        }
    }
    // Exit if accessed directly
    class Element_Text extends \Bricks\Element
    {
        public $block = ['core/paragraph', 'core/list'];
        public $category = 'basic';
        public $name = 'text';
        public $icon = 'ti-align-left';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public static function render_builder()
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
    }
    // Exit if accessed directly
    class Element_Toggle_Mode extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'toggle-mode';
        public $icon = 'fas fa-toggle-off';
        public $scripts = ['bricksToggleMode'];
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Toggle extends \Bricks\Element
    {
        public $category = 'general';
        public $name = 'toggle';
        public $icon = 'ti-hand-point-up';
        public $scripts = ['bricksToggle'];
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Element_Video extends \Bricks\Element
    {
        public $block = ['core/video', 'core-embed/youtube', 'core-embed/vimeo'];
        public $category = 'basic';
        public $name = 'video';
        public $icon = 'ti-video-clapper';
        public $scripts = ['bricksVideo'];
        public $draggable = false;
        public function get_label()
        {
        }
        public function enqueue_scripts()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function convert_element_settings_to_block($settings)
        {
        }
        public function convert_block_to_element_settings($block, $attributes)
        {
        }
        /**
         * Helper function to parse the settings when videoType = meta
         *
         * @return array
         */
        public function get_normalized_video_settings($settings = [])
        {
        }
        /**
         * Get the video image image URL
         *
         * @param array $settings
         *
         * @since 1.7.2
         */
        public function get_preview_image_url($settings = [])
        {
        }
        /**
         * Get the image by control key
         *
         * Similar to get_normalized_image_settings() in the image element.
         *
         * Might be a fix image, a dynamic data tag or external URL.
         *
         * @since 1.8.5
         *
         * @return array
         */
        public function get_video_image_by_key($control_key = '')
        {
        }
        /**
         * Get the YouTube video ID from a URL
         *
         * @param string $url
         * @return string $video_id
         *
         * @since 1.12.2
         */
        public function get_youtube_id_from_url($url = '')
        {
        }
        /**
         * Get the Vimeo video ID from a URL
         *
         * @param string $url
         * @return string $video_id
         *
         * @since 1.12.2
         */
        public function get_vimeo_id_from_url($url = '')
        {
        }
    }
    // Exit if accessed directly
    class Element_WordPress extends \Bricks\Element
    {
        public $category = 'wordpress';
        public $name = 'wordpress';
        public $icon = 'ti-wordpress';
        public $css_selector = 'ul';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Elements
    {
        public static $elements = [];
        public static $manager = [];
        // = Element Manager (@since 2.0)
        public static $native = [];
        // Use in Element Manager (@since 2.0)
        public function __construct()
        {
        }
        public static function init_elements()
        {
        }
        /**
         * Get mandatory elements
         *
         * @since 2.0.2
         */
        public static function mandatory_elements()
        {
        }
        /**
         * Get element manager data
         *
         * @since 2.0.2
         */
        public static function manager()
        {
        }
        /**
         * Register element (built-in and custom elements via child theme)
         *
         * Element 'name' and 'class' only to load element on frontend when requested.
         */
        public static function register_element($file, $element_name = '', $element_class_name = '')
        {
        }
        /**
         * Load elements on 'wp' hook to get post_id for controls, etc.
         */
        public static function load_elements()
        {
        }
        public static function load_element($element_name)
        {
        }
        /**
         * Get specific element
         *
         * @param array  $element Array containing all element data. Use to retrieve element name.
         * @param string $element_property String to retrieve specific element data. Such as 'controls' for CSS string generation.
         */
        public static function get_element($element, $element_property = '')
        {
        }
    }
    // Exit if accessed directly
    class Feedback
    {
        public function __construct()
        {
        }
        /**
         * Load feedback script on themes.php admin page only
         */
        public function add_feedback_script($hook_suffix)
        {
        }
        /**
         * Render feedback HTML on themes.php admin page only
         */
        public function render_feedback_form()
        {
        }
    }
    // Exit if accessed directly
    class Frontend
    {
        public static $area = 'content';
        // header/content/footer
        public static $template_ids_to_enqueue = [];
        // IDs of templates to enqueue early (@since 1.12)
        /**
         * Elements requested for rendering
         *
         * key: ID
         * value: element data
         */
        public static $elements = [];
        /**
         * Live search results selectors
         *
         * key: live search ID
         * value: live search results CSS selector
         *
         * @since 1.9.6
         */
        public static $live_search_wrapper_selectors = [];
        public function __construct()
        {
        }
        /**
         * Add header scripts
         *
         * Do not add template JS (we only want to provide content)
         *
         * @since 1.0
         */
        public function add_header_scripts()
        {
        }
        /**
         * Page settings: Add meta description, keywords and robots
         */
        public function add_seo_meta_tags()
        {
        }
        /**
         * Page settings: Set document title
         *
         * @param array $title
         *
         * @see https://developer.wordpress.org/reference/hooks/document_title_parts/
         *
         * @since 1.6.1
         */
        public function set_seo_document_title($title)
        {
        }
        /**
         * Add Facebook Open Graph Meta Data
         *
         * https://ogp.me
         *
         * @since 1.0
         */
        public function add_open_graph_meta_tags()
        {
        }
        /**
         * Add body header scripts
         *
         * NOTE: Do not add template JS (we only want to provide content)
         *
         * @since 1.0
         */
        public function add_body_header_scripts()
        {
        }
        /**
         * Add body footer scripts
         *
         * NOTE: Do not add template JS (only provide content)
         *
         * @since 1.0
         */
        public function add_body_footer_scripts()
        {
        }
        /**
         * Enqueue styles and scripts
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Enqueue inline CSS
         *
         * @since 1.8.2 using wp_footer instead of wp_enqueue_scripts to get all dynamic data styles & global classes
         */
        public function enqueue_inline_css()
        {
        }
        /**
         * Enqueue inline CSS in wp_footer: Global classes (Template element) & dynamic data
         *
         * @since 1.8.2
         */
        public function enqueue_footer_inline_css()
        {
        }
        /**
         * Get element content wrapper
         */
        public static function get_content_wrapper($settings, $fields, $post)
        {
        }
        /**
         * Render element recursively
         *
         * @param array $element
         */
        public static function render_element($element)
        {
        }
        /**
         * Render element 'children' (= nestable element)
         *
         * @param array  $element_instance Instance of the element.
         * @param string $tag Tag name.
         * @param array  $extra_attributes Extra attributes.
         *
         * @since 1.5
         */
        public static function render_children($element_instance = null, $tag = 'div', $extra_attributes = [])
        {
        }
        /**
         * Return rendered elements (header/content/footer)
         *
         * @param array  $elements Array of Bricks elements.
         * @param string $area     header/content/footer.
         *
         * @since 1.2
         */
        public static function render_data($elements = [], $area = 'content')
        {
        }
        /**
         * One Page Navigation Wrapper
         */
        public function one_page_navigation_wrapper()
        {
        }
        /**
         * Lazy load via img data attribute
         *
         * https://developer.wordpress.org/reference/hooks/wp_get_attachment_image_attributes/
         *
         * @param array        $attr Image attributes.
         * @param object       $attachment WP_POST object of image.
         * @param string|array $size Requested image size.
         *
         * @return array
         */
        public function set_image_attributes($attr, $attachment, $size)
        {
        }
        /**
         * Template frontend view: Permanently redirect users without Bricks editing permission to homepage
         *
         * Exclude template pages in search engine results.
         *
         * Overwrite via 'publicTemplates' setting
         *
         * @since 1.9.4: Exclude redirect if maintenance mode activated (to prevent endless redirect)
         */
        public function template_redirect()
        {
        }
        public function add_skip_link()
        {
        }
        /**
         * Remove WP hooks on frontend
         *
         * @since 1.5.5
         */
        public function remove_wp_hooks()
        {
        }
        /**
         * Render header
         *
         * Bricks data exists & header is not disabled on this page.
         *
         * @since 1.3.2
         */
        public function render_header()
        {
        }
        /**
         * Render Bricks content + surrounding 'main' tag
         *
         * For pages rendered with Bricks
         *
         * To allow customizing the 'main' tag attributes
         *
         * @since 1.5
         */
        public static function render_content($bricks_data = [], $attributes = [], $html_after_begin = '', $html_before_end = '', $tag = 'main')
        {
        }
        /**
         * Render footer
         *
         * To follow already available 'render_header' function syntax
         *
         * @since 1.5
         */
        public function render_footer()
        {
        }
        /**
         * Remove current menu item classes from anchor links
         *
         * @since 1.11
         */
        public function adjust_menu_item_classes($items, $args)
        {
        }
        /**
         * If user lands on an activation page, check if there is a valid activation key,
         * and if so, activate the user account.
         *
         * @since 2.1
         */
        public function activate_user_account()
        {
        }
    }
    // Exit if accessed directly
    // To create new nonces when user gets logged out
    class Heartbeat
    {
        /**
         * WordPress REST API help docs:
         *
         * https://developer.wordpress.org/plugins/javascript/heartbeat-api/
         */
        public function __construct()
        {
        }
        /**
         * Enqueue styles and scripts
         *
         * @since 1.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Heartbeat settings
         *
         * @since 1.0
         *
         * @param array $settings Heartbeat settings.
         */
        public function heartbeat_settings($settings)
        {
        }
        /**
         * Receive Heartbeat data and respond
         *
         * Processes data received via a Heartbeat request, and returns additional data to pass back to the front end.
         *
         * @since 1.0
         *
         * @param array $response Heartbeat response data to pass back to front end.
         * @param array $data Data received from the front end (unslashed).
         *
         * @return array Heartbeat received response.
         */
        public function heartbeat_received($response, $data)
        {
        }
        /**
         * Refresh builder and Heartbeat nonce
         *
         * @since 1.0
         *
         * @param array $response Heartbeat response.
         * @param array $data Data received.
         *
         * @return array Newly created new nonces.
         */
        public function refresh_nonces($response, $data)
        {
        }
    }
    // Exit if accessed directly
    class Helpers
    {
        /**
         * Get template data from post meta
         *
         * @since 1.0
         */
        public static function get_template_settings($post_id)
        {
        }
        /**
         * Store template settings
         *
         * @since 1.0
         */
        public static function set_template_settings($post_id, $settings)
        {
        }
        /**
         * Remove template settings from store
         *
         * @since 1.0
         */
        public static function delete_template_settings($post_id)
        {
        }
        /**
         * Get individual template setting by key
         *
         * @since 1.0
         */
        public static function get_template_setting($key, $post_id)
        {
        }
        /**
         * Store a specific template setting
         *
         * @since 1.0
         */
        public static function set_template_setting($post_id, $key, $setting_value)
        {
        }
        /**
         * Get terms
         *
         * @param string $taxonomy Taxonomy name.
         * @param string $post_type Post type name.
         * @param string $include_all Includes meta terms like "All terms (taxonomy name)".
         * @param string $search Search term. (@since 1.12)
         * @since 1.0
         */
        public static function get_terms_options($taxonomy = null, $post_type = null, $include_all = false, $search = '')
        {
        }
        /**
         * Get users (for templatePreview)
         *
         * @param array $args Query args.
         * @param bool  $show_role Show user role.
         *
         * @uses templatePreviewAuthor
         *
         * @since 1.0
         */
        public static function get_users_options($args, $show_role = false)
        {
        }
        /**
         * Get post edit link with appended query string to trigger builder
         *
         * @since 1.0
         */
        public static function get_builder_edit_link($post_id = 0)
        {
        }
        /**
         * Get supported post types
         *
         * @since 1.0
         *
         * @return array
         */
        public static function get_supported_post_types()
        {
        }
        /**
         * Get registered post types
         *
         * Key: Post type name
         * Value: Post type label
         *
         * @since 1.0
         *
         * @return array
         */
        public static function get_registered_post_types()
        {
        }
        /**
         * Is current post type supported by builder
         *
         * @since 1.0
         *
         * @return boolean
         */
        public static function is_post_type_supported($post_id = 0)
        {
        }
        /**
         * Return page-specific title
         *
         * @param int  $post_id
         * @param bool $context
         *
         * @see https://developer.wordpress.org/reference/functions/get_the_archive_title/
         *
         * @since 1.0
         *
         * @return string
         */
        public static function get_the_title($post_id = 0, $context = false)
        {
        }
        /**
         * Get the queried object which could also be set if previewing a template
         *
         * @see: https://developer.wordpress.org/reference/functions/get_queried_object/
         *
         * @param int $post_id
         *
         * @return WP_Term|WP_User|WP_Post|WP_Post_Type
         */
        public static function get_queried_object($post_id)
        {
        }
        /**
         * Calculate the excerpt of a post (product, or any other cpt)
         *
         * @param WP_Post $post
         * @param int     $excerpt_length
         * @param string  $excerpt_more
         * @param boolean $keep_html
         */
        public static function get_the_excerpt($post, $excerpt_length, $excerpt_more = null, $keep_html = false)
        {
        }
        /**
         * Trim a text string to a certain number of words.
         *
         * @since 1.6.2
         *
         * @param string  $text
         * @param int     $length
         * @param string  $more
         * @param boolean $keep_html
         */
        public static function trim_words($text = '', $length = 15, $more = null, $keep_html = false, $wpautop = true)
        {
        }
        /**
         * Posts navigation
         *
         * @return string
         *
         * @since 1.0
         */
        public static function posts_navigation($current_page, $total_pages)
        {
        }
        /**
         * Pagination within post
         *
         * To add ul > li structure as 'link_before' & 'link_after' are not working.
         *
         * @since 1.8
         */
        public static function page_break_navigation()
        {
        }
        /** Get global class data by ID
         *
         * @param string $class_id
         * @return array|null
         *
         * @since 2.0.2
         */
        public static function get_global_class_by_id($class_id, $key)
        {
        }
        /**
         * Element placeholder HTML
         *
         * @since 1.0
         */
        public static function get_element_placeholder($data = [], $type = 'info')
        {
        }
        /**
         * Retrieves the element, the complete set of elements and the template/page ID where element belongs to
         *
         * NOTE: This function does not check for global element settings.
         *
         * @since 1.5
         */
        public static function get_element_data($post_id, $element_id)
        {
        }
        /**
         * Get element settings
         *
         * For use in AJAX functions such as form submit, pagination, etc.
         *
         * @since 1.0
         * @since 1.12: Check for component instance settings
         */
        public static function get_element_settings($post_id = 0, $element_id = 0, $global_id = 0)
        {
        }
        /**
         * Get component by 'cid'
         *
         * @param array $element
         *
         * @return boolean|array false if no component found, else return the component data.
         *
         * @since 1.12
         */
        public static function get_component_by_cid($component_id)
        {
        }
        /**
         * Get component element by 'id'
         *
         * @param array $component_element_id
         *
         * @return boolean|array false if no component found, else return the component child element.
         *
         * @since 1.12
         */
        public static function get_component_element_by_id($component_element_id)
        {
        }
        /**
         * Get data of specific component
         *
         * @param array  $element
         * @param string $key (optional)
         *
         * @return boolean|array false if no component found, else return the component data.
         *
         * @since 1.12
         */
        public static function get_component($element = [], $key = '')
        {
        }
        /**
         * Resolve parent property value for nested component instances.
         *
         * @param string $connection_string The parent property connection string.
         * @param array  $request_elements Optional. Elements from current request (builder data).
         * @param string $parent_instance_id The parent component instance ID from render context.
         *
         * @return mixed The resolved parent property value or property default if not found.
         * @since 2.2
         */
        public static function resolve_parent_property_value($connection_string, $request_elements = [], $parent_instance_id = '')
        {
        }
        /**
         * Return component instance
         *
         * Set root component settings and child component settings based on connected property settings.
         *
         * Use custom property settings or fallback to default property value.
         *
         * @param array  $element
         * @param string $key settings, element (return specific component element)
         *
         * @return boolean|array false if no component found, else return the component or if $key such as 'settings' provided, the specific component element data.
         *
         * @since 1.12
         */
        public static function get_component_instance($element = [], $key = '')
        {
        }
        /**
         * Get all component elements recursively inside block-editor.php
         * Similar logic as in assets.php $process_component_elements function
         *
         * @since 2.2 (#86c7ac7wk)
         */
        public static function get_component_elements_recursive($component_instance, &$all_elements, $include_hidden = false)
        {
        }
        /**
         * Get data of specific global element
         *
         * @param array $element
         *
         * @return boolean|array false if no global element found, else return the global element data.
         *
         * @since 1.3.5
         */
        public static function get_global_element($element = [], $key = '')
        {
        }
        /**
         * Get posts options (max 50 results)
         *
         * @since 1.0
         */
        public static function get_posts_by_post_id($query_args = [])
        {
        }
        /**
         * Get a list of supported content types for template preview
         *
         * @return array
         */
        public static function get_supported_content_types()
        {
        }
        /**
         * Get editor mode of requested page
         *
         * @param int $post_id
         *
         * @since 1.0
         */
        public static function get_editor_mode($post_id = 0)
        {
        }
        /**
         * Check if post/page/cpt renders with Bricks
         *
         * @param int $post_id / $queried_object_id The post ID.
         *
         * @return boolean
         */
        public static function render_with_bricks($post_id = 0)
        {
        }
        /**
         * Get Bricks data for requested page
         *
         * @param int     $post_id The post ID.
         * @param string  $type header, content, footer.
         * @param boolean $force_post_data Force checking only the specific post data without considering templates.
         *
         * @since 1.3.4
         *
         * @return boolean|array
         */
        public static function get_bricks_data($post_id = 0, $type = 'content', $force_post_data = false)
        {
        }
        public static function delete_bricks_data_by_post_id($post_id = 0)
        {
        }
        /**
         * Generate random hash
         *
         * Default: 6 characters long
         *
         * @return string
         *
         * @since 1.0
         */
        public static function generate_hash($string, $length = 6)
        {
        }
        public static function generate_random_id($echo = true)
        {
        }
        /**
         * Generate new & unique IDs for Bricks elements
         *
         * @since 1.9.8
         *
         * @param array $elements
         * @param array $element_names_only - For WPML to only regenerate for filter elements (@since 1.12.2)
         */
        public static function generate_new_element_ids($elements = [], $element_names_only = [])
        {
        }
        /**
         * Get file contents from file system
         *
         * .svg, .json (Google fonts), etc.
         *
         * @since 1.8.1
         */
        public static function file_get_contents($file_path, ...$args)
        {
        }
        /**
         * Return WP dashboard Bricks settings url
         *
         * @since 1.0
         */
        public static function settings_url($params = '')
        {
        }
        /**
         * Return WP dashboard Bricks elements manager url
         *
         * @since 2.0
         */
        public static function elements_manager_url($params = '')
        {
        }
        /**
         * Return Bricks Academy link
         *
         * @since 1.0
         */
        public static function article_link($path, $text)
        {
        }
        /**
         * Return the edit post link (ot the preview post link)
         *
         * @param int $post_id The post ID.
         *
         * @since 1.2.1
         */
        public static function get_preview_post_link($post_id)
        {
        }
        /**
         * Dev helper to var dump nicely formatted
         *
         * @since 1.0
         */
        public static function pre_dump($data)
        {
        }
        /**
         * Dev helper to error log array values
         *
         * @since 1.0
         */
        public static function log($data)
        {
        }
        /**
         * Logs a message if WordPress debug is enabled.
         *
         * @param string $message The message to log.
         *
         * @since 1.10.2 (for WPML)
         */
        public static function maybe_log($message)
        {
        }
        /**
         * Custom wp_remote_get function
         */
        public static function remote_get($url, $args = [])
        {
        }
        /**
         * Custom wp_remote_post function
         *
         * @since 1.3.5
         */
        public static function remote_post($url, $args = [])
        {
        }
        /**
         * Generate swiperJS breakpoint data-options (carousel, testimonial)
         *
         * Set slides to show & scroll per breakpoint.
         * Swiper breakpoint values use "min-width". so descent breakpoints from largest to smallest.
         *
         * https://swiperjs.com/swiper-api#param-breakpoints
         *
         * @since 1.3.5
         *
         * @since 1.5.1: removed old 'responsive' repeater controls due to custom breakpoints
         */
        public static function generate_swiper_breakpoint_data_options($settings)
        {
        }
        /**
         * Generate swiperJS autoplay options (carousel, slider, testimonial)
         *
         * @since 1.5.7
         */
        public static function generate_swiper_autoplay_options($settings)
        {
        }
        /**
         * Verifies the integrity of the data using a hash
         *
         * @param string $hash The hash to compare against.
         * @param mixed  $data The data to verify.
         *
         * @since 1.9.7
         *
         * @return bool True if the data is valid, false otherwise.
         */
        public static function verify_code_signature($hash, $data)
        {
        }
        /**
         * Code element settings: code, + executeCode
         * Query Loop settings: useQueryEditor + queryEditor
         */
        public static function sanitize_element_php_code($post_id, $element_id, $code, $signature)
        {
        }
        /**
         * Check if code execution is enabled
         *
         * Via filter or Bricks setting.
         *
         * @since 1.9.7: Code execution is disabled by default.
         *
         * @return boolean
         */
        public static function code_execution_enabled()
        {
        }
        /**
         * Sanitize value
         */
        public static function sanitize_value($value)
        {
        }
        /**
         * Sanitize Bricks data
         *
         * During template import, etc.
         *
         * @since 1.3.7
         */
        public static function sanitize_bricks_data($elements)
        {
        }
        /**
         * Set is_frontend = false to a element
         *
         * Use: $elements = array_map( 'Bricks\Helpers::set_is_frontend_to_false', $elements );
         *
         * @since 1.4
         */
        public static function set_is_frontend_to_false($element)
        {
        }
        /**
         * Get post IDs of all Bricks-enabled post types
         *
         * @see admin.php get_converter_items()
         * @see files.php get_css_files_list()
         *
         * @param array $custom_args Custom get_posts() arguments (@since 1.8; @see get_css_files_list).
         *
         * @since 1.4
         */
        public static function get_all_bricks_post_ids($custom_args = [])
        {
        }
        /**
         * Search & replace: Works for strings & arrays
         *
         * @param string $search  The value being searched for.
         * @param string $replace The replacement value that replaces found search values.
         * @param string $data    The string or array being searched and replaced on, otherwise known as the haystack.
         *
         * @see templates.php import_template()
         *
         * @since 1.4
         */
        public static function search_replace($search, $replace, $data)
        {
        }
        /**
         * Google fonts are disabled (via filter OR Bricks setting)
         *
         * @see https://academy.bricksbuilder.io/article/filter-bricks-assets-load_webfonts
         *
         * @since 1.4
         */
        public static function google_fonts_disabled()
        {
        }
        /**
         * Sort variable Google Font axis (all lowercase before all uppercase)
         *
         * https://developers.google.com/fonts/docs/css2#strictness
         *
         * @since 1.8
         */
        public static function google_fonts_get_axis_rank($axis)
        {
        }
        /**
         * Stringify HTML attributes
         *
         * @param array $attributes key = attribute key; value = attribute value (string|array).
         *
         * @see bricks/header/attributes
         * @see bricks/footer/attributes
         * @see bricks/popup/attributes
         *
         * @return string
         *
         * @since 1.5
         */
        public static function stringify_html_attributes($attributes)
        {
        }
        /**
         * Validate HTML attributes
         *
         * NOTE: Not in use yet to prevent breaking changes of unintended removal of attributes.
         *
         * @since 1.10.2
         */
        public static function is_valid_html_attribute_name($attribute_name)
        {
        }
        /**
         * Return element attribute 'id'
         *
         * @since 1.5.1
         *
         * @since 1.7.1: Parse dynamic data for _cssId (same for _cssClasses)
         */
        public static function get_element_attribute_id($id, $settings)
        {
        }
        /**
         * Based on the current user capabilities, check if the new elements could be changed on save (AJAX::save_post())
         *
         * If user can only edit the content:
         *  - Check if the number of elements is the same
         *  - Check if the new element already existed before
         *
         * If user cannot execute code:
         *  - Replace any code element (with execution enabled) by the saved element,
         *  - or disable the execution (in case the element is new)
         *
         * @since 1.5.4
         *
         * @param array  $new_elements Array of elements.
         * @param int    $post_id The post ID.
         * @param string $area 'header', 'content', 'footer'.
         *
         * @return array Array of elements
         */
        public static function security_check_elements_before_save($new_elements, $post_id, $area)
        {
        }
        /**
         * Parse CSS & return empty string if checks are not fulfilled
         *
         * @since 1.6.2
         */
        public static function parse_css($css)
        {
        }
        /**
         * Save global classes in options table
         *
         * Skip saving empty global classes array.
         *
         * Triggered in:
         *
         * ajax.php:      wp_ajax_bricks_save_post (save post in builder)
         * templates.php: wp_ajax_bricks_import_template (template import)
         * converter.php: wp_ajax_bricks_run_converter (run converter from Bricks settings)
         *
         * @since 1.7
         *
         * @param array  $global_classes
         * @param string $action
         */
        public static function save_global_classes_in_db($global_classes)
        {
        }
        /**
         * Save global variables in options table
         *
         * @param array $global_variables
         * @return mixed
         * @since 1.9.8
         */
        public static function save_global_variables_in_db($global_variables)
        {
        }
        /**
         * Parse TinyMCE editor control data
         *
         * Use instead of applying 'the_content' filter to prevent rendering third-party content in within non "Post Content" elements.
         *
         * Available as static function to use in get_dynamic_data_preview_content as well (DD tag render on canvas)
         *
         * @see accordion, alert, icon-box, slider, tabs, text
         *
         * @since 1.7
         */
        public static function parse_editor_content($content = '')
        {
        }
        /**
         * Check if post_id is a Bricks template
         *
         * Previously used get_post_type( $post_id ) === BRICKS_DB_TEMPLATE_SLUG
         * But this method might accidentally return true if $post_id is a term_id or user_id, etc.
         *
         * @since 1.8
         */
        public static function is_bricks_template($post_id)
        {
        }
        /**
         * Check if current request is Bricks preview
         *
         * @since 1.9.5
         */
        public static function is_bricks_preview()
        {
        }
        /**
         * Check if the element settings contain a specific value
         *
         * Useful if the setting has diffrent keys in different breakpoints.
         *
         * Example: 'overlay', 'overlay:mobile_portrait', 'overlay:tablet_landscape', etc.
         *
         * Usage:
         * Helpers::element_setting_has_value( 'overlay', $settings ); // Check if $settings contains 'overlay' setting in any breakpoint
         * Helpers::element_setting_has_value( 'overlay:mobile', $settings ); // Check if $settings contains 'overlay' setting in mobile breakpoint
         *
         * @since 1.8
         *
         * @param string $key
         * @param array  $settings
         *
         * @return bool
         */
        public static function element_setting_has_value($key = '', $settings = [])
        {
        }
        /**
         * Check if the provided url string is the current landed page
         * Logic improvement for performance (@since 2.0)
         * - Should not set ancestor page/post as current page. The active state handled by frontend JS.
         * - Not used in the builder.
         *
         * @since 1.8
         *
         * @param string $url
         * @return bool
         */
        public static function maybe_set_aria_current_page($url = '')
        {
        }
        /**
         * Parse textarea content to account for dynamic data usage
         *
         * Useful in 'One option / feature per line' situations
         *
         * Examples: Form element options (Checkbox, Select, Radio) or Pricing Tables (Features)
         *
         * @since 1.9
         *
         * @param string $options
         * @return array
         */
        public static function parse_textarea_options($options)
        {
        }
        /**
         * Use user agent string to detect browser
         *
         * @since 1.9.2
         */
        public static function user_agent_to_browser($user_agent)
        {
        }
        /**
         * Use user agent string to detect operating system
         *
         * @since 1.9.2
         * @since 1.10.2 Sequence matters: Start with the most specific one!
         */
        public static function user_agent_to_os($user_agent)
        {
        }
        /**
         * Get user IP address
         *
         * @since 1.9.2
         */
        public static function user_ip_address()
        {
        }
        /**
         * Populate query_vars to be used in Bricks template preview based on "Populate content" settings
         *
         * @since 1.9.1
         */
        public static function get_template_preview_query_vars($post_id)
        {
        }
        /**
         * Populate query vars if the element is not using query type controls
         * Currently used in related-posts element and query_results_count when targeting related-posts element
         *
         * @return array
         * @since 1.9.3
         */
        public static function populate_query_vars_for_element($element_data, $post_id)
        {
        }
        /**
         * Check if Query Filters are enabled (in Bricks settings)
         *
         * @since 1.9.6
         */
        public static function enabled_query_filters()
        {
        }
        /**
         * Check if Query Filters integration is enabled in Bricks settings
         *
         * @since 1.11.1
         */
        public static function enabled_query_filters_integration()
        {
        }
        /**
         * Implode an array safely to avoid PHP warnings
         *
         * @since 1.10
         */
        public static function safe_implode($sep, $value)
        {
        }
        /**
         * Builds a hierarchical tree structure from a flat array of Bricks elements.
         *
         * The tree structure is used to process each element in a depth-first manner to maintain the hierarchy.
         *
         * Each element in the input array should be an associative array with the following structure:
         * - id (string): Unique identifier for the element.
         * - name (string): The name/type of the element (e.g., 'section', 'container', 'heading').
         * - parent (string|int|null): The ID of the parent element, or 0/null if it is a root element.
         * - children (array): An array of child element IDs (strings). Defaults to an empty array.
         * - settings (array): An associative array of settings specific to the element. Defaults to an empty array.
         *
         * Example:
         * [
         *   [
         *     "id" => "puikcj",
         *     "name" => "section",
         *     "parent" => 0,
         *     "children" => ["vtjutb"],
         *     "settings" => []
         *   ],
         *   [
         *     "id" => "vtjutb",
         *     "name" => "container",
         *     "parent" => "puikcj",
         *     "children" => ["jjnqht", "yvldmi", "cvrpll", "paayqb"],
         *     "settings" => []
         *   ],
         *   [
         *     "id" => "jjnqht",
         *     "name" => "heading",
         *     "parent" => "vtjutb",
         *     "children" => [],
         *     "settings" => ["text" => "I am a heading 1"]
         *   ]
         *   // More elements...
         * ]
         *
         * @param array $elements
         * @return array
         *
         * @since 1.10.2
         */
        public static function build_elements_tree($elements)
        {
        }
        /**
         * Get HTML tag name from element settings
         *
         * @param array  $settings Element settings.
         * @param string $default_tag Default tag name.
         *
         * @since 1.10.2
         */
        public static function get_html_tag_from_element_settings($settings, $default_tag)
        {
        }
        /**
         * Sanitize HTML tag
         *
         * @since 1.10.2
         */
        public static function sanitize_html_tag($tag, $default_tag)
        {
        }
        /**
         * Return all allowed HTML tags
         *
         * @since 1.10.3
         */
        public static function get_allowed_html_tags()
        {
        }
        /**
         * Return all valid pseudo classes
         *
         * Pseudo classes source of truth: https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes
         *
         * @since 1.12
         */
        public static function get_valid_pseudo_classes()
        {
        }
        /**
         * Return all valid pseudo elements
         *
         * Pseudo elements source of truth: https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-elements
         *
         * @since 1.12
         */
        public static function get_valid_pseudo_elements()
        {
        }
        /**
         * Apply wp_filter_post_kses to all string values in an array
         *
         * @since 1.11
         */
        public static function apply_wp_filter_post_kses_to_array(&$item, $key)
        {
        }
        /**
         * Scan site for global class usage
         *
         * @since 1.12
         *
         * @return array ['usedClasses' => array, 'unusedClasses' => array]
         */
        public static function scan_global_classes_site_usage()
        {
        }
        /**
         * Generate a label for a taxonomy
         *
         * @param string $taxonomy
         * @return string $taxonomy_label
         * @since 1.12
         */
        public static function generate_taxonomy_label($taxonomy)
        {
        }
        /**
         * Add category metadata to classes for transfer operations
         *
         * @param array $classes Array of classes to process
         * @return array Classes with category metadata
         *
         * @since 1.12.2
         */
        public static function add_category_metadata_to_classes($classes)
        {
        }
        /**
         * Get query object for dynamic tags {query_results_count} and Query Results Summary element
         * If unable to get query object from history, init query object based on element settings
         *
         * Originally located in provider-wp.php
         *
         * @since 1.12.2
         */
        public static function get_query_object_from_history_or_init($element_id, $post_id)
        {
        }
        /**
         * Determine whether to run additional logic to enqueue no results children script
         *
         * @since 1.12.2
         *
         * @return bool
         */
        public static function handle_no_results_children_elements()
        {
        }
        /**
         * Get normalized image settings
         *
         * @since 2.0
         */
        public static function get_normalized_image_settings($instance, $settings)
        {
        }
        /**
         * Check if file is valid SVG
         *
         * @param string $file SVG content
         *
         * @since 2.0
         */
        public static function is_valid_svg($file)
        {
        }
        /**
         * Send user activation email
         *
         * @param number $user_id User ID
         * @param string $email_type Email type that should be sent (activation, resend-activation)
         *
         * @since 2.1
         */
        public static function send_user_activation_email($user_id, $email_type)
        {
        }
        /**
         * Set user meta: activation key and status
         *
         * @param int $user_id
         *
         * @since 2.1
         */
        public static function set_activation_meta($user_id)
        {
        }
        /**
         * Process settings to update variable references
         *
         * @param array  $settings Settings to process.
         * @param string $old_name Old variable name.
         * @param string $new_name New variable name.
         *
         * @return array Updated settings.
         * @since 2.0
         */
        public static function process_settings_for_variable_rename($settings, $old_name, $new_name)
        {
        }
        /**
         * Process elements to update variable references
         *
         * @since 2.0
         *
         * @param array  $elements Array of elements.
         * @param string $old_name Old variable name.
         * @param string $new_name New variable name.
         *
         * @return array Updated elements
         */
        public static function process_elements_for_variable_rename($elements, $old_name, $new_name)
        {
        }
        /**
         * Update all references to a renamed global CSS variable across the site
         *
         * @since 2.0
         *
         * @param string $old_name Old variable name (without the -- prefix).
         * @param string $new_name New variable name (without the -- prefix).
         *
         * @return array Results with counts of updated items.
         */
        public static function update_global_variable_references($old_name, $new_name)
        {
        }
        /**
         * Render a "NEW" badge if BRICKS_VERSION is not larger than the next minor $version
         *
         * Example: BRICKS_VERSION = 2.1, $version_added = 2.0 => "New" badge is no longer rendered as its the next minor version.
         *
         * @since 2.0
         */
        public static function render_badge($version_added)
        {
        }
        /**
         * Find orphaned elements across all Bricks posts and templates
         *
         * @since 2.0
         *
         * @return array {
         *     @type array $orphaned_by_post_id Array of post IDs with orphaned elements
         *     @type int   $total_orphans       Total number of orphaned elements found
         *     @type int   $total_posts         Total number of posts with orphaned elements
         * }
         */
        public static function find_orphaned_elements_across_site()
        {
        }
        /**
         * Find orphaned elements in a specific post
         *
         * @since 2.0
         *
         * @param int $post_id The post ID to check
         *
         * @return array {
         *     @type array $orphaned_elements Array of orphaned elements by area
         *     @type int   $total_orphans     Total number of orphaned elements in this post
         * }
         */
        public static function find_orphaned_elements_in_post($post_id)
        {
        }
        /**
         * Find orphaned elements within an array of elements
         *
         * @since 2.0
         *
         * @param array $elements Array of Bricks elements
         *
         * @return array {
         *     @type array $orphaned_by_area Array of orphaned elements
         *     @type int   $total_orphans    Total number of orphaned elements
         * }
         */
        public static function find_orphaned_elements($elements)
        {
        }
        /**
         * Clean up orphaned elements across all posts with orphaned elements
         *
         * @since 2.0
         *
         * @param array $orphaned_data Data from find_orphaned_elements_across_site()
         *
         * @return array {
         *     @type bool $success True if cleanup was successful
         *     @type int  $total_cleaned Total number of elements cleaned up
         *     @type int  $posts_cleaned Number of posts that were cleaned up
         * }
         */
        public static function cleanup_orphaned_elements_across_site($orphaned_data)
        {
        }
        /**
         * Clean up orphaned elements from a specific post
         *
         * @since 2.0
         *
         * @param int   $post_id The post ID to clean up
         * @param array $orphaned_data Orphaned elements data from find_orphaned_elements_in_post()
         *
         * @return array {
         *     @type bool $success True if cleanup was successful
         *     @type int  $cleaned_count Number of elements cleaned up
         * }
         */
        public static function cleanup_orphaned_elements_in_post($post_id, $orphaned_data)
        {
        }
        /**
         * Clean up orphaned elements from an array of elements
         *
         * @since 2.0
         *
         * @param array $elements Array of Bricks elements
         * @param array $orphaned_ids Array of orphaned element IDs to remove
         *
         * @return array Cleaned array of elements
         */
        public static function cleanup_orphaned_elements($elements, $orphaned_ids)
        {
        }
        /**
         * If a query is set to use a global query, replace its settings with the global query settings
         *
         * @param array $query_settings The query settings to check and potentially replace
         * @return array The updated query settings
         * @since 2.1
         */
        public static function maybe_get_global_query_settings($query_settings)
        {
        }
        /**
         * Extract name from CSS variable
         *
         * Converts "var(--primary)" to "--primary"
         * Converts "var(--color-1)" to "--color-1"
         *
         * @param string $css_var CSS variable string
         * @return string|false Variable name or false if invalid
         *
         * @since 2.2
         */
        public static function extract_name_from_css_variable($css_var)
        {
        }
        /**
         * Get Bricks AJAX endpoint current page
         *
         * AJAX pagination: Supported
         * Query Filters pagination is not supported yet but the code is here for future use
         *
         * @since 2.2
         */
        public static function get_ajax_current_page()
        {
        }
    }
    // Exit if accessed directly
    class I18n
    {
        public static function get_frontend_i18n()
        {
        }
        public static function get_admin_i18n()
        {
        }
        public static function get_builder_i18n()
        {
        }
        public static function get_all_i18n()
        {
        }
    }
    // Exit if accessed directly
    class Theme
    {
        public $components;
        public $capabilities;
        public $database;
        public $helpers;
        public $cli;
        public $breakpoints;
        public $blocks;
        public $revisions;
        public $license;
        public $theme_styles;
        public $custom_fonts;
        public $settings;
        public $setup;
        public $search;
        public $ajax;
        public $svg;
        public $templates;
        public $heartbeat;
        public $converter;
        public $maintenance;
        public $admin;
        public $feedback;
        public $api;
        public $elements;
        public $woocommerce;
        public $polylang;
        public $integrations_form;
        public $wpml;
        public $instagram;
        public $rank_math;
        public $yoast;
        public $block_editor;
        public $builder;
        public $frontend;
        public $assets;
        public $interactions;
        public $popups;
        public $conditions;
        public $auth_redirects;
        public $query_filters;
        public $query_filters_indexer;
        public $query_filters_fields;
        /**
         * The one and only Theme instance
         *
         * @var Theme
         */
        public static $instance = null;
        /**
         * Autoload and init components
         */
        public function __construct()
        {
        }
        /**
         * Init components
         */
        public function init()
        {
        }
        /**
         * Main Theme instance
         *
         * Ensure only one instance of Theme exists at any given time.
         *
         * @return object Theme The one and only Theme instance
         */
        public static function instance()
        {
        }
    }
}
namespace Bricks\Integrations {
    // Exit if accessed directly
    class Block_Editor
    {
        public function __construct()
        {
        }
        /**
         * Register all component blocks
         */
        public function register_blocks()
        {
        }
        /**
         * Register all components as blocks, if enabled for block editor
         */
        public function register_bricks_components_as_blocks()
        {
        }
        /**
         * Register a single component block
         *
         * @param array $component Component data.
         * @return void
         */
        public function register_component_block($component)
        {
        }
        /**
         * Render component block
         *
         * @param array $attributes Block attributes.
         * @return string Rendered HTML.
         */
        public function render_component_block($attributes)
        {
        }
        /**
         * Render component shortcode: [bricks_component id="component_id"]
         *
         * Simplified version that leverages Bricks' native component system
         */
        public function render_component_shortcode($attributes = [])
        {
        }
        /**
         * Scope CSS for Gutenberg editor while preserving root-level declarations
         *
         * Separates CSS that must stay at root level (:root, @font-face, @keyframes)
         * from CSS that should be scoped to .is-root-container
         *
         * @param string $css CSS to scope.
         * @return string Scoped CSS.
         */
        public static function scope_css_for_gutenberg($css)
        {
        }
        /**
         * Get select options from the first connected element with a select control
         *
         * @param array $property    The component property array.
         * @param array $elements    The component elements array.
         * @return array|null The select options array or null if not found.
         */
        public function get_select_options_from_connected_elements($property, $elements)
        {
        }
    }
}
namespace Bricks\Integrations\Dynamic_Data {
    // Exit if accessed directly
    /**
     * Class Dynamic_Data_Parser
     *
     * Parses arguments for dynamic data tags, including filters and key-value pairs.
     */
    class Dynamic_Data_Parser
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Parse the given input string
         *
         * @param string $input The input string to parse.
         * @return array Associative array with 'tag', 'args', and 'original_tag'.
         */
        public function parse($input)
        {
        }
        /**
         * Set the allowed keys for arguments
         * Uses the 'bricks/dynamic_data/allowed_keys' filter to allow modification of the allowed keys.
         *
         * TEXT: @fallback:'Just some text'
         * IMAGE: @fallback-image:123 (Image ID or URL)
         * SANITIZE: @sanitize:false (@since 1.11.1)
         * EXCLUDE: @exclude:q1w2e3,880712 ({active_filters_count @query:'mn9456' @exclude:'q1w2e3,880712'} @since 2.0)
         * START-AT: @start-at:1 (query_loop_index; @since 2.1)
         * PAD: @pad:3 (query_loop_index; @since 2.1)
         * KEY: @key:'title|rendered' (For {query_api} @since 2.1)
         * IS-ARRAY: Only internal user to force array convert to json string in Array loop (@since 2.2)
         * DATE, FROM, TO: @date:'2024-01-01' @from:'Y-m-d' @to:'d/m/Y' (for {format_date}; @since 2.2)
         */
        public function set_allowed_keys()
        {
        }
        /**
         * Get the allowed keys
         *
         * @return array
         *
         * @since 2.0
         */
        public static function get_allowed_keys()
        {
        }
    }
}
namespace Bricks\Integrations\Dynamic_Data\Providers {
    // Exit if accessed directly
    interface Provider_Interface
    {
        const CONTEXT_TEXT = 'text';
        const CONTEXT_LINK = 'link';
        const CONTEXT_IMAGE = 'image';
        const CONTEXT_VIDEO = 'video';
        // Deprecated
        const CONTEXT_MEDIA = 'media';
        // Used by audio, maybe in future will replace video and image (should return an array of media Ids and/or URLs)
        const CONTEXT_LOOP = 'loop';
    }
    // Exit if accessed directly
    abstract class Base implements \Bricks\Integrations\Dynamic_Data\Providers\Provider_Interface
    {
        /**
         * Provider name
         *
         * @var string
         */
        protected $name;
        /**
         * Holds the Tags instances for this provider's tags
         *
         * @var array
         */
        public $tags = [];
        /**
         * Holds the tags to be used in the Query Loop control (e.g. Repeater, Relationship...)
         *
         * @var array
         */
        public $loop_tags = [];
        /**
         * The Contructor
         *
         * @param string $name Provider name.
         */
        public function __construct($name)
        {
        }
        /**
         * Useful to the check if the provider should be loaded or not.
         *
         * @return boolean
         */
        public static function load_me()
        {
        }
        /**
         * This method loads the tags of this provider
         *
         * @return void
         */
        public function register_tags()
        {
        }
        /**
         * Getter for the list of tags instance of this provider
         *
         * @return array
         */
        public function get_tags()
        {
        }
        /**
         * Get the tag value based on the context
         *
         * @param string  $tag
         * @param WP_Post $post
         * @param array   $args
         * @param string  $context text, link, image, media.
         * @return array|string
         */
        public function get_tag_value($tag, $post, $args, $context)
        {
        }
        /**
         * Calculate dynamic data filters according to the args received
         *
         * @param array $args
         * @return array
         */
        public function get_filters_from_args($args)
        {
        }
        /**
         * Format the dynamic data value according to the context
         *
         * @param string|integer $value
         * @param string         $tag
         * @param int            $post_id
         * @param array          $filters
         * @param string         $context
         * @return string|array
         */
        public function format_value_for_context($value, $tag, $post_id, $filters, $context = 'text')
        {
        }
        /**
         * Format value for the text context
         *
         * @param string|integer $value
         * @param string         $tag
         * @param int            $post_id
         * @param array          $filters
         *
         * @return string
         */
        public function format_value_for_text($value, $tag, $post_id, $filters)
        {
        }
        /**
         * Expand the wp_kses_post sanitization function to allow iframe HTML tags
         *
         * @param array  $tags
         * @param string $context
         * @return array
         */
        public function expand_allowed_html($tags, $context)
        {
        }
        /**
         * Adds the loop fields to the Query Loop builder
         *
         * @param array $control_options
         * @return array
         */
        public function add_control_options($control_options)
        {
        }
        /**
         * Should be overridden by the provider if needed
         *
         * @param array $results
         * @param Query $query
         * @return array
         */
        public function set_loop_query($results, $query)
        {
        }
        /**
         * Should be overridden by the provider if needed
         *
         * @param array  $loop_object
         * @param string $loop_key
         * @param Query  $query
         * @return array
         */
        public function set_loop_object($loop_object, $loop_key, $query)
        {
        }
        /**
         * Returns the value of a specific array key
         *
         * @param any   $value
         * @param array $filters
         *
         * @return string
         *
         * @since 1.8
         */
        public function return_array_value($value, $filters)
        {
        }
    }
    // Exit if accessed directly
    class Provider_Acf extends \Bricks\Integrations\Dynamic_Data\Providers\Base
    {
        /**
         * This method will be called before the provider is registered
         * Not relying on the load_me() method to avoid unnecessary checks.
         *
         * @since 1.11
         */
        public static function required_hooks()
        {
        }
        public static function load_me()
        {
        }
        public function register_tags()
        {
        }
        /**
         * Collect nested parent group field name and locations
         * To be used in get_acf_group_field_value()
         *
         * @since 1.9.1
         *
         * @param array $data
         * @param array $parent_field
         *
         * @return array
         */
        public function get_nested_parent_group_field_data($data = [], $parent_field = [])
        {
        }
        public function register_tag($field, $parent_field = [], $parent_tag = [])
        {
        }
        /**
         * Register dynamic functions tags
         *
         * @since 1.6.2
         */
        public function register_dynamic_function_tag()
        {
        }
        public static function get_fields()
        {
        }
        public static function get_fields_locations($group)
        {
        }
        /**
         * Get tag value main function
         *
         * @param string  $tag The tag name (e.g. acf_my_field).
         * @param WP_Post $post The post object.
         * @param array   $args The dynamic data tag arguments.
         * @param string  $context E.g. text, link, image.
         *
         * @return mixed The tag value.
         */
        public function get_tag_value($tag, $post, $args, $context)
        {
        }
        /**
         * Get the field raw value
         *
         * @param array      $tag The tag name (e.g. acf_my_field).
         * @param int|string $post_id The post ID.
         */
        public function get_raw_value($tag, $post_id)
        {
        }
        /**
         * Get ACF group field value
         *
         * @since 1.5
         */
        public function get_acf_group_field_value($tag_object, $post_id)
        {
        }
        /**
         * Get ACF field value
         *
         * @param array      $field ACF field settings.
         * @param int|string $post_id The post ID.
         */
        public function get_acf_field_value($field, $post_id)
        {
        }
        /**
         * Process the choice fields to return an array of choice labels
         *
         * @param [type] $value
         * @param [type] $field
         * @param [type] $filters
         */
        public function process_choices_fields($value, $field, $filters)
        {
        }
        public function process_google_map_field($value, $field)
        {
        }
        /**
         * Process the icon picker field
         *
         * @since 2.0
         *
         * @param [type] $value
         * @param [type] $field
         * @param [type] $filters
         */
        public function process_icon_picker_field($value, $field, $context, $filters)
        {
        }
        /**
         * Calculate the object ID to be used when fetching the field value
         *
         * @param array $field
         * @param int   $post_id
         */
        public function get_object_id($field, $post_id)
        {
        }
        /**
         * Set the loop query if exists
         *
         * @param array $results
         * @param Query $query
         * @return array
         */
        public function set_loop_query($results, $query)
        {
        }
        /**
         * Manipulate the loop object
         *
         * @param array  $loop_object
         * @param string $loop_key
         * @param Query  $query
         * @return array
         */
        public function set_loop_object($loop_object, $loop_key, $query)
        {
        }
        public static function flush_cache($post_id)
        {
        }
        /**
         * Retrieve all registered tags which are supported in WP_Query post__in parameter
         *
         * @since 1.12
         */
        public function get_query_supported_tags()
        {
        }
        /**
         * Retrieve all registered tags which are supported "Results Filter" (Array conditions)"
         * - Repeater fields
         *
         * @since 2.2
         */
        public function get_array_supported_tags()
        {
        }
    }
    // Exit if accessed directly
    class Provider_Cmb2 extends \Bricks\Integrations\Dynamic_Data\Providers\Base
    {
        public static function load_me()
        {
        }
        public function register_tags()
        {
        }
        public static function get_fields()
        {
        }
        /**
         * Helper function to map raw field object to internal format
         *
         * @param array $list Final list.
         * @param array $fields raw.
         *
         * @return array
         */
        public static function add_fields_to_list($list = [], $fields = [])
        {
        }
        public function get_tag_value($tag, $post, $args, $context)
        {
        }
    }
    // Exit if accessed directly
    class Provider_Jetengine extends \Bricks\Integrations\Dynamic_Data\Providers\Base
    {
        public static function load_me()
        {
        }
        public function register_tags()
        {
        }
        public function register_tag($field, $parent_field = [])
        {
        }
        public static function get_fields()
        {
        }
        public function register_relationships()
        {
        }
        public function get_tag_value($tag, $post, $args, $context)
        {
        }
        public function get_raw_value($tag, $post_id)
        {
        }
        public function get_jetengine_value($field, $post_id)
        {
        }
        /**
         * Calculate the object to be used when fetching the field value
         *
         * @param array $field
         * @param int   $post_id
         * @return WP_Term|WP_User|WP_Post
         */
        public function get_object($field, $post_id)
        {
        }
        /**
         * Set the loop query if exists
         *
         * @param array $results
         * @param Query $query
         * @return array
         */
        public function set_loop_query($results, $query)
        {
        }
        /**
         * Manipulate the loop object
         *
         * @param array  $loop_object
         * @param string $loop_key
         * @param Query  $query
         * @return array
         */
        public function set_loop_object($loop_object, $loop_key, $query)
        {
        }
        /**
         * Retrieve all registered tags which are supported in WP_Query post__in parameter
         * #86c4y979u
         *
         * @since 2.2
         */
        public function get_query_supported_tags()
        {
        }
    }
    // Exit if accessed directly
    class Provider_Metabox extends \Bricks\Integrations\Dynamic_Data\Providers\Base
    {
        public static function load_me()
        {
        }
        public function register_tags()
        {
        }
        public function register_tag($field = [], $parent_field = [], $parent_dd_tag = '')
        {
        }
        public static function get_fields()
        {
        }
        public function register_relationships()
        {
        }
        public function get_tag_value($tag, $post, $args, $context)
        {
        }
        public function get_raw_value($tag, $post_id)
        {
        }
        /**
         * Calculate the object ID to be used when fetching the field value
         *
         * @param array $field
         * @param int   $post_id
         */
        public function get_object_id($field, $post_id)
        {
        }
        /**
         * Set the loop query if exists
         *
         * @param array $results
         * @param Query $query
         * @return array
         */
        public function set_loop_query($results, $query)
        {
        }
        /**
         * Manipulate the loop object
         *
         * @param array  $loop_object
         * @param string $loop_key
         * @param Query  $query
         * @return array
         */
        public function set_loop_object($loop_object, $loop_key, $query)
        {
        }
        /**
         * Inside Query Loop: Change $post value so it could be used inside of the MB view
         *
         * @since 1.5.3
         */
        public static function mb_views_post_data($data, $twig)
        {
        }
        /**
         * Retrieve all registered tags which are supported in WP_Query post__in parameter
         *
         * @since 1.12
         */
        public function get_query_supported_tags()
        {
        }
        /**
         * Retrieve icon by value, from icon field type
         *
         * @since 2.0
         */
        public static function get_icon($field, $value)
        {
        }
        /**
         * Retrieve all icons used for icon field type
         *
         * @return array of icons
         *      - Option 1: ['name' => 'icon-name', 'icon' => '<i class="fa fa-icon-name"></i>']
         *      - Option 2: ['name' => 'icon-name', 'svg' => '<svg>...</svg>']
         *
         * @since 2.0
         */
        public static function get_available_icons($field, $value)
        {
        }
    }
    // Exit if accessed directly
    class Provider_Pods extends \Bricks\Integrations\Dynamic_Data\Providers\Base
    {
        public static function load_me()
        {
        }
        public function register_tags()
        {
        }
        public static function get_fields()
        {
        }
        public function get_tag_value($tag, $post, $args, $context)
        {
        }
        /**
         * Convert the Pod's date, time and datetime formats to PHP date formats
         *
         * @since 1.9.3
         */
        public static function convert_to_proper_php_format($format)
        {
        }
        /**
         * Get the field value
         *
         * @param array $field
         * @param int   $post_id
         * @param array $filters
         *
         * @since 1.5.2
         */
        public function get_raw_value($field, $post_id, $filters = [])
        {
        }
        /**
         * Calculate the object ID to be used when fetching the field value
         *
         * @since 1.5.2
         *
         * @param array $field
         * @param int   $post_id
         * @return mixed
         */
        public function get_object_id($field, $post_id)
        {
        }
    }
    // Exit if accessed directly
    class Provider_Toolset extends \Bricks\Integrations\Dynamic_Data\Providers\Base
    {
        public static function load_me()
        {
        }
        public function register_tags()
        {
        }
        public static function get_fields()
        {
        }
        public function get_tag_value($tag, $post, $args, $context)
        {
        }
    }
    // Exit if accessed directly
    class Provider_Woo extends \Bricks\Integrations\Dynamic_Data\Providers\Base
    {
        public static function load_me()
        {
        }
        public function register_tags()
        {
        }
        public function get_tags_config()
        {
        }
        /**
         * Main function to render the tag value for WooCommerce provider
         *
         * @param [type] $tag
         * @param [type] $post
         * @param [type] $args
         * @param [type] $context
         */
        public function get_tag_value($tag, $post, $args, $context)
        {
        }
        public function get_order()
        {
        }
        /**
         * Same function as in WooCommerce wc_get_stock_html() but with the last resort calculation for variable products when the stock is managed at the variation level
         *
         * @since 1.5.7
         */
        public function get_stock_html($product)
        {
        }
        /**
         * Get the "Add to cart" button html
         *
         * @param WP_Product $product
         * @param array      $filters
         */
        public function get_add_to_cart_value($product, $filters, $context)
        {
        }
        /**
         * {woo_product_images} and {woo_product_gallery_images} are supported in query loops post__in parameter
         *
         * @since 2.2
         */
        public function get_query_supported_tags()
        {
        }
    }
    // Exit if accessed directly
    class Provider_Wp extends \Bricks\Integrations\Dynamic_Data\Providers\Base
    {
        public function register_tags()
        {
        }
        public function get_tags_config()
        {
        }
        /**
         * Returns a list of post meta keys (uses $post context)
         *
         * @return array
         */
        public function get_post_meta_keys()
        {
        }
        /**
         * Main function to render the tag value for WordPress provider
         *
         * @param [type] $tag
         * @param [type] $post
         * @param [type] $args
         * @param [type] $context
         */
        public function get_tag_value($tag, $post, $args, $context)
        {
        }
        /**
         * Perform the do_action() callback and return the value
         *
         * Example: {do_action:woocommerce_before_single_product}
         *
         * NOTE: It's not supported to pass arguments to the action as different actions can have different arguments.
         *
         * @since 1.7
         */
        public function get_do_action_callback_value($filters, $context, $post)
        {
        }
        public function get_echo_callback_value($filters, $context, $post)
        {
        }
        /**
         * Helper function to get the post content
         *
         * @param [type] $post
         */
        public function get_the_content($post)
        {
        }
        /**
         * Render user related data
         *
         * @param [type]  $tag
         * @param WP_User $user
         * @param [type]  $filters
         * @param [type]  $context
         */
        public function get_user_tag_value($tag, $user, $filters, $context)
        {
        }
        /**
         * Render author related meta data
         *
         * Example: Author ID, which isn't available in get_user_meta()
         *
         * @param [type]  $tag
         * @param WP_User $user
         * @param [type]  $filters
         * @param [type]  $context
         *
         * @since 1.9.6
         */
        public function get_author_tag_value($tag, $user, $filters, $context)
        {
        }
        /**
         * Render Post Terms value
         *
         * @param [type] $tag
         * @param [type] $post
         * @param [type] $filters
         * @param [type] $context
         */
        public function get_post_terms_value($tag, $post, $filters, $context)
        {
        }
        public function get_term_tag_value($tag, $filters, $context, $post_id)
        {
        }
    }
}
namespace Bricks\Integrations\Dynamic_Data {
    // Exit if accessed directly
    class Providers
    {
        public function __construct($providers)
        {
        }
        public static function register($providers = [])
        {
        }
        /**
         * Trigger an action when all dynamic data tags are registered
         *
         * @since 2.0
         */
        public function tag_registered()
        {
        }
        /**
         * Get a registered provider
         *
         * @since 1.9.9
         */
        public static function get_registered_provider($provider)
        {
        }
        public function register_providers()
        {
        }
        public function register_tags()
        {
        }
        public function get_tags()
        {
        }
        /**
         * Adds tags to the tags picker list (used in the builder)
         *
         * @param array $tags
         * @return array
         */
        public function add_tags_to_builder($tags)
        {
        }
        /**
         * Dynamic tag exists in $content: Replaces dynamic tag with requested data
         *
         * @param string  $content
         * @param WP_Post $post
         */
        public function render($content, $post, $context = 'text')
        {
        }
        /**
         * Get the value of a dynamic data tag
         *
         * @param string  $tag without curly brackets {}.
         * @param WP_Post $post The post object.
         * @param string  $context text, link, image.
         */
        public function get_tag_value($tag, $post, $context = 'text')
        {
        }
        /**
         * Handle fallbacks for dynamic data tags
         *
         * @since 1.10
         */
        public function handle_fallback($value, $tag, $post_id, $filters, $context)
        {
        }
        public static function render_tag($tag = '', $post_id = 0, $context = 'text', $args = [])
        {
        }
        public static function render_content($content, $post_id = 0, $context = 'text')
        {
        }
        public static function get_dynamic_tags_list()
        {
        }
        /**
         * Get a list of all supported dynamic data tags - for builder
         *
         * @since 1.12
         */
        public static function get_query_supported_tags_list()
        {
        }
        /**
         * Get a list of all supported dynamic data tags that can use Result Filters (array_conditions)
         *
         * @since 2.2
         */
        public static function get_array_supported_tags_list()
        {
        }
    }
}
namespace Bricks\Integrations\Form\Actions {
    // Exit if accessed directly
    abstract class Base
    {
        /**
         * Action name
         *
         * @var string
         */
        protected $name;
        /**
         * The Contructor
         *
         * @param string $name Action name.
         */
        public function __construct($name)
        {
        }
        /**
         * Init action
         *
         * @return void
         */
        public function init_action()
        {
        }
        /**
         * Run action
         *
         * @param Bricks\Integrations\Form\Init $form
         * @return void
         */
        public function run($form)
        {
        }
    }
}
namespace Bricks\Integrations\Form\Actions\Traits {
    /**
     * Shared trait for handling custom fields in form create/update post actions
     *
     * @since 2.2
     */
    trait Custom_Field_Handler
    {
        /**
         * Sanitize meta value based on the specified method
         *
         * @param mixed  $value The value to sanitize.
         * @param string $method The sanitization method.
         * @return mixed The sanitized value.
         */
        private function sanitize_meta_value($value, $method)
        {
        }
        /**
         * Get ACF parent hierarchy for a nested field
         *
         * Handles unlimited nesting levels (group → group → field, etc.)
         *
         * @param string $meta_key Meta key (e.g., 'user_details_payment_card_number')
         * @param int    $post_id  Post ID
         *
         * @return array|false Array with 'root_key' (top-level group field key) and 'path' (array of nested field names), or false if not nested
         *
         * @since 2.2
         */
        private function get_acf_parent_hierarchy($meta_key, $post_id)
        {
        }
        /**
         * Set a value in a nested array structure using a path
         *
         * @param array $array Reference to the array to modify
         * @param array $path  Array of keys representing the path (e.g., ['payment', 'card_number'])
         * @param mixed $value The value to set
         *
         * @since 2.2
         */
        private function set_nested_value(&$array, $path, $value)
        {
        }
        /**
         * Sanitize ACF field value based on field type
         *
         * @param mixed $value       Field value
         * @param array $field_config ACF field configuration
         *
         * @return mixed Sanitized value
         *
         * @since 2.2
         */
        private function sanitize_acf_field_value($value, $field_config)
        {
        }
        /**
         * Sanitize Meta Box field value based on field type
         *
         * @param mixed $value        Field value
         * @param array $field_config Meta Box field configuration
         *
         * @return mixed Sanitized value
         *
         * @since 2.2
         */
        private function sanitize_meta_box_field_value($value, $field_config)
        {
        }
        /**
         * Process post meta with ACF nested group support
         *
         * Handles both ACF and Meta Box fields, grouping nested ACF subfields
         * for batch updates to maintain proper meta key structure.
         *
         * @param array $post_meta Array of meta key => value pairs
         * @param int   $post_id   Post ID
         *
         * @since 2.2
         */
        protected function process_acf_meta_fields($post_meta, $post_id)
        {
        }
    }
}
namespace Bricks\Integrations\Form\Actions {
    // Exit if accessed directly
    class Create_Post extends \Bricks\Integrations\Form\Actions\Base
    {
        use \Bricks\Integrations\Form\Actions\Traits\Custom_Field_Handler;
        /**
         * Create a new post
         *
         * @since 2.1
         */
        public function run($form)
        {
        }
    }
    // Exit if accessed directly
    class Custom extends \Bricks\Integrations\Form\Actions\Base
    {
        /**
         * Custom action
         *
         * @since 1.0
         */
        public function run($form)
        {
        }
    }
    // Exit if accessed directly
    class Email extends \Bricks\Integrations\Form\Actions\Base
    {
        /**
         * Send email
         *
         * @since 1.0
         */
        public function run($form)
        {
        }
        public function get_all_fields($form_settings, $form)
        {
        }
    }
    // Exit if accessed directly
    class Login extends \Bricks\Integrations\Form\Actions\Base
    {
        /**
         * User login
         *
         * @since 1.0
         */
        public function run($form)
        {
        }
    }
    // Exit if accessed directly
    class Lost_Password extends \Bricks\Integrations\Form\Actions\Base
    {
        /**
         * Lost password
         */
        public function run($form)
        {
        }
    }
    // Exit if accessed directly
    class Mailchimp extends \Bricks\Integrations\Form\Actions\Base
    {
        const DB_OPTIONS_KEY = 'bricks_mailchimp_lists';
        public static $url = '';
        public static $args = [];
        public static $api_key = '';
        public static function prepare_request()
        {
        }
        /**
         * Builder: Get list options
         */
        public static function get_list_options()
        {
        }
        /**
         * API request
         *
         * http://developer.mailchimp.com/documentation/mailchimp/guides/get-started-with-mailchimp-api-3/
         * http://developer.mailchimp.com/documentation/mailchimp/reference/overview/
         *
         * @param string $resource What kind of information to request (i.e. 'lists', 'groups' etc.).
         *
         * @since 1.0
         */
        public static function get_response_body($resource)
        {
        }
        /**
         * API request: Get lists and groups
         *
         * @since 1.0 Store lists and groups in options table (previously requested on each builder ControlSelect.vue render)
         * @since 1.0
         */
        public static function sync_lists()
        {
        }
        /**
         * API request: Get list groups (i.e.: 'interest-categories')
         *
         * @since 1.0
         */
        public static function sync_groups($list_id)
        {
        }
        /**
         * Subscribe to list and groups
         *
         * @since 1.0
         */
        public function run($form)
        {
        }
        /**
         * POST request to Mailchimp API
         *
         * @param string $resource
         * @param rray   $args
         *
         * @since 1.0
         */
        public function post($resource, $args)
        {
        }
    }
    // Exit if accessed directly
    class Redirect extends \Bricks\Integrations\Form\Actions\Base
    {
        /**
         * Redirect action
         *
         * @since 1.0
         */
        public function run($form)
        {
        }
    }
    // Exit if accessed directly
    class Registration extends \Bricks\Integrations\Form\Actions\Base
    {
        /**
         * User registration
         *
         * @since 1.0
         */
        public function run($form)
        {
        }
        /**
         * Validate user registration
         *
         * @param array $user_data Array with user data (user_login, user_email, user_pass etc.).
         * @return array|null Returns WP_Error object if validation errors found or null if validation passed.
         *
         * @since 1.0
         */
        public static function validate_registration($user_data)
        {
        }
    }
    class Reset_Password extends \Bricks\Integrations\Form\Actions\Base
    {
        public function run($form)
        {
        }
    }
    // Exit if accessed directly
    class Save_Submission extends \Bricks\Integrations\Form\Actions\Base
    {
        /**
         * Add contact to list
         *
         * @since 1.9.2
         */
        public function run($form)
        {
        }
    }
    // Exit if accessed directly
    class Sendgrid extends \Bricks\Integrations\Form\Actions\Base
    {
        const DB_OPTIONS_KEY = 'bricks_sendgrid_lists';
        public static $api_base_url = 'https://api.sendgrid.com/v3/';
        /**
         * Builder: Get list options
         */
        public static function get_list_options()
        {
        }
        public static function get_api_key()
        {
        }
        /**
         * Get headers
         *
         * https://sendgrid.api-docs.io/v3.0/how-to-use-the-sendgrid-v3-api/api-authentication
         *
         * @return array $headers
         */
        public static function get_headers()
        {
        }
        /**
         * API request: Get lists
         *
         * https://sendgrid.api-docs.io/v3.0/lists/get-all-lists
         *
         * @since 1.0
         */
        public static function sync_lists()
        {
        }
        /**
         * Add contact to list
         *
         * @since 1.0
         */
        public function run($form)
        {
        }
    }
    // Exit if accessed directly
    class Unlock_Password_Protection extends \Bricks\Integrations\Form\Actions\Base
    {
        /**
         * Unlock password protected content
         *
         * @since 1.11.1
         */
        public function run($form)
        {
        }
    }
    // Exit if accessed directly
    class Update_Post extends \Bricks\Integrations\Form\Actions\Base
    {
        use \Bricks\Integrations\Form\Actions\Traits\Custom_Field_Handler;
        /**
         * Update an existing post
         *
         * @since 2.1
         */
        public function run($form)
        {
        }
    }
    // Exit if accessed directly
    class Webhook extends \Bricks\Integrations\Form\Actions\Base
    {
        /**
         * Webhook action
         *
         * @since 2.0
         */
        public function run($form)
        {
        }
    }
}
namespace Bricks\Integrations\Form {
    // Exit if accessed directly
    class Init
    {
        protected $uploaded_files;
        protected $form_settings;
        protected $form_fields;
        protected $form_id;
        protected $post_id;
        protected $results;
        protected static $submission_url_params = [];
        public function __construct()
        {
        }
        /**
         * Element Form: Submit
         *
         * @since 1.0
         */
        public function form_submit()
        {
        }
        /**
         * Set action result
         *
         * type: success OR danger
         *
         * @param array $result
         * @return void
         */
        public function set_result($result)
        {
        }
        /**
         * Getters
         */
        public function get_settings()
        {
        }
        public function get_fields()
        {
        }
        public function get_id()
        {
        }
        public function get_post_id()
        {
        }
        public function get_uploaded_files()
        {
        }
        public function get_results()
        {
        }
        /**
         * Helper function to convert a comma-separated list of file extensions to an array of MIME types
         *
         * @param string $extensions Comma-separated list of file extensions.
         * @return array Array of corresponding MIME types.
         *
         * @since 1.9.3
         */
        public function extensions_to_mime_types($extensions)
        {
        }
        /**
         * Handle with any files uploaded with form
         */
        public function handle_files()
        {
        }
        /**
         * Remove (default), keep uploaded or move files to media library (as attachment)
         *
         * @param string $mode 'early' = Only process attachments for create-post/update-post actions
         *                     'final' = Process all remaining files after actions complete (@since 2.2)
         *
         * @since 1.9.2
         */
        public function handle_uploaded_files($mode = 'final')
        {
        }
        /**
         * Eventually remove uploaded files
         */
        public function remove_files()
        {
        }
        /**
         * Replace any {{field_id}} by the submitted form field content and after renders dynamic data
         *
         * @param string $content
         */
        public function render_data($content, $has_file_properties = false)
        {
        }
        /**
         * Get value of individual form field by field ID
         *
         * @param string $field_id Field ID.
         */
        public function get_field_value($field_id = '')
        {
        }
        /**
         * Get property of file field by field ID
         *
         * @param string $field_id Field ID.
         * @param string $property Property name (name, type, size, id, url).
         *
         * @return string
         * @since 2.2
         */
        public function get_file_field_property($field_id, $property)
        {
        }
        /**
         * Available actions after form submission
         *
         * @return array
         */
        public static function get_available_actions()
        {
        }
        /**
         * Set form submit error messages
         *
         * @param array $error_messages
         *
         * @since 1.7.1
         */
        public function set_error_messages($error_messages)
        {
        }
        /**
         * Validate required fields
         *
         * @param array|string $custom_validation_errors Custom validation errors adding via filter 'bricks_form_validation_errors'.
         *
         * @return array
         *
         * @since 1.7.1
         */
        public function validate_required_fields($custom_validation_errors = [])
        {
        }
        /**
         * Get a specific frontend URL parameter
         * - Used by {url_parameter} DD
         *
         * @param string $parameter
         * @since 1.11
         */
        public static function get_submission_url_param($parameter)
        {
        }
        /**
         * Get ACF field key from meta key
         *
         * Supports nested fields inside groups, repeaters, and flexible content.
         *
         * @since 2.1
         */
        public static function get_acf_field_key_from_meta_key($meta_key = '', $post_id = '', $post_type = '')
        {
        }
        /**
         * Get Meta Box field key from meta key
         *
         * @since 2.1
         */
        public static function get_meta_box_field_key_from_meta_key($meta_key, $post_id)
        {
        }
    }
    // Exit if accessed directly
    class Submission_Database
    {
        const DB_TABLE_NAME = 'bricks_form_submissions';
        // Singleton
        public static function get_instance()
        {
        }
        public static function get_table_name()
        {
        }
        public static function check_managed_db_access()
        {
        }
        /**
         * Create custom database table (bricks_form_submissions) to store form submissions
         */
        public static function maybe_create_table()
        {
        }
        /**
         * AJAX callback to drop bricks_form_submissions table
         *
         * Bricks > Settings > General
         */
        public static function drop_table()
        {
        }
        /**
         * AJAX callback to reset bricks_form_submissions table
         *
         * Bricks > Settings > General
         */
        public static function reset_table()
        {
        }
        /**
         * AJAX callback to remove rows of form_id in bricks_form_submissions table
         *
         * Bricks > Form Submissions
         */
        public static function remove_form_id($form_id)
        {
        }
        /**
         * Sanitize the form submission data before inserting into the database
         * - Add created_at value
         */
        public static function sanitize_data($data)
        {
        }
        /**
         * Create new entry in the database
         */
        public static function insert_data($data)
        {
        }
        // Delete single entry from the database
        public static function delete_data($id)
        {
        }
        // Get the post_id column by form_id (latest row)
        public static function get_post_id($form_id)
        {
        }
        // Get total entries count by form_id
        public static function get_entries_count($form_id)
        {
        }
        public static function get_overview_count()
        {
        }
        // Get form name by 'id'
        public static function get_form_name_by_id($form_id)
        {
        }
        /**
         * Get entries
         *
         * If form_id is empty, return all entries grouped by form_id (overview)
         * If form_id is not empty, return all entries with the form_id
         */
        public static function get_entries($args = [])
        {
        }
        /**
         * Check if the form submission is a duplicated entry
         *
         * @param string $form_id The form ID
         * @param array  $fields The fields to check against
         * @param array  $submitted_data The submitted data
         * @param array  $ip The IP address
         *
         * @return bool
         */
        public static function is_duplicated_entry($form_id = '', $fields = [], $submitted_data = [], $ip = '')
        {
        }
        // Helper function to get form settings
        public static function get_form_settings($post_id = 0, $form_id = 0, $global_id = 0)
        {
        }
    }
    class Submission_Table extends \WP_List_Table
    {
        const PAGE_NAME = 'bricks-form-submissions';
        const SCREEN_PER_PAGE = 'bricks_page_form_entries_per_page';
        const DELETE_FORM_ENTRIES = 'bricks_delete_form_entries';
        const EXPORT_FORM_ENTRIES = 'bricks_export_form_entries';
        public $view;
        public $form_id;
        public $submission_db;
        public $query_args;
        public function __construct()
        {
        }
        // Add screen options
        public static function add_screen_options()
        {
        }
        // Set screen options so it will be saved in user meta
        public static function set_screen_option($status, $option, $value)
        {
        }
        // Set screen columns for user to hide/show
        public static function screen_columns($header_columns)
        {
        }
        // Define your columns
        public function get_columns()
        {
        }
        // Display data for each column
        public function column_default($item, $column_name)
        {
        }
        // Checkbox column (screen: Entries)
        public function column_cb($item)
        {
        }
        // Column: entries (screen: Overview)
        public function column_entries($item)
        {
        }
        // Column: actions (screen: Overview)
        public function column_actions($item)
        {
        }
        // Column: form_id
        public function column_form_id($item)
        {
        }
        // Column: form_name
        public function column_form_name($item)
        {
        }
        // Column: created_at (Datetime)
        public function column_created_at($item)
        {
        }
        public function column_id($item)
        {
        }
        // Column: post_id
        public function column_post_id($item)
        {
        }
        // Column: browser (Browser)
        public function column_browser($item)
        {
        }
        // Column: ip (IP Address)
        public function column_ip($item)
        {
        }
        // Column: os (Operating System)
        public function column_os($item)
        {
        }
        // Column: referrer (Referrer)
        public function column_referrer($item)
        {
        }
        // Column: user_id
        public function column_user_id($item)
        {
        }
        // Info column (not in use)
        public function column_info($item)
        {
        }
        // Prepare data for display
        public function prepare_items()
        {
        }
        // Display page title
        public function display_page_title()
        {
        }
        // Display the top bar
        public function display_top_bar()
        {
        }
        // Bulk actions
        public function get_bulk_actions()
        {
        }
        /**
         * Handle custom actions
         * - Delete form entries
         * - Export form entries as CSV
         * Currently called in admin.php before add_submenu_page
         * Otherwise the admin notice will not show as the class is not instantiated yet
         */
        public static function handle_custom_actions()
        {
        }
    }
}
namespace Bricks\Integrations\Instagram {
    // Exit if accessed directly
    class Instagram
    {
        public function __construct()
        {
        }
        /**
         * Add a custom schedule (every 20 days)
         *
         * @param array $schedules
         * @return array
         *
         * @since 1.9.8
         */
        public function add_cron_schedules($schedules)
        {
        }
        /**
         * Maybe schedule monthly cron job to refresh Instagram access token
         *
         * @since 1.9.8
         */
        public function schedule_access_token_refresh()
        {
        }
        /**
         * Refresh Instagram access token
         *
         * https://developers.facebook.com/docs/instagram-basic-display-api/guides/long-lived-access-tokens/
         *
         * @since 1.9.8
         */
        public static function refresh_access_token()
        {
        }
    }
}
namespace Bricks {
    // Exit if accessed directly
    class Polylang_Language_Switcher extends \Bricks\Element
    {
        public $category = 'polylang';
        public $name = 'polylang-language-switcher';
        public $icon = 'fas fa-language';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
}
namespace Bricks\Integrations\Polylang {
    // Exit if accessed directly
    class Polylang
    {
        public static $is_active = false;
        public function __construct()
        {
        }
        /**
         * Register global settings strings for translation
         *
         * @param mixed $old_value The old option value.
         * @param mixed $value     The new option value.
         *
         * @since 2.2
         */
        public function register_global_settings_strings($old_value, $value)
        {
        }
        /**
         * Translate global settings string
         *
         * @param string $value
         * @return string
         */
        public function translate_global_settings_string($value)
        {
        }
        /**
         * init or rest_api_init is too early and causing Poylang no language set, use rest_pre_dispatch which will run after rest_api_init and before callback.
         *
         * #86c3htjt0
         *
         * @since 2.0.2
         */
        public function register_hook($hook)
        {
        }
        /**
         * Add language code to export template args
         *
         * @since 1.10
         */
        public function add_export_template_arg($args, $post_id)
        {
        }
        /**
         * Add language query var to cache key to avoid cache conflicts
         *
         * @since 1.9.9
         */
        public function add_template_language_cache_key($cache_key)
        {
        }
        /**
         * Add language to query loop cache key. (When enabled cacheQueryLoops)
         *
         * @since 2.3.2
         */
        public function add_query_language_cache_key($cache_key, $query)
        {
        }
        /**
         * Add language query var when getting templates
         *
         * @since 1.9.9
         */
        public function add_template_language_query_var($args)
        {
        }
        /**
         * Add current language to cache key
         * Unable to use get_locale() in API endpoint
         *
         * @since 1.12.2
         */
        public function get_all_templates_cache_key($cache_key)
        {
        }
        /**
         * Add language query var when getting all templates (database.php)
         *
         * @since 1.12.2
         */
        public function polylang_get_all_templates_args($query_args)
        {
        }
        /**
         * Add language query var
         *
         * @since 1.9.9
         */
        public function add_language_query_var($query_vars, $settings, $element_id)
        {
        }
        public function wp_enqueue_scripts()
        {
        }
        /**
         * Output jQuery AJAX prefilter in the builder to inject Polylang's pll_ajax_backend parameter
         *
         * Polylang uses pll_ajax_backend to distinguish admin AJAX requests from frontend ones.
         * Without this parameter, media library AJAX requests from the builder are treated as frontend
         * requests, which prevents language filtering and the per-attachment language dropdown.
         *
         * @see PLL_Admin_Base::admin_print_footer_scripts() in Polylang
         * @see Polylang::is_ajax_on_front() for how pll_ajax_backend is checked
         *
         * @since 2.3.2
         */
        public function builder_polylang_ajax_prefilter()
        {
        }
        /**
         * Copy Bricks' post metas when duplicating a post
         *
         * @since 1.9.1
         */
        public function copy_bricks_post_metas($metas, $sync, $original_post_id)
        {
        }
        /**
         * Modify Bricks IDs when translating/copy post meta
         *
         * @since 1.12.2
         */
        public function unique_bricks_ids($value, $meta_key)
        {
        }
        /**
         * Init Polylang elements
         *
         * polylang-language-switcher
         */
        public function init_elements()
        {
        }
        /**
         * Set the query arg to get all the posts/pages languages
         *
         * @param array $query_args
         * @return array
         */
        public function polylang_get_posts_args($query_args)
        {
        }
        /**
         * Modify the search form action URL to use the home URL
         *
         * @param string $url
         * @return string
         *
         * @since 1.9.4
         */
        public function modify_search_form_home_url($url)
        {
        }
        /**
         * Add language code to post title
         *
         * @param string $title   The original title of the page.
         * @param int    $page_id The ID of the page.
         * @return string The modified title with the language suffix.
         *
         * @since 1.9.4
         */
        public function add_langugage_to_post_title($title, $page_id)
        {
        }
        /**
         * Add language code to term name
         *
         * @param string $name    The original name of the term.
         * @param int    $term_id The ID of the term.
         * @param string $taxonomy The taxonomy of the term.
         * @return string The modified name with the language suffix.
         *
         * @since 1.11
         */
        public function add_language_to_term_name($name, $term_id, $taxonomy)
        {
        }
        /**
         * Get the language code of a post
         *
         * @since 1.10
         */
        public static function get_post_language_code($post_id)
        {
        }
        /**
         * Get the current language code in Polylang.
         *
         * @return string|null The current language code or null if not set.
         *
         * @since 1.9.9
         */
        public static function get_current_language()
        {
        }
        /**
         * Reassign new IDs for filter elements when fixing the filter element DB
         *
         * @since 1.12.2
         */
        public function fix_filter_element_db($handled, $post_id, $template_type)
        {
        }
        /**
         * Insert language code into the element settings
         *
         * @since 1.12.2
         */
        public function set_filter_element_language($data, $element, $post_id)
        {
        }
        /**
         * Exclude the language taxonomy from the term list
         * - Remove pll_xxxx term options from the term list in the builder
         *
         * @since 2.0
         */
        public function term_list_exclude_taxonomy($excluded_taxonomies)
        {
        }
        /**
         * Switch the locale for Bricks API requests
         *
         * @since 2.0
         */
        public function switch_locale($request_data)
        {
        }
        /**
         * Modify the Polylang modify_language_switcher_post_id post ID when in maintenance mode
         *
         * @since 2.0
         */
        public function modify_language_switcher_post_id($args)
        {
        }
        /**
         * Maybe register strings (components, global settings) - only on relevant admin pages
         *
         * Only runs on:
         * - Polylang strings admin page (admin.php?page=mlang_strings)
         *
         * @since 2.2
         */
        public function maybe_register_strings()
        {
        }
        /**
         * Translate a component on-the-fly using Polylang string translations
         *
         * @param array $component The component to translate.
         * @return array The component with translated strings.
         *
         * @since 2.2
         */
        public static function get_translated_component($component)
        {
        }
    }
}
namespace Bricks {
    class Query_API
    {
        // Default to page 1
        public function __construct($settings = [], $elment_id = null, $post_id = 0)
        {
        }
        /**
         * Set API settings and parse dynamic data
         */
        public function set_settings($settings = [])
        {
        }
        /**
         * Make the API request
         */
        public function request()
        {
        }
        /**
         * Get the full API response (ignores response_path)
         */
        public function get_full_response()
        {
        }
        /**
         * Get the extracted data explicitly
         */
        public function get_extracted_data()
        {
        }
        /**
         * Get the response path that was used
         */
        public function get_response_path()
        {
        }
        /**
         * Get total pages based on pagination settings
         */
        public function get_total_pages()
        {
        }
        public function set_pagination($page)
        {
        }
        /**
         * Check if API call was successful
         */
        public function is_success()
        {
        }
        /**
         * Get response headers
         */
        public function get_headers()
        {
        }
        /**
         * Get full response array
         */
        public function get_response()
        {
        }
        /**
         * Static method for quick requests (currently use by the builder in ajax.php)
         */
        public static function make_request($settings = [], $element_id = null, $post_id = 0, $clear_element_cache = false)
        {
        }
        /**
         * Clear cache for this request
         */
        public function clear_cache()
        {
        }
        /**
         * Clear all cache for this element
         */
        public function clear_element_cache()
        {
        }
        /**
         * Check if response is cached
         */
        public function is_cached()
        {
        }
        /**
         * Clear all Query API caches
         */
        public static function clear_all_caches()
        {
        }
    }
    // Exit if accessed directly
    /**
     * Array Query Parser
     *
     * Handles parsing of array strings for query loop functionality.
     * Supports JSON format and custom bracket notation with associative arrays.
     *
     * @since 2.2
     */
    class Query_Array
    {
        public static $is_parsing_array_loop_dd = false;
        // Dynamic data rendering will refer to this flag to add 'is-array' filter to force array values convert to json string
        /**
         * Get array data from query vars
         *
         * This method handles the integration with the Query class
         *
         * @param array $query_vars Query variables
         * @param int   $post_id Post ID for dynamic data rendering
         * @return array Array data for the query
         */
        public static function get_array_data($query_vars, $post_id, $query_instance)
        {
        }
        /**
         * Apply conditions to filter the array
         *
         * @param array $array Array to filter
         * @param array $conditions Conditions to apply
         * @return array Filtered array
         */
        public static function apply_conditions($array, $conditions, $post_id, $query_instance)
        {
        }
        /**
         * Parse array string safely with multiple fallback methods
         *
         * @param string $array_string The array string to parse
         * @return array|false Parsed array or false on failure
         */
        public static function parse($array_string)
        {
        }
    }
}
namespace Bricks\Integrations\Query_Filters {
    // Exit if accessed directly
    class Field_Acf
    {
        protected $name = 'ACF';
        protected $provider_key = 'acf';
        public static $is_active = false;
        public static $actual_meta_keys = [];
        public function __construct()
        {
        }
        /**
         * Retrieve all registered tags from ACF provider
         */
        public function init()
        {
        }
        /**
         * Get the name of the provider
         */
        public function get_name()
        {
        }
        /**
         * Check if the provider is active
         */
        public static function is_active()
        {
        }
        /**
         * Manually register the provider if it's not registered (due to is_admin() check in providers.php)
         */
        public function maybe_register_dd_provider($object_id)
        {
        }
        /**
         * Modify the actual meta key for custom fields
         * When user hit on Regenerate Index button
         * Otherwise the post with the actual meta key will not be indexed
         *
         * @return array
         */
        public function index_args($args, $filter_source, $filter_settings)
        {
        }
        /**
         * Modify the index value based on the field type
         * Generate index rows for a given custom field
         *
         * @return array
         */
        public function custom_field_index_rows($rows, $object_id, $meta_key, $provider, $object_type)
        {
        }
        /**
         * Decide whether to index the post based on the meta key
         * Index the post if the meta key exists
         *
         * @return bool
         */
        public function index_post_meta_exists($index, $post_id, $meta_key, $provider)
        {
        }
        /**
         * Decide whether to index the user based on the meta key
         * Index the user if the meta key exists
         *
         * @return bool
         */
        public function index_user_meta_exists($index, $user_id, $meta_key, $provider)
        {
        }
        /**
         * Modify the meta query for custom fields based on the field type
         *
         * @return array
         */
        public function custom_field_meta_query($meta_query, $filter, $provider, $query_id)
        {
        }
        /**
         * Modify the meta query for filter range element
         *
         * @return array
         */
        public function range_custom_field_meta_query($meta_query, $filter, $provider, $query_id)
        {
        }
        /**
         * Modify the meta query for Filter - datepicker element
         *
         * @return array
         */
        public function datepicker_custom_field_meta_query($meta_query, $filter, $provider, $query_id)
        {
        }
        /**
         * Modify the custom field choices following the ACF field choices
         *
         * Direct update element->choices_source
         */
        public function modify_custom_field_choices($element)
        {
        }
        /**
         * Auto detect the date format for Filter - Datepicker following ACF datepicker field return format
         */
        public function datepicker_date_format($date_format, $provider, $element)
        {
        }
        /**
         * Get the field settings from the dynamic data provider
         *
         * @param string $tag The dynamic data tag
         * @param string $key The key to retrieve from the field settings (optional)
         */
        public function get_field_settings_from_dd_provider($tag, $key = '')
        {
        }
        /**
         * Get the actual meta key from the dynamic data tag
         *
         * @param string $tag The dynamic data tag
         */
        public function get_meta_key_by_dd_tag($tag)
        {
        }
    }
    // Exit if accessed directly
    class Field_Metabox
    {
        protected $name = 'Meta Box';
        protected $provider_key = 'metabox';
        public static $is_active = false;
        public function __construct()
        {
        }
        /**
         * Retrieve all registered tags from Meta Box provider
         */
        public function init()
        {
        }
        /**
         * Get the name of the provider
         */
        public function get_name()
        {
        }
        /**
         * Check if the provider is active
         */
        public static function is_active()
        {
        }
        /**
         * Manually register the provider if it's not registered (due to is_admin() check in providers.php)
         */
        public function maybe_register_dd_provider($object_id)
        {
        }
        /**
         * Modify the actual meta key for custom fields
         * When user hit on Regenerate Index button
         * Otherwise the post with the actual meta key will not be indexed
         *
         * @return array
         */
        public function index_args($args, $filter_source, $filter_settings)
        {
        }
        /**
         * Decide whether to index the post based on the meta key
         * Index the post if the meta key exists
         *
         * @return bool
         */
        public function index_post_meta_exists($index, $post_id, $meta_key, $provider)
        {
        }
        /**
         * Decide whether to index the user based on the meta key
         * Index the user if the meta key exists
         *
         * @return bool
         */
        public function index_user_meta_exists($index, $user_id, $meta_key, $provider)
        {
        }
        /**
         * Modify the index value based on the field type
         * Generate index rows for a given custom field
         *
         * @return array
         */
        public function custom_field_index_rows($rows, $object_id, $meta_key, $provider, $object_type)
        {
        }
        /**
         * Modify the custom field choices following the Metabox field choices
         *
         * Direct update element->choices_source
         */
        public function modify_custom_field_choices($element)
        {
        }
        public function custom_field_meta_query($meta_query, $filter, $provider, $query_id)
        {
        }
        /**
         * Modify the meta query for filter range element
         *
         * @return array
         */
        public function range_custom_field_meta_query($meta_query, $filter, $provider, $query_id)
        {
        }
        /**
         * Modify the meta query for Filter - datepicker element
         *
         * @return array
         */
        public function datepicker_custom_field_meta_query($meta_query, $filter, $provider, $query_id)
        {
        }
        /**
         * Auto detect the date format for Filter - Datepicker following Meta Box field settings
         */
        public function datepicker_date_format($date_format, $provider, $element)
        {
        }
        /**
         * Get field settings from the Metabox provider (Dynamic Data)
         * By doing this, we no need to call rwmb_get_field_settings() as it requires the actual post ID as object ID parameter
         *
         * @param string $tag The dynamic data tag
         * @param string $key The key to retrieve from the field settings
         */
        public function get_field_settings_from_dd_provider($tag, $key = '')
        {
        }
        /**
         * Get the actual meta key from the DD tag
         *
         * @param string $tag The dynamic data tag
         */
        public function get_meta_key_by_dd_tag($tag)
        {
        }
    }
    // Exit if accessed directly
    class Fields
    {
        public static $providers = [];
        public function __construct()
        {
        }
        /**
         * Singleton - Get the instance of this class
         */
        public static function get_instance()
        {
        }
        /**
         * Register the field providers
         *
         * @since 1.12.2
         */
        public function register_providers()
        {
        }
        /**
         * Builder: Retrieve the active provider list
         *
         * @since 1.12.2
         */
        public static function get_active_provider_list()
        {
        }
    }
    // Exit if accessed directly
    class WooCommerce
    {
        public static $cache = [];
        public function __construct()
        {
        }
        /**
         * Singleton - Get the instance of this class
         */
        public static function get_instance()
        {
        }
        /**
         * Add WooCommerce filter controls
         */
        public function add_filter_controls($controls, $element)
        {
        }
        /**
         * Modify WooCommerce rating filtered source
         * - To ensure always return 5 options and match the fixed ratings format
         */
        public function modify_wc_rating_filtered_source($filtered_source, $element)
        {
        }
        /**
         * Set WooCommerce data source
         */
        public function set_wc_data_source($data_source, $element)
        {
        }
        /**
         * Modify WooCommerce count source for wcRating
         */
        public function modify_wc_rating_count_source($count_source, $element)
        {
        }
        /**
         * Validate WooCommerce index job settings
         */
        public function validate_wc_job_settings($validate, $filter_source, $filter_settings)
        {
        }
        /**
         * Arguments for WooCommerce index job
         */
        public function wc_job_index_args($args, $filter_source, $filter_setting, $query_type)
        {
        }
        /**
         * Retrieve the total rows to be indexed for WooCommerce products when adding a new job
         */
        public function get_wc_job_total_rows($rows, $filter_settings, $element_data)
        {
        }
        /**
         * Generate index rows for WooCommerce products
         * - Triggered by the indexer
         */
        public function wc_product_rows($rows, $post, $filter_id, $filter_settings)
        {
        }
        /**
         * Generate index rows for WooCommerce products
         * - Triggered on post save
         */
        public function wc_index_product_on_save($rows, $post_id, $filter_elements)
        {
        }
        public static function generate_wc_field_index_rows($post_id, $wc_field)
        {
        }
        /**
         * Generate query vars for WooCommerce sort filters
         */
        public function wc_sort_query_vars($query_vars, $filter, $query_id, $active_filter_index)
        {
        }
        /**
         * Generate query vars for WooCommerce filters
         */
        public function wc_filter_query_vars($query_vars, $filter, $query_id, $active_filter_index)
        {
        }
    }
}
namespace Bricks\Integrations\Rank_Math {
    // Exit if accessed directly
    class Rank_Math
    {
        public function __construct()
        {
        }
        /**
         * Feed Rank Math with the rendered Bricks data to build the images sitemap
         *
         * @since 1.5.5
         */
        public function add_bricks_content_for_parse_html_images($content, $post_id)
        {
        }
        /**
         * Add Bricks integration with Rank Math to the builder
         *
         * @since 1.3.2
         */
        public function wp_enqueue_scripts($hook_suffix)
        {
        }
        /**
         * Modify the Rank Math description to use Bricks content if needed
         *
         * @since 1.9.6
         */
        public function modify_rank_math_description($description)
        {
        }
    }
}
namespace enshrined\svgSanitize\data {
    /**
     * Class AttributeInterface
     *
     * @package enshrined\svgSanitize\data
     */
    interface AttributeInterface
    {
        /**
         * Returns an array of attributes
         *
         * @return array
         */
        public static function getAttributes();
    }
    /**
     * Class AllowedAttributes
     *
     * @package enshrined\svgSanitize\data
     */
    class AllowedAttributes implements \enshrined\svgSanitize\data\AttributeInterface
    {
        /**
         * Returns an array of attributes
         *
         * @return array
         */
        public static function getAttributes()
        {
        }
    }
}
namespace Bricks\Integrations\Svg_Sanitizer {
    class Allowed_Attributes extends \enshrined\svgSanitize\data\AllowedAttributes
    {
        /**
         * Returns an array of attributes
         *
         * @return array
         */
        public static function getAttributes()
        {
        }
    }
}
namespace enshrined\svgSanitize\data {
    /**
     * Interface TagInterface
     *
     * @package enshrined\svgSanitize\tags
     */
    interface TagInterface
    {
        /**
         * Returns an array of tags
         *
         * @return array
         */
        public static function getTags();
    }
    /**
     * Class AllowedTags
     *
     * @package enshrined\svgSanitize\data
     */
    class AllowedTags implements \enshrined\svgSanitize\data\TagInterface
    {
        /**
         * Returns an array of tags
         *
         * @return array
         */
        public static function getTags()
        {
        }
    }
}
namespace Bricks\Integrations\Svg_Sanitizer {
    class Allowed_Tags extends \enshrined\svgSanitize\data\AllowedTags
    {
        /**
         * Returns an array of tags
         *
         * @return array
         */
        public static function getTags()
        {
        }
    }
}
namespace {
    // autoload_real.php @generated by Composer
    class ComposerAutoloaderInit5aee051ca530786c1bad48b62b8d4b4f
    {
        public static function loadClassLoader($class)
        {
        }
        /**
         * @return \Composer\Autoload\ClassLoader
         */
        public static function getLoader()
        {
        }
    }
}
namespace Composer\Autoload {
    class ComposerStaticInit5aee051ca530786c1bad48b62b8d4b4f
    {
        public static $prefixLengthsPsr4 = array('e' => array('enshrined\svgSanitize\\' => 22));
        public static $prefixDirsPsr4 = array('enshrined\svgSanitize\\' => array(0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src'));
        public static $classMap = array('Composer\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php');
        public static function getInitializer(\Composer\Autoload\ClassLoader $loader)
        {
        }
    }
}
namespace enshrined\svgSanitize\data {
    class XPath extends \DOMXPath
    {
        const DEFAULT_NAMESPACE_PREFIX = 'svg';
        /**
         * @var string
         */
        protected $defaultNamespaceURI;
        public function __construct(\DOMDocument $doc)
        {
        }
        /**
         * @param string $nodeName
         * @return string
         */
        public function createNodeName($nodeName)
        {
        }
        protected function handleDefaultNamespace()
        {
        }
        /**
         * @return \DOMElement[]
         */
        protected function getRootElements()
        {
        }
    }
}
namespace enshrined\svgSanitize\ElementReference {
    class Resolver
    {
        /**
         * @var XPath
         */
        protected $xPath;
        /**
         * @var Subject[]
         */
        protected $subjects = [];
        /**
         * @var array DOMElement[]
         */
        protected $elementsToRemove = [];
        /**
         * @var int
         */
        protected $useNestingLimit;
        public function __construct(\enshrined\svgSanitize\data\XPath $xPath, $useNestingLimit)
        {
        }
        public function collect()
        {
        }
        /**
         * Resolves one subject by element.
         *
         * @param \DOMElement $element
         * @param bool $considerChildren Whether to search in Subject's children as well
         * @return Subject|null
         */
        public function findByElement(\DOMElement $element, $considerChildren = false)
        {
        }
        /**
         * Resolves subjects (plural!) by element id - in theory malformed
         * DOM might have same ids assigned to different elements and leaving
         * it to client/browser implementation which element to actually use.
         *
         * @param string $elementId
         * @return Subject[]
         */
        public function findByElementId($elementId)
        {
        }
        /**
         * Collects elements having `id` attribute (those that can be referenced).
         */
        protected function collectIdentifiedElements()
        {
        }
        /**
         * Processes references from and to elements having `id` attribute concerning
         * their occurrence in `<use ... xlink:href="#identifier">` statements.
         */
        protected function processReferences()
        {
        }
        /**
         * Determines and tags infinite loops.
         */
        protected function determineInvalidSubjects()
        {
        }
        /**
         * Get all the elements that caused a nesting exception.
         *
         * @return array
         */
        public function getElementsToRemove()
        {
        }
        /**
         * The Subject is invalid for some reason, therefore we should
         * remove it and all it's child usages.
         *
         * @param Subject $subject
         */
        protected function markSubjectAsInvalid(\enshrined\svgSanitize\ElementReference\Subject $subject)
        {
        }
    }
    class Subject
    {
        /**
         * @var \DOMElement
         */
        protected $element;
        /**
         * @var Usage[]
         */
        protected $useCollection = [];
        /**
         * @var Usage[]
         */
        protected $usedInCollection = [];
        /**
         * @var int
         */
        protected $useNestingLimit;
        /**
         * Subject constructor.
         *
         * @param \DOMElement $element
         * @param int         $useNestingLimit
         */
        public function __construct(\DOMElement $element, $useNestingLimit)
        {
        }
        /**
         * @return \DOMElement
         */
        public function getElement()
        {
        }
        /**
         * @return string
         */
        public function getElementId()
        {
        }
        /**
         * @param array $subjects   Previously processed subjects
         * @param int   $level      The current level of nesting.
         * @return bool
         * @throws \enshrined\svgSanitize\Exceptions\NestingException
         */
        public function hasInfiniteLoop(array $subjects = [], $level = 1)
        {
        }
        /**
         * @param Subject $subject
         */
        public function addUse(\enshrined\svgSanitize\ElementReference\Subject $subject)
        {
        }
        /**
         * @param Subject $subject
         */
        public function addUsedIn(\enshrined\svgSanitize\ElementReference\Subject $subject)
        {
        }
        /**
         * @param bool $accumulated
         * @return int
         */
        public function countUse($accumulated = false)
        {
        }
        /**
         * @return int
         */
        public function countUsedIn()
        {
        }
        /**
         * Clear the internal arrays (to free up memory as they can get big)
         * and return all the child usages DOMElement's
         *
         * @return array
         */
        public function clearInternalAndGetAffectedElements()
        {
        }
    }
    class Usage
    {
        /**
         * @var Subject
         */
        protected $subject;
        /**
         * @var int
         */
        protected $count;
        /**
         * @param Subject $subject
         * @param int $count
         */
        public function __construct(\enshrined\svgSanitize\ElementReference\Subject $subject, $count = 1)
        {
        }
        /**
         * @param int $by
         */
        public function increment($by = 1)
        {
        }
        /**
         * @return Subject
         */
        public function getSubject()
        {
        }
        /**
         * @return int
         */
        public function getCount()
        {
        }
    }
}
namespace enshrined\svgSanitize\Exceptions {
    class NestingException extends \Exception
    {
        /**
         * @var \DOMElement
         */
        protected $element;
        /**
         * NestingException constructor.
         *
         * @param string           $message
         * @param int              $code
         * @param Exception|null   $previous
         * @param \DOMElement|null $element
         */
        public function __construct($message = "", $code = 0, \Exception $previous = null, \DOMElement $element = null)
        {
        }
        /**
         * Get the element that caused the exception.
         *
         * @return \DOMElement
         */
        public function getElement()
        {
        }
    }
}
namespace enshrined\svgSanitize {
    class Helper
    {
        /**
         * @param \DOMElement $element
         * @return string|null
         */
        public static function getElementHref(\DOMElement $element)
        {
        }
        /**
         * @param string $href
         * @return string|null
         */
        public static function extractIdReferenceFromHref($href)
        {
        }
        /**
         * @param \DOMElement $needle
         * @param \DOMElement $haystack
         * @return bool
         */
        public static function isElementContainedIn(\DOMElement $needle, \DOMElement $haystack)
        {
        }
    }
    /**
     * Class Sanitizer
     *
     * @package enshrined\svgSanitize
     */
    class Sanitizer
    {
        /**
         * @var \DOMDocument
         */
        protected $xmlDocument;
        /**
         * @var array
         */
        protected $allowedTags;
        /**
         * @var array
         */
        protected $allowedAttrs;
        /**
         * @var
         */
        protected $xmlLoaderValue;
        /**
         * @var bool
         */
        protected $minifyXML = false;
        /**
         * @var bool
         */
        protected $removeRemoteReferences = false;
        /**
         * @var int
         */
        protected $useThreshold = 1000;
        /**
         * @var bool
         */
        protected $removeXMLTag = false;
        /**
         * @var int
         */
        protected $xmlOptions = LIBXML_NOEMPTYTAG;
        /**
         * @var array
         */
        protected $xmlIssues = array();
        /**
         * @var Resolver
         */
        protected $elementReferenceResolver;
        /**
         * @var int
         */
        protected $useNestingLimit = 15;
        /**
         *
         */
        function __construct()
        {
        }
        /**
         * Set up the DOMDocument
         */
        protected function resetInternal()
        {
        }
        /**
         * Set XML options to use when saving XML
         * See: DOMDocument::saveXML
         *
         * @param int  $xmlOptions
         */
        public function setXMLOptions($xmlOptions)
        {
        }
        /**
         * Get XML options to use when saving XML
         * See: DOMDocument::saveXML
         *
         * @return int
         */
        public function getXMLOptions()
        {
        }
        /**
         * Get the array of allowed tags
         *
         * @return array
         */
        public function getAllowedTags()
        {
        }
        /**
         * Set custom allowed tags
         *
         * @param TagInterface $allowedTags
         */
        public function setAllowedTags(\enshrined\svgSanitize\data\TagInterface $allowedTags)
        {
        }
        /**
         * Get the array of allowed attributes
         *
         * @return array
         */
        public function getAllowedAttrs()
        {
        }
        /**
         * Set custom allowed attributes
         *
         * @param AttributeInterface $allowedAttrs
         */
        public function setAllowedAttrs(\enshrined\svgSanitize\data\AttributeInterface $allowedAttrs)
        {
        }
        /**
         * Should we remove references to remote files?
         *
         * @param bool $removeRemoteRefs
         */
        public function removeRemoteReferences($removeRemoteRefs = false)
        {
        }
        /**
         * Get XML issues.
         *
         * @return array
         */
        public function getXmlIssues()
        {
        }
        /**
         * Sanitize the passed string
         *
         * @param string $dirty
         * @return string
         */
        public function sanitize($dirty)
        {
        }
        /**
         * Set up libXML before we start
         */
        protected function setUpBefore()
        {
        }
        /**
         * Reset the class after use
         */
        protected function resetAfter()
        {
        }
        /**
         * Remove the XML Doctype
         * It may be caught later on output but that seems to be buggy, so we need to make sure it's gone
         */
        protected function removeDoctype()
        {
        }
        /**
         * Start the cleaning with tags, then we move onto attributes and hrefs later
         *
         * @param \DOMNodeList $elements
         * @param array        $elementsToRemove
         */
        protected function startClean(\DOMNodeList $elements, array $elementsToRemove)
        {
        }
        /**
         * Only allow attributes that are on the whitelist
         *
         * @param \DOMElement $element
         */
        protected function cleanAttributesOnWhitelist(\DOMElement $element)
        {
        }
        /**
         * Clean the xlink:hrefs of script and data embeds
         *
         * @param \DOMElement $element
         */
        protected function cleanXlinkHrefs(\DOMElement $element)
        {
        }
        /**
         * Clean the hrefs of script and data embeds
         *
         * @param \DOMElement $element
         */
        protected function cleanHrefs(\DOMElement $element)
        {
        }
        /**
         * Only allow whitelisted starts to be within the href.
         *
         * This will stop scripts etc from being passed through, with or without attempting to hide bypasses.
         * This stops the need for us to use a complicated script regex.
         *
         * @param $value
         * @return bool
         */
        protected function isHrefSafeValue($value)
        {
        }
        /**
         * Removes non-printable ASCII characters from string & trims it
         *
         * @param string $value
         * @return bool
         */
        protected function removeNonPrintableCharacters($value)
        {
        }
        /**
         * Does this attribute value have a remote reference?
         *
         * @param $value
         * @return bool
         */
        protected function hasRemoteReference($value)
        {
        }
        /**
         * Should we minify the output?
         *
         * @param bool $shouldMinify
         */
        public function minify($shouldMinify = false)
        {
        }
        /**
         * Should we remove the XML tag in the header?
         *
         * @param bool $removeXMLTag
         */
        public function removeXMLTag($removeXMLTag = false)
        {
        }
        /**
         * Whether `<use ... xlink:href="#identifier">` elements shall be
         * removed in case expansion would exceed this threshold.
         *
         * @param int $useThreshold
         */
        public function useThreshold($useThreshold = 1000)
        {
        }
        /**
         * Check to see if an attribute is an aria attribute or not
         *
         * @param $attributeName
         *
         * @return bool
         */
        protected function isAriaAttribute($attributeName)
        {
        }
        /**
         * Check to see if an attribute is an data attribute or not
         *
         * @param $attributeName
         *
         * @return bool
         */
        protected function isDataAttribute($attributeName)
        {
        }
        /**
         * Make sure our use tag is only referencing internal resources
         *
         * @param \DOMElement $element
         * @return bool
         */
        protected function isUseTagDirty(\DOMElement $element)
        {
        }
        /**
         * Determines whether `<use ... xlink:href="#identifier">` is expanded
         * recursively in order to create DoS scenarios. The amount of a actually
         * used element needs to be below `$this->useThreshold`.
         *
         * @param \DOMElement $element
         * @return bool
         */
        protected function isUseTagExceedingThreshold(\DOMElement $element)
        {
        }
        /**
         * Set the nesting limit for <use> tags.
         *
         * @param $limit
         */
        public function setUseNestingLimit($limit)
        {
        }
    }
}
namespace enshrined\svgSanitize\Tests {
    /**
     * Class AllowedAttributesTest
     */
    class AllowedAttributesTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var AllowedAttributes
         */
        protected $class;
        /**
         * Set up the test class
         */
        public function setUp()
        {
        }
        /**
         * Test that the class implements the interface
         */
        public function testItImplementsTheInterface()
        {
        }
        /**
         * Test that an array is returned
         */
        public function testThatItReturnsAnArray()
        {
        }
    }
    /**
     * Class AllowedTagsTest
     */
    class AllowedTagsTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var AllowedTags
         */
        protected $class;
        /**
         * Set up the test class
         */
        public function setUp()
        {
        }
        /**
         * Test that the class implements the interface
         */
        public function testItImplementsTheInterface()
        {
        }
        /**
         * Test that an array is returned
         */
        public function testThatItReturnsAnArray()
        {
        }
    }
}
namespace enshrined\svgSanitize\Tests\Fixtures {
    class TestAllowedAttributes implements \enshrined\svgSanitize\data\AttributeInterface
    {
        /**
         * Returns an array of attributes
         *
         * @return array
         */
        public static function getAttributes()
        {
        }
    }
    class TestAllowedTags implements \enshrined\svgSanitize\data\TagInterface
    {
        /**
         * Returns an array of tags
         *
         * @return array
         */
        public static function getTags()
        {
        }
    }
}
namespace enshrined\svgSanitize\Tests {
    /**
     * Class SanitizerTest
     */
    class SanitizerTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var Sanitizer
         */
        protected $class;
        /**
         * Set up the test class
         */
        protected function setUp()
        {
        }
        protected function tearDown()
        {
        }
        /**
         * Make sure the initial tags are loaded
         */
        public function testLoadDefaultTags()
        {
        }
        /**
         * Make sure the initial attributes are loaded
         */
        public function testLoadDefaultAttributes()
        {
        }
        /**
         * Test the custom tag setters and getters
         */
        public function testSetCustomTags()
        {
        }
        /**
         * Test the custom attribute setters and getters
         */
        public function testSetCustomAttributes()
        {
        }
        /**
         * Test that malicious elements and attributes are removed from standard XML
         */
        public function testSanitizeXMLDoc()
        {
        }
        /**
         * Test that malicious elements and attributes are removed from an SVG
         */
        public function testSanitizeSVGDoc()
        {
        }
        /**
         * Test that a badly formatted XML document returns false
         */
        public function testBadXMLReturnsFalse()
        {
        }
        /**
         * Make sure that hrefs get sanitized correctly
         */
        public function testSanitizeHrefs()
        {
        }
        /**
         * Make sure that hrefs get sanitized correctly when the xlink namespace is omitted.
         */
        public function testSanitizeHrefsNoXlinkNamespace()
        {
        }
        /**
         * Make sure that external references get sanitized correctly
         */
        public function testSanitizeExternal()
        {
        }
        /**
         * Test that minification of an SVG works
         */
        public function testSanitizeAndMinifiySVGDoc()
        {
        }
        /**
         * Test that ARIA and Data Attributes are allowed
         */
        public function testThatAriaAndDataAttributesAreAllowed()
        {
        }
        /**
         * Test that ARIA and Data Attributes are allowed
         */
        public function testThatExternalUseElementsAreStripped()
        {
        }
        /**
         * Test setXMLOptions and minifying works as expected
         */
        public function testMinifiedOptions()
        {
        }
        /**
         * @test
         */
        public function useRecursionsAreDetected()
        {
        }
        /**
         * @test
         */
        public function infiniteUseLoopsAreDetected()
        {
        }
        /**
         * Make sure that DOS attacks using the <use> element are detected.
         */
        public function testUseDOSattacksAreNullified()
        {
        }
        /**
         * Make sure that DOS attacks using the <use> element are detected,
         * especially when the SVG is extremely large.
         */
        public function testLargeUseDOSattacksAreNullified()
        {
        }
    }
    /**
     * Class SubjectTest
     */
    class SubjectTest extends \PHPUnit\Framework\TestCase
    {
        protected $nestingLimit = 15;
        /**
         * <first>
         *   <!-- 0 -->
         * </first>
         *
         * @test
         */
        public function oneLevelCountsUseIsCorrect()
        {
        }
        /**
         * <first>
         *   <second /> <!-- 1 -->
         *   <second /> <!-- 2 -->
         * </first>
         *
         * @test
         */
        public function twoLevelsCountUseIsCorrect()
        {
        }
        /**
         * <first>
         *   <second>    <!-- accumulated=false: 0; accumulated=true: 1 -->
         *     <third /> <!-- accumulated=false: 1; accumulated=true: 2 -->
         *     <third /> <!-- accumulated=false: 2; accumulated=true: 3 -->
         *     <third /> <!-- accumulated=false: 3; accumulated=true: 4 -->
         *   </second>
         *   <second>    <!-- accumulated=false: 3; accumulated=true: 5 -->
         *     <third /> <!-- accumulated=false: 4; accumulated=true: 6 -->
         *     <third /> <!-- accumulated=false: 5; accumulated=true: 7 -->
         *     <third /> <!-- accumulated=false: 6; accumulated=true: 8 -->
         *   </second>
         * </first>
         *
         * @test
         */
        public function threeLevelsCountUseIsCorrect()
        {
        }
        /**
         * <first>
         * </first>
         *
         * @test
         */
        public function oneLevelCountsUsedInIsCorrect()
        {
        }
        /**
         * <first>
         *   <second /> <!-- 1 -->
         *   <second /> <!-- 2 -->
         * </first>
         *
         * @test
         */
        public function twoLevelsCountUsedInIsCorrect()
        {
        }
        /**
         * <first>
         *   <second>
         *     <third /> <!-- 1 -->
         *     <third /> <!-- 2 -->
         *     <third /> <!-- 3 -->
         *   </second>
         *   <second>
         *     <third /> <!-- 4 -->
         *     <third /> <!-- 5 -->
         *     <third /> <!-- 6 -->
         *   </second>
         * </first>
         *
         * @test
         */
        public function threeLevelsCountUsedInIsCorrect()
        {
        }
    }
}
namespace Bricks {
    // Exit if accessed directly
    class Wpml_Language_Switcher extends \Bricks\Element
    {
        public $category = 'wpml';
        public $name = 'wpml-language-switcher';
        public $icon = 'fas fa-language';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
}
namespace Bricks\Integrations\Wpml {
    // Exit if accessed directly
    class Wpml
    {
        public $wpml_identifier = 'Bricks';
        public static $is_active = false;
        public function __construct()
        {
        }
        /**
         * Register strings for "Components as Blocks" in Gutenberg
         *
         * @param array $strings
         * @param array $block
         *
         * @return array
         *
         * @since 2.2
         */
        public function wpml_found_strings_in_block($strings, $block)
        {
        }
        /**
         * Handle WPML translation completion for component blocks
         * Updates the translated post content with translated component properties
         *
         * @param int    $new_post_id     ID of the translated post.
         * @param array  $fields          Translated fields.
         * @param object $job             Translation job object.
         *
         * @since 2.2
         */
        public function update_translated_post_component_blocks($new_post_id, $fields, $job)
        {
        }
        /**
         * Register global settings strings for translation
         *
         * @param mixed $old_value The old option value.
         * @param mixed $value     The new option value.
         *
         * @since 2.2
         */
        public function register_global_settings_strings($old_value, $value)
        {
        }
        /**
         * Translate global settings string
         *
         * @param string $value
         * @return string
         *
         * @since 2.2
         */
        public function translate_global_settings_string($value)
        {
        }
        /**
         * Handle WPML translation completion ONLY when there are no strings to translate
         * This is a fallback for when wpml_page_builder_register_strings is not triggered
         *
         * @param int    $new_post_id     ID of the translated post.
         * @param array  $fields          Translated fields.
         * @param string $original_post   Original post data.
         *
         * @since 1.12
         */
        public function handle_translation_completed_no_strings($new_post_id, $fields, $original_post)
        {
        }
        /**
         * Check if WPML is currently processing a translation.
         *
         * @return bool True if WPML is processing a translation, false otherwise.
         * @since 1.11
         */
        public static function is_processing_wpml_translation()
        {
        }
        /**
         * Reset the WPML translation processing flag.
         *
         * This method should be called after the translation process is complete and the flag is no longer needed.
         *
         * @since 1.11
         */
        public static function end_processing_wpml_translation()
        {
        }
        /**
         * Add language query var
         *
         * @see https://wpml.org/documentation/support/debugging-theme-compatibility/#issue-custom-non-standard-wordpress-ajax-requests-always-return-the-default-language-content
         * @since 1.9.9
         */
        public function add_language_query_var($query_vars, $settings, $element_id)
        {
        }
        /**
         * Add language to query loop cache key. (When enabled cacheQueryLoops)
         *
         * @since 2.3.2
         */
        public function add_query_language_cache_key($cache_key, $query)
        {
        }
        /**
         * Add language code to export template args
         *
         * @since 1.10
         */
        public function add_export_template_arg($args, $post_id)
        {
        }
        /**
         * Hide the WPML language switcher on specified Bricks admin pages.
         */
        public function hide_wpml_language_switcher_for_bricks()
        {
        }
        /**
         * Check if WPML plugin is active
         *
         * @return boolean
         */
        public static function is_wpml_active()
        {
        }
        /**
         * Init WPML elements
         */
        public function init_elements()
        {
        }
        /**
         * WPML: Add 'suppress_filters' => false query arg to get templates of currently viewed language
         *
         * @param array $query_args
         * @return array
         *
         * @since 1.7
         */
        public function wpml_get_posts_args($query_args)
        {
        }
        /**
         * WMPL: Register 'Bricks' identifier for WPML
         *
         * https://git.onthegosystems.com/glue-plugins/wpml/wpml-page-builders/-/wikis/Integrating-a-page-builder-with-WPML#declaring-support-for-a-page-builder
         *
         * @since 1.8
         */
        public function wpml_page_builder_support_required($plugins)
        {
        }
        /**
         * WPML: Register text strings of Bricks elements for translation in WPML
         *
         * @param \WP_Post|stdClass $post
         * @param array             $package_data
         *
         * @since 1.8
         */
        public function wpml_page_builder_register_strings($post, $package_data)
        {
        }
        /**
         * Translation edited with Bricks (POST 'bricks-is-builder' set)
         *
         * Skip translating this post save.
         *
         * https://git.onthegosystems.com/glue-plugins/wpml/wpml-page-builders/-/wikis/Integrating-a-page-builder-with-WPML#1-the-translation-is-edited-with-the-page-builder-editor-instead-of-a-wpml-translation-editor
         *
         * @param bool $is_translation_with_native_editor
         * @param int  $translated_post_id
         *
         * @since 1.8
         */
        public function wpml_pb_is_editing_translation_with_native_editor($is_translation_with_native_editor, $translated_post_id)
        {
        }
        /**
         * Check if post is built & rendered with Bricks
         *
         * https://git.onthegosystems.com/glue-plugins/wpml/wpml-page-builders/-/wikis/Integrating-a-page-builder-with-WPML#2-the-original-page-or-post-is-not-built-with-the-page-builder
         *
         * @param bool              $is_pb_post
         * @param \WP_Post|stdClass $post
         *
         * @since 1.8
         */
        public function wpml_pb_is_page_builder_page($is_pb_post, $post)
        {
        }
        /**
         * Modify the wp_get_attachment_image_src output to return the translated image src.
         *
         * @param array        $image          The array containing the image src and dimensions.
         * @param int          $attachment_id  The attachment ID.
         * @param string|array $size           Image size.
         *
         * @return array
         */
        public function translate_attachment_image_src($image, $attachment_id, $size)
        {
        }
        /**
         * Translate the attachment ID to the current language's version.
         *
         * @param int $attachment_id
         *
         * @return int
         */
        public function get_translated_attachment_id($attachment_id)
        {
        }
        /**
         * Add language code to post title
         *
         * @param string $title   The original title of the page.
         * @param int    $page_id The ID of the page.
         * @return string The modified title with the language suffix.
         */
        public function add_langugage_to_post_title($title, $page_id)
        {
        }
        /**
         * Add language code to term name
         *
         * @param string $name    The original name of the term.
         * @param int    $term_id The ID of the term.
         * @param string $taxonomy The taxonomy of the term.
         * @return string The modified name with the language suffix.
         *
         * @since 1.11
         */
        public function add_language_to_term_name($name, $term_id, $taxonomy)
        {
        }
        /**
         * Get the language code of a post
         *
         * @since 1.10
         */
        public static function get_post_language_code($post_id)
        {
        }
        /**
         * Get the current language code in WPML
         *
         * @return string|null The current language code or null if not set.
         *
         * @since 1.9.9
         */
        public static function get_current_language()
        {
        }
        /**
         * Get the URL format for WPML
         *
         * @since 1.9.9
         */
        public static function get_url_format()
        {
        }
        /**
         * Filter the builder edit link to include the language code
         *
         * @param string $url The original builder edit URL.
         * @param int    $post_id The post ID.
         * @return string The filtered URL.
         *
         * @since 1.10
         */
        public function filter_builder_edit_link($url, $post_id)
        {
        }
        /**
         * Prefix cache key with get_locale() to ensure correct templates are loaded for different languages
         *
         * @since 1.7.1
         */
        public function get_all_templates_cache_key($cache_key)
        {
        }
        /**
         * Reassign new IDs for filter elements when fixing the filter element DB
         *
         * @since 1.12.2
         */
        public function fix_filter_element_db($handled, $post_id, $template_type)
        {
        }
        /**
         * Insert language code into the element settings
         *
         * @since 1.12.2
         */
        public function set_filter_element_language($data, $element, $post_id)
        {
        }
        /**
         * Switch language based on query filter index job
         * Otherwise, the values of the index records is following the current language set by WPML plugin
         *
         * @since 1.12.2
         */
        public function bricks_execute_filter_index_job($job)
        {
        }
        /**
         * Run WPML hooks to auto-adjust term IDs in Bricks frontend endpoints
         *
         * Adjust queried categories and tags ids according to the language
         *
         * @since 1.12.2
         */
        public function wpml_get_term_adjust_id($request_data)
        {
        }
        /**
         * Register component strings for translation when components are saved
         *
         * @param mixed $old_value The old option value.
         * @param mixed $value     The new option value.
         *
         * @since 2.1
         */
        public function register_components_string_packages($old_value, $value)
        {
        }
        /**
         * Declare string package kind for components
         *
         * @param array $active_string_package_kinds
         * @return array
         *
         * @since 2.1
         */
        public function declare_component_string_package_kind($active_string_package_kinds)
        {
        }
        /**
         * Translate a component on-the-fly using WPML string translations
         *
         * @param array $component The component to translate.
         * @return array The component with translated strings.
         *
         * @since 2.1
         */
        public static function get_translated_component($component)
        {
        }
        /**
         * Switch WPML language for the builder
         *
         * @param string $locale The locale to switch to.
         *
         * @since 2.2
         */
        public function switch_builder_languge($locale)
        {
        }
        /**
         * Translate component block attributes on-the-fly
         *
         * @param array $attributes Block attributes.
         * @param int   $post_id    Current post ID.
         * @return array Translated attributes.
         *
         * @since 2.2
         */
        public static function translate_component_block_attributes($attributes, $post_id)
        {
        }
    }
}
namespace Bricks\Integrations\Yoast {
    // Exit if accessed directly
    class Yoast
    {
        public function __construct()
        {
        }
        /**
         * Add Bricks integration with Yoast SEO to to the Gutenberg editor
         *
         * @since 1.11
         */
        public function wp_enqueue_scripts($hook_suffix)
        {
        }
    }
}
namespace Bricks {
    // Exit if accessed directly
    /**
     * Element and popup interactions
     *
     * @since 1.6
     */
    class Interactions
    {
        public static $global_class_interactions = [];
        public static $control_options = [];
        public function __construct()
        {
        }
        /**
         * Get interaction controls
         *
         * @return array
         *
         * @since 1.6
         */
        public static function get_controls_data()
        {
        }
        /**
         * Set interaction controls once initially
         *
         * @since 1.6.2
         *
         * @return void
         */
        public function set_controls()
        {
        }
        /**
         * Get global classes with interaction settings (once initially) to merge with element setting interactions in add_data_attributes()
         *
         * @since 1.6
         */
        public static function get_global_class_interactions()
        {
        }
        /**
         * Add element interactions via HTML data attributes to element root node
         *
         * Can originate from global class and/or element settings.
         *
         * @since 1.6
         */
        public function add_data_attributes($attributes, $element)
        {
        }
        /**
         * Add template (e.g. popup) interaction settings to template root node
         *
         * @since 1.6
         */
        public function add_to_template_root($attributes, $template_id)
        {
        }
    }
    // Exit if accessed directly
    class License
    {
        public static $license_key = '';
        public static $license_status = '';
        public static $remote_base_url = 'https://bricksbuilder.io/api/commerce/';
        public function __construct()
        {
        }
        /**
         * Check remotely if newer version of Bricks is available
         *
         * @param string $transient Transient for WordPress theme updates.
         */
        public static function check_for_update($transient)
        {
        }
        /**
         * Check license status when loading builder
         *
         * @see template_redirect
         */
        public static function license_is_valid()
        {
        }
        /**
         * Get license status (stored locally in transient: bricks_license_status)
         *
         * If transient has expired (after 168h, or after 48h for temporary remote errors) then get it remotely from Bricks server.
         *
         * @return array
         */
        public static function get_license_status()
        {
        }
        /**
         * Save license status in transient.
         *
         * Temporary remote errors expire after 48 hours. All other statuses expire after 168 hours.
         */
        public static function set_license_status($license_status)
        {
        }
        /**
         * Activate license under "Bricks > License" (AJAX call on "Activate license" click)
         *
         * Also runs via PHP in 'get_license_status' to avoid having to deactivate & reactivate license (when cloning staging site, etc.)
         *
         * @return array
         */
        public static function activate_license()
        {
        }
        /**
         * Deactivate license
         *
         * @return void
         *
         * @since 1.0
         */
        public static function deactivate_license()
        {
        }
        /**
         * Re-validate license
         *
         * Clears the license status transient and re-validates the license without deactivating it.
         *
         * @since 2.1.3
         * @return void
         */
        public static function revalidate_license()
        {
        }
        /**
         * Admin notice to activate license
         *
         * @return null/string
         */
        public static function admin_notices_license_activation()
        {
        }
        /**
         * Admin notice to activate license
         *
         * @return null/string
         */
        public static function admin_notices_license_mismatch()
        {
        }
    }
    // Exit if accessed directly
    class Maintenance
    {
        // Store the original post ID before maintenance mode is applied (Polylang language switcher needs it)
        public function __construct()
        {
        }
        /**
         * Get the current maintenance mode
         */
        public static function get_mode()
        {
        }
        /**
         * Determine whether maintenance mode was applied for the current request.
         *
         * @since 2.3.3
         */
        public static function is_applied()
        {
        }
        /**
         * Initialize and return the Maintenance class
         */
        public static function get_instance()
        {
        }
        /**
         * Determine whether or not to enforce maintenance mode
         */
        public function apply_maintenance_mode()
        {
        }
        /**
         * Flag whether or not a user custom template should be used
         * After checking user capabilities and maintenance mode
         * Should use only after 'wp' action 'apply_maintenance_mode' method
         *
         * @since 1.9.5
         */
        public static function use_custom_template()
        {
        }
        public function set_user_maintenance_template($active_templates)
        {
        }
        /**
         * Get the original post ID before maintenance mode was applied
         *
         * @return int|null
         * @since 2.0
         */
        public static function get_original_post_id()
        {
        }
        public function add_maintenance_mode_indicator_to_admin_bar($admin_bar)
        {
        }
    }
    // Exit if accessed directly
    /**
     * Handling Bricks' password protection logic
     *
     * @since 1.11.1
     */
    class Password_Protection
    {
        /**
         * Populate an empty password protection template with default content
         *
         * @param int $post_id Template post ID.
         * @return bool Whether the template was populated.
         */
        public static function populate_template($post_id)
        {
        }
        /**
         * Determine if the password protection template should be rendered
         *
         * @param int $template_id The ID of the password protection template.
         * @return bool
         */
        public static function is_active($template_id)
        {
        }
        /**
         * Return the protected title format without the default "Protected:" prefix.
         *
         * WordPress passes this to sprintf() with the raw post title; '%s' keeps the title.
         * An empty string would make sprintf() return empty and break dynamic data (e.g. {post_title}).
         *
         * @since 2.3.2
         *
         * @param string         $prepend Default translatable "Protected: %s" prefix.
         * @param \WP_Post|false $post    Optional post object.
         *
         * @return string
         */
        public static function get_wp_protected_title_format($prepend, $post = false)
        {
        }
        /**
         * Check if the user has a valid password cookie.
         *
         * @param int $template_id The ID of the password protection template.
         * @return bool
         */
        public static function get_template_password($template_id)
        {
        }
        /**
         * Validate the submitted password against the template's password.
         *
         * @param int    $template_id
         * @param string $submitted_password
         * @return bool
         */
        public static function validate_password($template_id, $submitted_password)
        {
        }
        /**
         * Set the password cookie for the given template.
         *
         * @param int    $template_id
         * @param string $password
         */
        public static function set_password_cookie($template_id, $password)
        {
        }
        /**
         * Verify that the form exists in the template and is set up for password protection.
         *
         * @param string $form_id
         * @param int    $template_id
         * @return bool
         */
        public static function verify_form_in_template($form_id, $template_id)
        {
        }
        /**
         * Check if a specific template part should be excluded.
         *
         * @param string $template_part The template part to check ('header', 'footer', or 'popup').
         * @param int    $template_id The ID of the password protection template.
         * @return bool Whether the template part should be excluded.
         */
        public static function should_exclude_template_part($template_part, $template_id)
        {
        }
    }
    // Exit if accessed directly
    /**
     * Popups
     *
     * @since 1.6
     */
    class Popups
    {
        public static $controls = [];
        public static $generated_template_settings_inline_css_ids = [];
        public static $looping_popup_html = '';
        public static $ajax_popup_contents = [];
        public static $looping_ajax_popup_ids = [];
        public static $enqueue_ajax_loader = false;
        public function __construct()
        {
        }
        public static function get_controls()
        {
        }
        /**
         * Set popup controls once initially
         *
         * For builder theme style & template settings panel.
         *
         * No need to run on hook as it does not contain any db data.
         */
        public static function set_controls()
        {
        }
        /**
         * Build query loop popup HTML and store under self::$looping_popup_html
         *
         * Render in footer when executing render_popups()
         *
         * Included inline styles.
         *
         * @param int $popup_id
         *
         * @return void
         *
         * @since 1.7.1
         */
        public static function build_looping_popup_html($popup_id)
        {
        }
        /**
         * Generate popup HTML
         *
         * @param int $popup_id
         *
         * @return string
         *
         * @since 1.7.1
         */
        public static function generate_popup_html($popup_id)
        {
        }
        /**
         * Check if there is any popup to render and adds popup HTML to the footer
         *
         * @since 1.6
         *
         * @return void
         */
        public static function render_popups()
        {
        }
    }
    // Exit if accessed directly
    class Query_Filters_Indexer
    {
        const INDEXER_OPTION_KEY = 'bricks_indexer_running';
        public function __construct()
        {
        }
        /**
         * Singleton - Get the instance of this class
         */
        public static function get_instance()
        {
        }
        // Register hooks
        public function register_hooks()
        {
        }
        /**
         * Add a new cron interval every 5 minutes
         */
        public function add_cron_interval($schedules)
        {
        }
        /**
         * Schedule the cron job
         *
         * @since 2.1
         */
        public function schedule_cron_job()
        {
        }
        /**
         * Check if the indexer is running: To avoid multiple indexer and incorrect indexing
         */
        public function indexer_is_running()
        {
        }
        /**
         * Retrieve jobs from the database, and continue indexing them
         * Should be run every 5 minutes, might be triggered manually via do_action( 'bricks_indexer' )
         * Will not do anything if the indexer is already running to avoid multiple indexer and incorrect indexing
         */
        public function continue_index_jobs()
        {
        }
        /**
         * Trigger bricks_indexer action
         * Should be called via wp_remote_post
         */
        public function background_index_job()
        {
        }
        /**
         * Add index job for an element
         * Condition:
         * - If active job exists, do nothing
         */
        public function add_job($element, $remove_active_jobs = false)
        {
        }
        /**
         * Get active job for an element
         */
        public function get_active_job_for_element($filter_id)
        {
        }
        /**
         * Remove job
         */
        public function remove_job($job)
        {
        }
        /**
         * Remove all jobs
         *
         * @since 1.11
         */
        public function remove_all_jobs()
        {
        }
        /**
         * Get all jobs
         */
        public function get_jobs()
        {
        }
        /**
         * Get the progress text for the indexing process
         * - Use in the admin settings page
         */
        public function get_overall_progress()
        {
        }
        /**
         * Check if server resource limits are reached
         * Default: 85% memory usage, and 20s time usage
         * - Majority of servers have 30s time limit, save 10s for other processes
         */
        public static function resource_limit_reached()
        {
        }
        /**
         * Dispatch a background job (unblocking) to reindex query filters
         */
        public static function trigger_background_job()
        {
        }
    }
    // Exit if accessed directly
    class Query_Filters
    {
        const INDEX_TABLE_NAME = 'bricks_filters_index';
        const ELEMENT_TABLE_NAME = 'bricks_filters_element';
        const INDEX_JOB_TABLE_NAME = 'bricks_filters_index_job';
        // @since 1.10
        const DB_CHECK_TRANSIENT = 'bricks_filters_db_check';
        // @since 1.10
        const OPTION_SUFFIX = '_db_version';
        // @since 1.10
        const ELEMENT_DB_VERSION = '1.1';
        // code version @since 1.10
        const INDEX_DB_VERSION = '1.0';
        // code version @since 1.10
        const INDEX_JOB_DB_VERSION = '1.0';
        // @since 1.10
        public static $filter_object_ids = [];
        /**
         * Structure for $active_filters
         * key: query_id
         * value: array of filter_info
         * filter_info: array of filter_id, query_id, settings, value, instance_name (sort_option_info, query_vars, query_type will be added after running generate_query_vars_from_active_filters)
         *
         * @since 1.11
         */
        public static $active_filters = [];
        public static $page_filters = [];
        public static $selected_filters = [];
        // @since 1.11
        public static $query_vars_before_merge = [];
        public static $is_saving_post = false;
        public function __construct()
        {
        }
        /**
         * Singleton - Get the instance of this class
         */
        public static function get_instance()
        {
        }
        public static function get_table_name($table_name = 'index')
        {
        }
        public static function check_managed_db_access()
        {
        }
        /**
         * Create custom database table for storing filter index
         */
        public function maybe_create_tables()
        {
        }
        /**
         * Check if all database tables are updated
         * Used in admin settings page
         *
         * @since 1.10
         */
        public static function all_db_updated()
        {
        }
        /**
         * Check if the required tables exist
         *
         * @since 1.10
         */
        public function tables_check()
        {
        }
        /**
         * Get latest fix_filter_element_db error message.
         *
         * @since 2.3.3
         */
        public function get_fix_filter_element_db_error()
        {
        }
        /**
         * Rebuild the filter element DB
         * - Get all posts with filter elements
         * - Loop through all posts and update the element table
         * - Might be slow on large websites
         * - Allow multilanguage logic to handle the meta_value separately (avoid duplicated element ID)
         *
         * @since 1.12.2
         */
        public function fix_filter_element_db()
        {
        }
        /**
         * Return array of element names that have filter settings.
         *
         * Pagination is one of them but it's filter setting handled in /includes/elements/pagination.php set_ajax_attributes()
         */
        public static function filter_controls_elements()
        {
        }
        /**
         * Dynamic update elements names
         * - These elements will be updated dynamically when the filter AJAX is called
         */
        public static function dynamic_update_elements()
        {
        }
        /**
         * Indexable elements names
         * - These elements will be indexed in the index table
         */
        public static function indexable_elements()
        {
        }
        /**
         * Check if multiple value is supported for the given filter settings
         *
         * @since 2.3
         */
        public static function multiple_value_supported($element_name, $settings)
        {
        }
        /**
         * Force render filter elements in filter API endpoint.
         *
         * Otherwise, filter elements will not be re-rendered in filter API endpoint as element condition fails.
         *
         * @since 1.9.8
         */
        public function filter_element_render($render, $element_instance)
        {
        }
        /**
         * Set page filters manually on wp hook:
         * Example: In archive page, taxonomy page, etc.
         */
        public function set_page_filters_from_wp_query()
        {
        }
        /**
         * Set active filters via URL parameters
         *
         * NOTE: This feature is only available if the element table is updated to 1.1
         *
         * @since 1.11
         */
        public function set_active_filters_from_url()
        {
        }
        /**
         * Generate query vars from active filters (via URL parameters)
         *
         * @since 1.11
         */
        public function add_active_filters_query_vars()
        {
        }
        /**
         * Populate selected_filters from active filters
         * - An array with query_id as key and active_filters' IDs as value
         * - Will be used in the frontent
         *
         * @since 1.11
         */
        public function set_selected_filters_from_active_filters()
        {
        }
        /**
         * Hook into update_post_metadata, if filter element found, update the index table
         */
        public function qf_update_post_metadata($check, $object_id, $meta_key, $meta_value, $prev_value)
        {
        }
        /**
         * If post meta updated (Not via save_post), update the index table
         *
         * @since 2.0.2
         */
        public function handle_post_meta_update($meta_id, $object_id, $meta_key, $meta_value)
        {
        }
        /**
         * Execute index_post for all queued post IDs, then clear the queue.
         *
         * @since 2.3.3
         */
        public function flush_pending_post_indexes()
        {
        }
        /**
         * ACF update attachment via AJAX action acf/fields/gallery/update_attachment
         * It will trigger wp_insert_post but not save_post, so we need to handle it separately
         * Need to set is_saving_post to false otherwise updated_post_meta will not be triggered
         * Note: is_saving_post is used to prevent duplicate index job when saving post
         *
         * @since 2.0.2
         */
        public function edit_attachment($post_id)
        {
        }
        /**
         * Hook into added_post_meta, if filter element found, update the index table
         *
         * @since 1.12.2
         */
        public function qf_added_post_meta($meta_id, $object_id, $meta_key, $meta_value)
        {
        }
        /**
         * Check & update element table structure. (@since 1.11) - Should move to a separate button to trigger the update.
         * Remove index DB table and recreate it. (Ensure index table structure is up-to-date)
         * Retrieve all indexable elements from element table.
         * Index based on the element settings.
         */
        public function reindex()
        {
        }
        /**
         * Generate index records for a given taxonomy
         */
        public static function generate_taxonomy_index_rows($all_posts_ids, $taxonomy)
        {
        }
        /**
         * Remove rows from database
         */
        public static function remove_index_rows($args = [])
        {
        }
        /**
         * Insert rows into database
         */
        public static function insert_index_rows($rows)
        {
        }
        /**
         * Generate index records for a given custom field
         */
        public static function generate_custom_field_index_rows($object_id, $meta_key, $provider = 'none', $object_type = 'post')
        {
        }
        /**
         * Generate index records for a given post field.
         *
         * @param array  $posts Array of post objects
         * @param string $post_field The post field to be used
         */
        public static function generate_post_field_index_rows($post, $post_field)
        {
        }
        public static function generate_user_field_index_rows($user, $user_field)
        {
        }
        public static function generate_term_field_index_rows($term, $term_field)
        {
        }
        /**
         * Set page filters
         *
         * @since 1.11
         */
        public static function set_page_filters($page_filters)
        {
        }
        /**
         * Set active filters
         *
         * @since 1.11
         */
        public static function set_active_filters($filters = [], $post_id = 0, $query_id = '')
        {
        }
        /**
         * Determine if the target query has an active filter-search with nice name "s".
         *
         * #86c92m5v4, #86c86uf21
         *
         * @since 2.3.2
         */
        public static function has_active_filter_search_s($query_id = '')
        {
        }
        /**
         * Only reconcile stale search query vars when:
         * - The query is for posts (not terms or users)
         * - The query has an active filter-search element with nice name "s" (Without filter-search element, we should not consider it as a search query and do not need to reconcile the search query vars)
         *
         * #86c92m5v4, #86c86uf21
         *
         * @since 2.3.2
         */
        public static function should_reconcile_search_query_vars($query_id = '', $object_type = 'post', $filter_query_vars = [])
        {
        }
        /**
         * Convert it to the correct format based on the filter type & sanitize value
         *
         * @since 1.11
         */
        public static function sanitize_filter_value($filter_value, $filter_type, $filter_settings)
        {
        }
        /**
         * Get active filters by element ID
         *
         * @since 1.11
         */
        public static function get_active_filter_by_element_id($element_id = '', $query_id = '')
        {
        }
        /**
         * Generate query vars from active filters
         * active filters - filters that are set by the user
         *
         * @since 1.11
         */
        public static function generate_query_vars_from_active_filters($query_id = '')
        {
        }
        /**
         * Use page_filters to generate tax_query
         * We need this in REST endpoint as we unable to identify which taxonomy is used in the page
         *
         * @since 1.11
         */
        public static function generate_query_vars_from_page_filters()
        {
        }
        /**
         * Identify if the page_filters should be applied in the query_vars
         * Special handling for tax_query
         *
         * @since 1.11
         */
        public static function should_apply_page_filters($query_vars)
        {
        }
        public static function get_selected_sort_option($filter_value, $sort_options)
        {
        }
        /**
         * Updated filters to be used in frontend after each filter ajax request
         */
        public static function get_updated_filters($filters = [], $post_id = 0)
        {
        }
        /**
         * Get filtered data from index table
         */
        public static function get_filtered_data_from_index($filter_id = '', $object_ids = [])
        {
        }
        /**
         * Get all possible object ids from a query
         * To be used in get_filtered_data()
         * Each query_id will only be queried once
         *
         * @param string $query_id
         * @return array $all_object_ids
         */
        public static function get_filter_object_ids($query_id = '', $source = 'history', $additonal_query_vars = [])
        {
        }
        /**
         * Generate index when a post is saved
         */
        public function save_post($post_id, $post)
        {
        }
        /**
         * Remove index when a post is deleted
         * - Also used in maybe_update_element() when no more elements are found in the post (@since 2.0)
         */
        public function delete_post($post_id)
        {
        }
        /**
         * Set is_saving_post to true when a post is assigned to a parent to avoid reindexing
         * Triggered when using wp_insert_post()
         */
        public function wp_insert_post_parent($post_parent, $post_id, $new_postarr, $postarr)
        {
        }
        /**
         * Generate index when a post is assigened to a term
         * Triggered when using wp_set_post_terms() or wp_set_object_terms()
         */
        public function set_object_terms($object_id)
        {
        }
        /**
         * Core function to index a post based on all active indexable filter elements
         *
         * @param int $post_id
         */
        public function index_post($post_id)
        {
        }
        /**
         * Update indexed records when a term is amended (slug, name)
         */
        public function edited_term($term_id, $tt_id, $taxonomy)
        {
        }
        /**
         * Update indexed records when a term is deleted
         */
        public function delete_term($term_id, $tt_id, $taxonomy, $deleted_term)
        {
        }
        public function user_updated($user_id, $old_user_data)
        {
        }
        public function user_register($user_id)
        {
        }
        /**
         * Remove index when a user is deleted
         */
        public function delete_user($user_id)
        {
        }
        /**
         * Core function to index a user based on all active indexable filter elements
         *
         * @since 1.12
         * @param int   $user_id
         * @param array $old_user_data  Old user data before update (for profile_update action)
         */
        public function index_user($user_id, $old_user_data = null)
        {
        }
        public static function set_generating_type($object_type)
        {
        }
        public static function reset_generating_type()
        {
        }
        public static function get_generating_type()
        {
        }
        /**
         * Return true if detected corrupted data for query filters
         *
         * @since 1.12.2
         */
        public static function has_corrupted_db()
        {
        }
        /**
         * Get all active filters count for a query_id
         *
         * Exclude: pagination, empty instance_name, exclude_filters.
         *
         * @since 2.0
         */
        public static function get_active_filters_count($query_id = '', $additional_params = [])
        {
        }
    }
    // Exit if accessed directly
    class Query
    {
        // Component ID (@since 1.12.2)
        public $component_id = '';
        // Instance ID (@since 2.0)
        public $instance_id = '';
        // Element ID
        public $element_id = '';
        // Element name to be used in WooCommerce (@since 1.11.1)
        public $element_name = '';
        // Element settings
        public $settings = [];
        // Query vars
        public $query_vars = [];
        // Type of object queried: 'post', 'term', 'user'
        public $object_type = 'post';
        // Query result (WP_Posts | WP_Term_Query | WP_User_Query | Other)
        public $query_result;
        // Fake query result (@since 1.12.2)
        public $fake_result;
        // Query results total
        public $count = 0;
        // Query results total pages
        public $max_num_pages = 1;
        // Is looping
        public $is_looping = false;
        // When looping, keep the iteration index
        public $loop_index = 0;
        // When looping, keep the object
        public $loop_object = null;
        // Store query history (including those destroyed)
        public static $query_history = [];
        // Store the start position of the query (@since 1.12.2)
        public $start = 0;
        // Store the end position of the query (@since 1.12.2)
        public $end = 0;
        /**
         * Class constructor
         *
         * @param array $element
         */
        public function __construct($element = [])
        {
        }
        /**
         * Get query instance by element ID from the query history
         *
         * @since 1.9.1
         */
        public static function get_query_by_element_id($element_id = '', $is_dynamic_data = false)
        {
        }
        /**
         * Add current query instance to query history
         *
         * @since 1.9.1
         */
        public function add_to_history()
        {
        }
        /**
         * Generate a unique identifier for the query history
         *
         * Use combination of element_id, nested_query_object_type, nested_query_element_id, nested_loop_object_id.
         *
         * @since 1.9.1
         */
        public static function generate_query_history_id($element_id)
        {
        }
        /**
         * Add query to global store
         */
        public function register_query()
        {
        }
        /**
         * Calling unset( $query ) does not destroy query quickly enough
         *
         * Have to call the 'destroy' method explicitly before unset.
         */
        public function __destruct()
        {
        }
        /**
         * Use the destroy method to remove the query from the global store
         *
         * @return void
         */
        public function destroy()
        {
        }
        /**
         * Get the query cache
         *
         * @since 1.5
         *
         * @return mixed
         */
        public function get_query_cache()
        {
        }
        /**
         * Set the query cache
         *
         * @since 1.5
         *
         * @return void
         */
        public function set_query_cache($object)
        {
        }
        /**
         * Prepare query_vars for the Query before running it
         * Remove unwanted keys, set defaults, populate correct query vars, etc.
         * Static method to be used by other classes. (Bricks\Database)
         *
         * @since 1.8
         */
        public static function prepare_query_vars_from_settings($settings = [], $fallback_element_id = '', $element_name = '', $skip_main_query = false)
        {
        }
        /**
         * Perform the query (maybe cache)
         *
         * Set $this->query_result, $this->count, $this->max_num_pages
         *
         * @return void (@since 1.8)
         */
        public function run()
        {
        }
        /**
         * Handle no results situation for post, user and term queries
         * Need to run another query to continue execute the remaining elements inside the query loop.
         * - To ensure necessary element's scripts and styles are enqueued on page load
         * - To ensure necessary AJAX popups are generated and output on page load
         *
         * @since 1.12.2
         */
        public function handle_no_results()
        {
        }
        /**
         * Run WP_Term_Query
         *
         * @see https://developer.wordpress.org/reference/classes/wp_term_query/
         *
         * @return array Terms (WP_Term)
         */
        public function run_wp_term_query()
        {
        }
        /**
         * Run WP_User_Query
         *
         * @see https://developer.wordpress.org/reference/classes/wp_user_query/
         *
         * @return WP_User_Query (@since 1.8)
         */
        public function run_wp_user_query()
        {
        }
        /**
         * Run WP_Query
         *
         * @return object
         */
        public function run_wp_query()
        {
        }
        /**
         * Get the page number for a query based on the query var "paged"
         *
         * @since 1.5
         *
         * @return integer
         */
        public static function get_paged_query_var($query_vars)
        {
        }
        /**
         * Parse the Meta Query vars through the DD logic
         *
         * @Since 1.5
         *
         * @param array $query_vars
         * @return array
         */
        public static function parse_meta_query_vars($query_vars)
        {
        }
        /**
         * Parse the Orderby vars
         *
         * @since 1.11.1
         */
        public static function parse_orderby_vars($query_vars, $object_type)
        {
        }
        /**
         * Set 'tax_query' vars (e.g. Carousel, Posts, Related Posts)
         *
         * Include & exclude terms of different taxonomies
         *
         * @since 1.3.2
         */
        public static function set_tax_query_vars($query_vars)
        {
        }
        /**
         * Set 'post__in' vars
         *
         * @since 1.12
         */
        public static function set_post_in_vars($query_vars)
        {
        }
        /**
         * If post__in and post__not_in are set, correct the query
         *
         * @since 2.0
         */
        public static function post_in_correction($query_vars)
        {
        }
        /**
         * Modifies $query offset variable to make pagination work in combination with offset.
         *
         * @see https://codex.wordpress.org/Making_Custom_Queries_using_Offset_and_Pagination
         * Note that the link recommends exiting the filter if $query->is_paged returns false,
         * but then max_num_pages on the first page is incorrect.
         *
         * @param \WP_Query $query WordPress query.
         */
        public function set_pagination_with_offset($query)
        {
        }
        /**
         * Handle term pagination
         *
         * @since 1.9.8
         */
        public static function get_term_pagination_query_var($query_vars)
        {
        }
        /**
         * Handle user pagination
         *
         * @since 1.12
         */
        public static function get_user_pagination_query_var($query_vars)
        {
        }
        public static function get_array_pagination_query_var($query_vars)
        {
        }
        /**
         * By default, WordPress includes offset posts into the final post count.
         * This method excludes them.
         *
         * @see https://codex.wordpress.org/Making_Custom_Queries_using_Offset_and_Pagination
         * Note that the link recommends exiting the filter if $query->is_paged returns false,
         * but then max_num_pages on the first page is incorrect.
         *
         * @param int       $found_posts Found posts.
         * @param \WP_Query $query WordPress query.
         * @return int Modified found posts.
         */
        public function fix_found_posts_with_offset($found_posts, $query)
        {
        }
        /**
         * Set the initial loop index (needed for the infinite scroll)
         *
         * @since 1.5
         */
        public function init_loop_index()
        {
        }
        /**
         * Main render function
         *
         * @param string  $callback to render each item.
         * @param array   $args callback function args.
         * @param boolean $return_array whether returns a string or an array of all the iterations.
         */
        public function render($callback, $args, $return_array = false)
        {
        }
        public static function parse_dynamic_data($content, $post_id)
        {
        }
        /**
         * Reset the global $post to the parent query or the global $wp_query
         *
         * @since 1.5
         *
         * @return void
         */
        public function reset_postdata()
        {
        }
        /**
         * Get the current Query object
         *
         * @return Query
         */
        public static function get_query_object($query_id = false)
        {
        }
        /**
         * Get the current Query object type
         *
         * @return string
         */
        public static function get_query_object_type($query_id = '')
        {
        }
        /**
         * Get the object of the current loop iteration
         *
         * @return mixed
         */
        public static function get_loop_object($query_id = '')
        {
        }
        /**
         * Get the object ID of the current loop iteration
         *
         * @return mixed
         */
        public static function get_loop_object_id($query_id = '')
        {
        }
        /**
         * Get the object type of the current loop iteration
         *
         * @return mixed
         */
        public static function get_loop_object_type($query_id = '')
        {
        }
        /**
         * Get the current loop iteration index
         *
         * @since 1.10: Add $query_id to get the loop index of a specific query
         *
         * @return mixed
         */
        public static function get_loop_index($query_id = '')
        {
        }
        /**
         * Get a unique identifier for the current looping query
         *
         * @param string $type 'query', 'interaction', 'popup'
         * @return string
         * @since 1.10
         */
        public static function get_looping_unique_identifier($type = 'query')
        {
        }
        /**
         * Check if the render function is looping (in the current query)
         *
         * @param string $element_id Checks if the element_id matches the element that is set to loop (e.g. container).
         *
         * @return boolean
         */
        public static function is_looping($element_id = '', $query_id = '')
        {
        }
        /**
         * Get query object created for a specific element ID
         *
         * @param string $element_id
         * @return mixed
         */
        public static function get_query_for_element_id($element_id = '')
        {
        }
        /**
         * Get element ID of query loop element
         *
         * @param object $query Defaults to current query.
         *
         * @since 1.4
         *
         * @return string|boolean Element ID or false
         */
        public static function get_query_element_id($query = '')
        {
        }
        /**
         * Get component ID of query loop element
         *
         * @since 1.12.2
         */
        public static function get_query_element_component_id($query = '')
        {
        }
        /**
         * Get instance ID of query loop element
         *
         * @since 2.0.2
         */
        public static function get_query_element_instance_id($query = '')
        {
        }
        /**
         * Get the current looping level
         *
         * @return int
         * @since 1.10
         */
        public static function get_looping_level()
        {
        }
        /**
         * Get the direct parent loop ID
         *
         * @since 1.10
         */
        public static function get_parent_loop_id()
        {
        }
        /**
         * Check if there is any active query looping (nested queries) and if yes, return the query ID of the most deep query
         *
         * @return mixed
         */
        public static function is_any_looping()
        {
        }
        /**
         * Convert a list of option strings taxonomy::term_id into a list of term_ids
         */
        public static function convert_terms_to_ids($terms = [])
        {
        }
        public function get_no_results_content()
        {
        }
        /**
         * Insert data-brx-loop-start="$this->element_id" for the first HTML node
         *
         * @param string $content
         * @return string
         * @since 2.0
         */
        public function maybe_add_loop_marker($html)
        {
        }
        /**
         * Check if the query is using random seed
         * Use random seed when: 'orderby' is 'rand' && 'randomSeedTtl' > 0
         * Default: 60 minutes
         *
         * @param array $query_vars
         * @return boolean
         * @since 1.9.8
         */
        public static function use_random_seed($query_vars = [])
        {
        }
        /**
         * Get the random seed statement for the query
         *
         * @param string $element_id
         * @param array  $query_vars
         * @return string
         * @since 1.9.8
         */
        public static function get_random_seed_statement($element_id = '', $query_vars = [])
        {
        }
        /**
         * Use random seed to make sure the order is the same for all queries of the same element
         *
         * The transient is also deleted when the random seed setting inside the query loop control is changed.
         *
         * @param string $order_statement
         * @return string
         * @since 1.7.1
         */
        public function set_bricks_query_loop_random_order_seed($order_statement)
        {
        }
        /**
         * Add DISTINCT to the query or multiple same users might be returned if the user has multiple same key meta values
         * This is a workaround for the issue with the user query and meta query
         *
         * @see wp-includes/class-wp-user-query.php search has_or_relation()
         * @since 1.12
         */
        public function set_distinct_user_query($user_query)
        {
        }
        /**
         * All query arguments that can be set for the archive query
         * https://developer.wordpress.org/reference/classes/wp_query/#parameters
         *
         * @return array
         *
         * @since 1.8
         */
        public static function archive_query_arguments()
        {
        }
        /**
         * All bricks query object types that can be set for the archive query.
         * If there is custom query by user and it might be used as archive query, should be added here.
         *
         * @return array
         *
         * @since 1.8
         */
        public static function archive_query_supported_object_types()
        {
        }
        /**
         * Merge two query vars arrays, instead of using wp_parse_args
         *
         * wp_parse_args will only set those values that are not already set in the original array.
         *
         * @param array $original_query_vars
         * @param array $merging_query_vars
         * @param bool  $meta_query_logic (@since 1.11.1)
         * @return array
         *
         * @see https://developer.wordpress.org/reference/functions/wp_parse_args/
         *
         * @since 1.9.4
         */
        public static function merge_query_vars($original_query_vars = [], $merging_query_vars = [], $meta_query_logic = false)
        {
        }
        /**
         * Special case for merging 'tax_query' and 'meta_query' vars
         *
         * Only merge if the 'taxonomy' or 'key' are identical.
         *
         * @since 1.9.6
         */
        public static function merge_tax_or_meta_query_vars($original_tax_query, $merging_tax_query, $type = 'tax')
        {
        }
        /**
         * Merging filter's orderby vars to the original orderby vars
         *
         * Filter's orderby vars as priority.
         *
         * @since 1.11.1
         */
        public static function merge_query_filter_orderby($original_orderby, $merging_orderby)
        {
        }
        /**
         * Restore original query vars from the frontend (dynamic data parsed)
         *
         * Handle different cases when the original query vars should be restored from the populated query vars
         *
         * Previously, the logic maintained in api.php
         *
         * @since 1.12
         */
        public static function restore_original_query_vars_from_frontend($original_query_vars, $populated_query_vars, $query_object_type)
        {
        }
        /**
         * Run query API
         *
         * @since 2.1
         */
        public function run_query_api_query()
        {
        }
        /**
         * Run array query
         *
         * @since 2.2
         */
        public function run_array_query()
        {
        }
    }
    // Exit if accessed directly
    class Revisions
    {
        /**
         * Bricks-specific revisions for header, content and footer data saved in post meta table
         */
        public function __construct()
        {
        }
        /**
         * Get all revisions of a specific post via AJAX
         *
         * @uses get_revisions()
         *
         * @since 1.0
         */
        public static function ajax_get_revisions()
        {
        }
        /**
         * Get revision data
         *
         * @since 1.0
         */
        public static function ajax_get_revision_data()
        {
        }
        /**
         * Delete specific revision
         *
         * @uses get_revisions()
         *
         * @return array Post revisions.
         *
         * @since 1.0
         */
        public static function ajax_delete_revision()
        {
        }
        /**
         * Delete all revisions of specific post
         *
         * @return array Post revisions.
         *
         * @since 1.0
         */
        public static function ajax_delete_all_revisions_of_post_id()
        {
        }
        /**
         * Get all revisions of a specific post
         *
         * @param int   $post_id
         * @param array $query_args
         *
         * @since 1.0
         */
        public static function get_revisions($post_id, $query_args = [])
        {
        }
        /**
         * Add revisions to all Bricks builder enabled post types
         *
         * @since 1.0
         */
        public static function add_revisions_to_all_bricks_enabled_post_types()
        {
        }
        /**
         * Max. number of revisions to store in db
         *
         * @param int    $num
         * @param string $post
         *
         * @since 1.0
         *
         * @return int
         */
        public static function wp_revisions_to_keep($num, $post)
        {
        }
    }
    // Exit if accessed directly
    class Search
    {
        public function __construct()
        {
        }
        /**
         * Helper: Check if is_search() OR Bricks infinite scroll REST API search results
         *
         * @since 1.5.7
         */
        public function is_search($query)
        {
        }
        /**
         * Search 'posts' and 'postmeta' tables
         *
         * https://adambalee.com/search-wordpress-by-custom-fields-without-a-plugin/
         * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
         *
         * @since 1.3.7
         */
        public function search_postmeta_table($join, $query)
        {
        }
        /**
         * Modify search query
         *
         * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
         *
         * @since 1.3.7
         */
        public function modify_search_for_postmeta($where, $query)
        {
        }
        /**
         * Prevent duplicates
         *
         * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
         *
         * @since 1.3.7
         */
        public function search_distinct($where, $query)
        {
        }
        public static function search_template_has_custom_criteria($template_id)
        {
        }
        public static function get_search_template_criteria_post_ids($template_id, $search_term)
        {
        }
        public static function use_weight_score($template_id)
        {
        }
        /**
         * Perform a combined search on specified post fields and meta fields, returning matching post IDs.
         *
         * @since 2.2
         */
        public static function get_post_ids_by_combined_search($search_fields, $meta_fields, $taxonomy_fields, $search_term, $filter_id, $query_id, $use_weight_score)
        {
        }
        /**
         * Perform a combined search on specified term fields and meta fields, returning matching term IDs.
         *
         * @since 2.2
         */
        public static function get_term_ids_by_combined_search($term_fields, $meta_fields, $search_term, $filter_id, $query_id, $use_weight_score)
        {
        }
        /**
         * Perform a combined search on specified user fields and meta fields, returning matching user IDs.
         *
         * @since 2.2
         */
        public static function get_user_ids_by_combined_search($user_fields, $meta_fields, $search_term, $filter_id, $query_id, $use_weight_score)
        {
        }
    }
    // Exit if accessed directly
    abstract class Settings_Base
    {
        public $setting_type;
        // page, template
        public $controls;
        public $control_groups;
        public function __construct($type = '')
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function get_controls()
        {
        }
        public function get_control_groups()
        {
        }
        /**
         * Get all controls data (controls and control_groups)
         *
         * @since 1.0
         */
        public function get_controls_data()
        {
        }
    }
    // Exit if accessed directly
    class Settings_Page extends \Bricks\Settings_Base
    {
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
    }
    // Exit if accessed directly
    class Settings_Template extends \Bricks\Settings_Base
    {
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
    }
    // Exit if accessed directly
    /**
     * Page settings
     * Template settings
     */
    class Settings
    {
        public static $controls = [];
        public function __construct()
        {
        }
        /**
         * Set settings controls when saving a Bricks template (on the quick edit interface)
         *
         * @since 1.5.6
         */
        public function set_controls_in_admin()
        {
        }
        public static function set_controls()
        {
        }
        /**
         * Get page/template controls data (controls and control groups)
         *
         * @param string $type page/template.
         */
        public static function get_controls_data($type = '')
        {
        }
    }
    // Exit if accessed directly
    class Setup
    {
        public static $control_options = [];
        /**
         * Set Google Maps API key stored in Bricks settings for ACF
         *
         * Avoids having to add this ACF action manually into child theme.
         *
         * https://www.advancedcustomfields.com/blog/google-maps-api-settings/
         */
        public function acf_set_google_maps_api_key($api)
        {
        }
        public function __construct()
        {
        }
        /**
         * Set project default mode (light, dark) on <html> tag
         *
         * To avoid FOUC on page load.
         * Use JS to set data-brx-theme attribute based on user preference or project default mode in wp_head and CSS to show/hide icons accordingly.
         *
         * @since 2.2
         */
        public function set_project_default_mode($output)
        {
        }
        /**
         * Body classes
         *
         * @since 1.0
         */
        public function body_class($classes)
        {
        }
        /**
         * Opening body tag
         *
         * @since 1.5
         */
        public function body_tag()
        {
        }
        public function init_control_options()
        {
        }
        /**
         * Custom document title
         *
         * @since 1.0
         */
        public function pre_get_document_title($title)
        {
        }
        /**
         * Performance enhancement Bricks settings
         *
         * @since 1.0
         */
        public function init_performance()
        {
        }
        public function init()
        {
        }
        public function disable_emojis()
        {
        }
        public function disable_emojis_tinymce($plugins)
        {
        }
        /**
         * Frontend only: Remove Gutenberg blocks stylesheet file
         */
        public function deregister_styles()
        {
        }
        public function wp_default_scripts($scripts)
        {
        }
        /**
         * First things first
         *
         * @since 1.0
         */
        public function after_setup_theme()
        {
        }
        /**
         * On theme activation
         *
         * @param string   $old_name Old theme name.
         * @param WP_Theme $old_theme Instance of the old theme.
         * @since 1.0
         */
        public function after_switch_theme($old_name, $old_theme)
        {
        }
        /**
         * On theme deactivation
         *
         * Delete license data transient (hack to manually flush license data before transient expires)
         *
         * TODO: Add redirect after theme deactivation to collect feedback via 'https://codex.wordpress.org/Plugin_API/Action_Reference/switch_theme'
         *
         * @since 1.0
         */
        public function switch_theme()
        {
        }
        /**
         * Register styles and scripts to enqueue in builder and frontend respectively
         *
         * @since 1.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Gallery shortcode default size
         *
         * @since 1.0
         */
        public function shortcode_atts_gallery($output, $pairs, $atts)
        {
        }
        /**
         * Sidebars
         *
         * @since 1.0
         */
        public static function widgets_init()
        {
        }
        /**
         * WP admin bar: Add menu bar item "Edit with Bricks"
         *
         * @since 1.0
         */
        public function admin_bar_menu(\WP_Admin_Bar $wp_admin_bar)
        {
        }
        /**
         * Post type display: Add "Edit with Bricks" link for post type without "editor" support
         *
         * @since 1.10.2
         */
        public function edit_form_top()
        {
        }
        /**
         * Nav menu classes
         *
         * @since 1.0
         */
        public function nav_menu_css_class($classes, $item, $args, $depth)
        {
        }
        /**
         * Custom script attributes (async and defer)
         *
         * https://www.growingwiththeweb.com/2014/02/async-vs-defer-attributes.html
         *
         * @since 1.0
         */
        public function custom_script_attributes($tag, $handle, $src)
        {
        }
        /**
         * Return map styles from https://snazzymaps.com/explore for Map element
         *
         * @param string $style Style name (@since 1.9.3).
         *
         * @since 1.0
         */
        public static function get_map_styles($style = '')
        {
        }
        /**
         * Get default color (same as SCSS color vars)
         *
         * For consistent element 'default' color setting
         *
         * @since 1.0
         */
        public static function get_default_color($color_name)
        {
        }
        /**
         * Control options
         *
         * @param string $key Single option key to return specific option.
         *
         * @since 1.0
         */
        public static function get_control_options($key = '')
        {
        }
        /**
         * Return a list of taxonomies
         */
        public static function get_taxonomies_options()
        {
        }
        /**
         * Get image size options for control select options
         *
         * @since 1.0
         */
        public static function get_image_sizes()
        {
        }
        /**
         * Get image size options for control select options
         *
         * @since 1.0
         */
        public static function get_image_sizes_options()
        {
        }
        /**
         * Limit the max. number of query loop results (builder-only)
         *
         * @since 1.11
         */
        public function builder_query_max_results($result, $query_instance)
        {
        }
    }
    // Exit if accessed directly
    class Svg
    {
        /**
         * Enable SVGs uploads
         *
         * https://enshrined.co.uk/2018/04/29/securing-svg-uploads-in-wordpress/
         */
        public function __construct()
        {
        }
        /**
         * Enable SVG uploads
         *
         * @since 1.0
         */
        public function svg_enable_upload($mimes)
        {
        }
        /**
         * Disable real MIME check (introduced in WordPress 4.7.1)
         *
         * https://wordpress.stackexchange.com/a/252296/44794
         *
         * @since 1.0
         */
        public function disable_real_mime_check($data, $file, $filename, $mimes)
        {
        }
        /**
         * Remove img width and height attributes for SVG files, which are set to 1px
         *
         * @since 1.0
         */
        public function svg_one_pixel_fix($image, $attachment_id, $size, $icon)
        {
        }
        public function maybe_sanitize_svg($file)
        {
        }
        /**
         * Uses https://github.com/darylldoyle/svg-sanitizer library
         *
         * @param array $file
         */
        protected function sanitize($file)
        {
        }
        /**
         * Checks if content is gzipped
         *
         * @param string $contents
         *
         * @return boolean
         */
        protected function is_file_gzipped($contents)
        {
        }
        public static function load_libraries()
        {
        }
    }
    // Exit if accessed directly
    class Templates
    {
        public static $template_images = [];
        // All template IDs used on requested URL (@since 1.8.1)
        public static $rendered_template_ids_on_page = [];
        // All generated inline CSS identifiers (@since 1.9.1)
        public static $generated_inline_identifier = [];
        public function __construct()
        {
        }
        /**
         * Register custom post types
         *
         * post_type: bricks_template
         * taxonomies: template_tag, template_bundle
         *
         * @since 1.0
         */
        public function register_post_type()
        {
        }
        /**
         * Render shortcode: [bricks_template]
         */
        public function render_shortcode($attributes = [])
        {
        }
        /**
         * Generate the inline CSS for template rendered in shortcode element
         */
        public static function generate_inline_css($template_id, $elements)
        {
        }
        /**
         * Keep the timestamp of the latest change in the templates post type to force the cache flush
         *
         * @param int $post_id Post ID.
         */
        public function flush_templates_cache($post_id)
        {
        }
        /**
         * Check if remote site can get templates
         *
         * @see Api::get_templates()
         * @return array Array with 'error' key on error. Array with 'site', 'password', 'licenseKey' on success.
         *
         * @since 1.0
         */
        public static function can_get_templates($parameters)
        {
        }
        /**
         * Create template
         *
         * @since 1.0
         */
        public static function get_remote_template_settings($template_source = '')
        {
        }
        /**
         * Builder templates: Get all remote templates data (templates, authors, bundles, tags)
         *
         * @return array
         *
         * @since 1.0
         */
        public static function get_remote_templates_data()
        {
        }
        /**
         * Get templates query based on custom args
         *
         * @since 1.0
         *
         * @param array $custom_args
         * @return WP_Query
         */
        public static function get_templates_query($custom_args = [])
        {
        }
        /**
         * Get all the template IDs of a specific type
         */
        public static function get_templates_by_type($template_type = '')
        {
        }
        /**
         * Get my templates
         *
         * @since 1.0
         */
        public static function get_templates($custom_args = [])
        {
        }
        /**
         * Get template authors
         *
         * @since 1.0
         *
         * @return array
         */
        public static function get_template_authors()
        {
        }
        /**
         * Get template bundles
         *
         * @since 1.0
         */
        public static function get_template_bundles()
        {
        }
        /**
         * Get template tags
         *
         * @since 1.0
         */
        public static function get_template_tags()
        {
        }
        /**
         * Get template type via post_meta
         *
         * @param int $post_id
         *
         * @since 1.0
         */
        public static function get_template_type($post_id = 0)
        {
        }
        /**
         * Get template by ID
         *
         * @since 1.0
         */
        public static function get_template_by_id($template_id, $custom_args = [])
        {
        }
        /**
         * Builder: Create template
         *
         * @since 1.0
         */
        public function create_template()
        {
        }
        /**
         * Builder: Save template
         *
         * @since 1.0
         */
        public function save_template()
        {
        }
        /**
         * Builder: Move template to trash
         *
         * @since 1.0
         */
        public function delete_template()
        {
        }
        /**
         * Admin & builder: Import template
         *
         * @since 1.0
         */
        public function import_template()
        {
        }
        /**
         * STEP: Check global class setting key for occurence of pseudo element to create pseudo element in local installtion
         *
         * @since 1.7.1
         */
        public static function template_import_create_missing_pseudo_classes($pseudo_classes, $setting_keys = [])
        {
        }
        /**
         * Export template as JSON file
         *
         * @param int $template_id Provided if bulk action export.
         * @see: admin.php:export_templates()
         * @since 1.0
         *
         * @return array
         */
        public static function export_template($template_id = 0)
        {
        }
        /**
         * Check if setting value has image/svg properties
         *
         * @since 1.3.2
         */
        public static function is_image($setting)
        {
        }
        /**
         * Recursive function: Import remote element images from template data
         *
         * @since 1.3.2
         */
        public static function import_images($settings, $import_images)
        {
        }
        public static function import_image($image, $import_images)
        {
        }
        /**
         * Builder: Convert template data to new container layout structure
         *
         * @since 1.2
         *
         * @return void
         */
        public function convert_template()
        {
        }
        /**
         * Get the Templates list for the Template element (for the moment only Section and Content/Single template types)
         */
        public static function get_templates_list($template_types = '', $exclude_template_id = '')
        {
        }
        /**
         * Get IDs of all templates
         *
         * @see admin.php get_converter_items()
         * @see files.php get_css_files_list()
         *
         * @param array $custom_args array Custom get_posts() arguments (@since 1.8; @see get_css_files_list).
         *
         * @since 1.4
         */
        public static function get_all_template_ids($custom_args = [])
        {
        }
        /**
         * Remove templates from /wp-sitemap.xml if not set to "Public templates" in Bricks settings
         *
         * @since 1.4
         */
        public function remove_templates_from_wp_sitemap($post_types)
        {
        }
        /**
         * Remove template taxonomies from /wp-sitemap.xml if not set to "Public templates" in Bricks settings
         *
         * @since 1.8
         */
        public function remove_template_taxonomies_from_wp_sitemap($taxonomies)
        {
        }
        /**
         * Frontend: Assign templates to hooks
         *
         * @since 1.9.1
         */
        public function assign_templates_to_hooks()
        {
        }
        /**
         * Check if template should be run on hook
         *
         * @since 1.9.2
         *
         * @param array $arranged_conditions
         *
         * @return bool
         */
        public static function run_template_on_hook($arranged_conditions = [])
        {
        }
        /**
         * Only used for popup inserted directly through the Template element (non-loop).
         *
         * NOTE: Do not use this function in other places!
         *
         * @since 1.12
         */
        public static function generate_popup_setting_css($popup_id)
        {
        }
    }
    // Exit if accessed directly
    abstract class Style_Base
    {
        public $id;
        public $label;
        public $settings;
        public function __construct()
        {
        }
        public function get_id()
        {
        }
        public function get_label()
        {
        }
        public function get_settings()
        {
        }
        public function get_style_data()
        {
        }
    }
    // Exit if accessed directly
    class Theme_Styles
    {
        public static $styles = [];
        public static $settings_by_id = [];
        // key: Theme style ID, value: Theme style settings array (@since 2.0)
        public static $control_options = [];
        public static $control_groups = [];
        public static $controls = [];
        public function __construct()
        {
        }
        public static function set_controls()
        {
        }
        public static function load_set_styles($post_id = 0)
        {
        }
        /**
         * Load theme styles
         */
        public static function load_styles()
        {
        }
        /**
         * Get control groups
         */
        public static function get_control_groups()
        {
        }
        /**
         * Get all theme style controls
         */
        public static function get_controls()
        {
        }
        /**
         * Get controls data
         */
        public static function get_controls_data()
        {
        }
        /**
         * Create new styles (create new one or import styles from file)
         */
        public function create_styles()
        {
        }
        /**
         * Delete custom style from db (by style ID)
         */
        public function delete_style()
        {
        }
        /**
         * Get active theme style according to theme style conditions
         *
         * @param int     $post_id Template ID.
         * @param boolean $return_id Set to true to return active theme style ID for this template (needed on template import).
         */
        public static function set_active_style($post_id = 0, $return_id = false)
        {
        }
        /**
         * Get active theme style settings
         *
         * Start search from the most specific style (= last) and return the first match.
         *
         * @param string $group_key Theme style group key.
         * @param int    $setting_key Theme style setting key.
         * @return mixed|null Returns the value of the setting if found, otherwise null.
         * @example Theme_Styles::get_setting_by_key( 'popup', 'popupBreakpointMode' );
         *
         * @since 2.0
         */
        public static function get_setting_by_key($group_key = '', $setting_key = '')
        {
        }
    }
}
namespace {
    /**
     * WAI-ARIA Nav Menu template functions
     *
     * @see wp-includes/nav-menu-template.php
     * @see https://codeable.io/wordpress-accessibility-creating-accessible-dropdown-menus/
     */
    class Aria_Walker_Nav_Menu extends \Walker_Nav_Menu
    {
        /**
         * Starts the list before the elements are added.
         *
         * @see Walker_Nav_Menu::start_lvl() for parameters and longer explanation
         */
        public function start_lvl(&$output, $depth = 0, $args = \null)
        {
        }
        /**
         * Start the element output.
         *
         * @see Walker_Nav_Menu::start_el() for parameters and longer explanation
         */
        public function start_el(&$output, $item, $depth = 0, $args = \null, $id = 0)
        {
        }
    }
}
namespace Bricks {
    // Exit if accessed directly
    class Woo_Element extends \Bricks\Element
    {
        public $category = 'woocommerce';
        /**
         * Generate standard controls for:
         * margin, padding, background-color, border, box-shadow, typography
         *
         * @param string $field_key - The field key to use for the control.
         * @param string $selector - The selector to apply the control to.
         * @param string $types (optional) - Array of control types to generate controls for.
         *
         * @return array
         */
        protected function generate_standard_controls($field_key, $selector, $types = [])
        {
        }
        /**
         * Insert group key to controls
         *
         * @param array  $controls
         * @param string $group
         *
         * @return array
         */
        protected function controls_grouping($controls, $group)
        {
        }
        /**
         * Woo Phase 3
         */
        protected function get_woo_form_fields_controls($selector = '')
        {
        }
        /**
         * Woo Phase 3
         */
        protected function get_woo_form_submit_controls()
        {
        }
        protected function get_woo_form_fieldset_controls()
        {
        }
        /**
         * Get order
         *
         * Get order from 'previewOrderId' setting
         *
         * Default: Last order
         *
         * @return WC_Order|false
         */
        protected function get_order($template = 'view-order')
        {
        }
    }
    // Exit if accessed directly
    class Product_Add_To_Cart extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-add-to-cart';
        public $icon = 'ti-shopping-cart';
        public function enqueue_scripts()
        {
        }
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Add custom text and/or icon to the button
         *
         * @param string     $text
         * @param WC_Product $product
         *
         * @since 1.6
         */
        public function add_to_cart_text($text, $product)
        {
        }
        /**
         * TODO: Needs description
         *
         * @since 1.6
         */
        public function avoid_esc_html($safe_text, $text)
        {
        }
        /**
         * Set AJAX add to cart data attribute: data-bricks-ajax-add-to-cart
         *
         * @since 1.6.1
         */
        public function maybe_set_ajax_add_to_cart_data_attribute()
        {
        }
        /**
         * Convert dropdown to swatches if applicable
         *
         * @since 2.0
         *
         * @param string $html
         * @param array  $args
         * @return string
         */
        public function maybe_convert_to_swatches($html, $args)
        {
        }
        /**
         * Get the swatch type for an attribute
         *
         * @since 2.0
         *
         * @param string $taxonomy The attribute taxonomy.
         * @return string The swatch type or empty string if none
         */
        public function get_attribute_swatch_type($taxonomy)
        {
        }
        /**
         * Render variation swatches for attribute select field
         *
         * @since 2.0
         *
         * @param array $args The field arguments.
         * @return string HTML for the field.
         */
        public function render_variation_swatches($args)
        {
        }
        /**
         * Sort variation options by term order from taxonomy
         *
         * This ensures swatches display in the same order as the standard dropdown,
         * respecting the term order defined in the taxonomy rather than the order
         * terms were added to the product.
         *
         * @since 2.3
         *
         * @param array  $options The variation option slugs.
         * @param string $taxonomy The attribute taxonomy.
         * @return array Sorted options.
         */
        protected function sort_variation_options_by_term_order($options, $taxonomy)
        {
        }
        /**
         * Render color swatch for attribute
         *
         * @param string $term_id The term ID.
         * @param string $name The attribute name.
         * @param string $value The term slug.
         * @param bool   $selected Whether this term is selected.
         * @return string HTML for the color swatch.
         *
         * @since 2.0
         */
        public function render_color_swatch($term_id, $name, $value, $selected)
        {
        }
        /**
         * Render label swatch for attribute
         *
         * @param string $term_id The term ID.
         * @param string $name The attribute name.
         * @param string $value The term slug.
         * @param bool   $selected Whether this term is selected.
         * @return string HTML for the label swatch.
         *
         * @since 2.0
         */
        public function render_label_swatch($term_id, $name, $value, $selected)
        {
        }
        /**
         * Render image swatch for attribute
         *
         * @param string $term_id The term ID.
         * @param string $name The attribute name.
         * @param string $value The term slug.
         * @param bool   $selected Whether this term is selected.
         * @return string HTML for the image swatch.
         *
         * @since 2.0
         */
        public function render_image_swatch($term_id, $name, $value, $selected)
        {
        }
        protected function render_placeholder_image($term_id, $value, $selected)
        {
        }
    }
    // Exit if accessed directly
    class Product_Additional_Information extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-additional-information';
        public $icon = 'ti-info';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Product_Content extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-content';
        public $icon = 'ti-wordpress';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Product_Gallery extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-gallery';
        public $icon = 'ti-gallery';
        public $scripts = ['bricksWooProductGallery'];
        public $product = false;
        public function enqueue_scripts()
        {
        }
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Get product gallery HTML
         *
         * @since 1.9
         * @return string
         */
        public function product_gallery_html()
        {
        }
        /**
         * Render Bricks product gallery thumbnails
         *
         * @since 1.9
         *
         * @return string
         */
        public function bricks_product_gallery_thumbnails()
        {
        }
        /**
         * Set gallery image size for the current product gallery
         *
         * hook: woocommerce_gallery_image_size
         *
         * @see woocommerce/includes/wc-template-functions.php
         *
         * @since 1.8
         */
        public function set_gallery_image_size($size)
        {
        }
        /**
         * Set gallery thumbnail size for the current product gallery
         *
         * hook: woocommerce_gallery_thumbnail_size
         *
         * @see woocommerce/includes/wc-template-functions.php
         *
         * @since 1.8
         */
        public function set_gallery_thumbnail_size($size)
        {
        }
        /**
         * Set gallery full size for the current product gallery (Lightbox)
         *
         * hook: woocommerce_gallery_full_size
         *
         * @see woocommerce/includes/wc-template-functions.php
         *
         * @since 1.8
         */
        public function set_gallery_full_size($size)
        {
        }
        public function add_image_class_prevent_lazy_loading($attr, $attachment_id, $image_size, $main_image)
        {
        }
        /**
         * Add unique class to product gallery for the current product so frontend scripts can target the correct gallery when multiple galleries are present on the page.
         *
         * @since 2.2
         */
        public function add_product_gallery_class($classes)
        {
        }
    }
    // Exit if accessed directly
    class Product_Meta extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-meta';
        public $icon = 'ti-receipt';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Product_Price extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-price';
        public $icon = 'ti-money';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Product_Rating extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-rating';
        public $icon = 'ti-medall';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Product_Related extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-related';
        public $icon = 'ti-layers';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function render_heading($heading = '')
        {
        }
    }
    // Exit if accessed directly
    class Product_Reviews extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-reviews';
        public $icon = 'ti-pencil-alt';
        public $scripts = ['bricksWooStarRating'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Product_Short_Description extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-short-description';
        public $icon = 'ti-paragraph';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Product_Stock extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-stock';
        public $icon = 'ti-package';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function woocommerce_get_availability($availability, $product)
        {
        }
        /**
         * Check if a WooCommerce product or all its variations manage stock
         *
         * @param WC_Product $product The product object.
         * @return bool True if the product (and any one variations, if variable) manage stock, false otherwise.
         *
         * @since 1.12
         */
        public function is_product_or_variations_managing_stock($product)
        {
        }
    }
    // Exit if accessed directly
    class Product_Tabs extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-tabs';
        public $icon = 'ti-layout-tab';
        public $css_selector = '.woocommerce-tabs';
        public $rerender = false;
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Product_Title extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-title';
        public $icon = 'ti-text';
        public $tag = 'h1';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public static function render_builder()
        {
        }
    }
    // Exit if accessed directly
    class Product_Upsells extends \Bricks\Element
    {
        public $category = 'woocommerce_product';
        public $name = 'product-upsells';
        public $icon = 'ti-stats-up';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function render_heading($heading = '')
        {
        }
        /**
         * Output cart cross-sells
         *
         * NOTE: Similar to original function but here to make sure it runs outside the checkout page and with product cross sells with cart empty.
         *
         * @see woocommerce/includes/wc-template-functions.php
         *
         * @param  array  $product_ids Array of product IDs.
         * @param  int    $limit (default: 2).
         * @param  int    $columns (default: 2).
         * @param  string $orderby (default: 'rand').
         * @param  string $order (default: 'desc').
         *
         * @since 1.4
         */
        public function woocommerce_cross_sell_display($product_ids = [], $limit = 2, $columns = 2, $orderby = 'rand', $order = 'desc')
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Add_Payment_Method extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-add-payment-method';
        public $icon = 'ti-plus';
        public $panel_condition = ['templateType', '=', 'wc_account_add_payment_method'];
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Addresses extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-addresses';
        public $icon = 'fa fa-address-book';
        public $panel_condition = ['templateType', '=', 'wc_account_addresses'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Downloads extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-downloads';
        public $icon = 'ti-download';
        public $panel_condition = ['templateType', '=', 'wc_account_downloads'];
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Form_Edit_Account extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-form-edit-account';
        public $icon = 'fas fa-user-edit';
        public $panel_condition = ['templateType', '=', 'wc_account_form_edit_account'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Form_Edit_Address extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-form-edit-address';
        public $icon = 'ti ti-pencil-alt';
        public $panel_condition = ['templateType', '=', 'wc_account_form_edit_address'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Form_Login extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-form-login';
        public $icon = 'fa fa-address-card';
        public $panel_condition = ['templateType', '=', 'wc_account_form_login'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        /**
         * NOTE: Not in use as impossible to render only login or register form inside Woo template
         */
        public function __render()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Form_Lost_Password extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-form-lost-password';
        public $icon = 'fas fa-passport';
        public $panel_condition = ['templateType', '=', 'wc_account_form_lost_password'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Form_Register extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-form-register';
        public $icon = 'fas fa-user-plus';
        public $panel_condition = ['templateType', '=', 'wc_account_form_login'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Form_Reset_Password extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-form-reset-password';
        public $icon = 'fas fa-key';
        public $panel_condition = ['templateType', '=', 'wc_account_reset_password'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Orders extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-orders';
        public $icon = 'ti-layout-list-thumb-alt';
        public $panel_condition = ['templateType', '=', 'wc_account_orders'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Page extends \Bricks\Woo_Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-account-page';
        public $icon = 'ti-user';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_Payment_Methods extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-account-payment-methods';
        public $icon = 'ti-credit-card';
        public $panel_condition = ['templateType', '=', 'wc_account_payment_methods'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Account_View_Order extends \Bricks\Woo_Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-account-view-order';
        public $icon = 'ti-layout-list-thumb';
        public $panel_condition = ['templateType', '=', 'wc_account_view_order'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Breadcrumbs extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-breadcrumbs';
        public $icon = 'ti-line-dashed';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Custom home URL: 'woocommerce_breadcrumb_home_url' filter callback
         *
         * @since 1.10.1
         */
        public function custom_home_url($url)
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Cart_Collaterals extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-cart-collaterals';
        public $icon = 'ti-money';
        public $panel_condition = ['templateType', '=', ['wc_cart', 'wc_cart_empty']];
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function proceed_to_checkout_button($label)
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Cart_Coupon extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-cart-coupon';
        public $icon = 'ti-ticket';
        public $panel_condition = ['templateType', '=', 'wc_cart'];
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Cart_Items extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-cart-items';
        public $icon = 'ti-shopping-cart';
        public $panel_condition = ['templateType', '=', 'wc_cart'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function woocommerce_cart_item_thumbnail($thumbnail, $cart_item, $cart_item_key)
        {
        }
        public function woocommerce_cart_item_permalink($permalink, $cart_item, $cart_item_key)
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Checkout_Coupon extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-checkout-coupon';
        public $icon = 'ti-ticket';
        // NOTE: Don't limit to Checkout template only as user might add it on the Checkout page directly, outside the checkout form
        // public $panel_condition = [ 'templateType', '=', 'wc_form_checkout' ];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Checkout_Customer_Details extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-checkout-customer-details';
        public $icon = 'ti-user';
        public $panel_condition = ['templateType', '=', 'wc_form_checkout'];
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function remove_checkout_billing_fields($field, $key)
        {
        }
        public function remove_checkout_shipping_fields($field, $key)
        {
        }
        public function woocommerce_form_field_args($args, $key, $value)
        {
        }
        /**
         * Builder API call (render_element ), get cart content is always empty, we need to force to show shipping fields
         *
         * @since 1.12
         */
        public function builder_needs_shipping($needs)
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Checkout_Login extends \Bricks\Woo_Element
    {
        public $name = 'woocommerce-checkout-login';
        public $icon = 'fa fa-address-card';
        // Not limit to Checkout template only, user might use this on Checkout page directly (outside of checkout form)
        // public $panel_condition = [ 'templateType', '=', 'wc_form_checkout' ];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Checkout_Order_Payment extends \Bricks\Woo_Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-checkout-order-payment';
        public $icon = 'ti-menu-alt';
        public $panel_condition = ['templateType', '=', 'wc_form_pay'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Checkout_Order_Review extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-checkout-order-review';
        public $icon = 'ti-view-list-alt';
        public $panel_condition = ['templateType', '=', 'wc_form_checkout'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Checkout_Order_Table extends \Bricks\Woo_Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-checkout-order-table';
        public $icon = 'ti-menu-alt';
        public $panel_condition = ['templateType', '=', 'wc_form_pay'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Checkout_Thankyou extends \Bricks\Woo_Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-checkout-thankyou';
        public $icon = 'ti-check-box';
        public $panel_condition = ['templateType', '=', 'wc_thankyou'];
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Mini_Cart extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-mini-cart';
        public $icon = 'ti-shopping-cart';
        public $scripts = ['bricksWooRefreshCartFragments'];
        /**
         * Enqueue wc-cart-fragments script if WooCommerce version is >= 7.8
         *
         * @since 1.8.1
         *
         * @see https://developer.woocommerce.com/2023/06/13/woocommerce-7-8-released/#mini-cart-performance-improvement
         */
        public function enqueue_scripts()
        {
        }
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * NOTE: Not in use in order to show .cart-detail (fragments)
         */
        public static function not_in_use_render_builder()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Notice extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-notice';
        public $icon = 'ti-announcement';
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        /**
         * Populate some notices for the builder and template preview or return the WooCommerce notices
         *
         * @return string
         */
        public function get_woo_notices_or_populate_builder_notices()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Products_Archive_Description extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-products-archive-description';
        public $icon = 'ti-wordpress';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Products_Filters extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-products-filter';
        public $icon = 'ti-filter';
        public $scripts = ['bricksWooProductsFilter'];
        // Helper property
        public $products_element;
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function render_control_dropdown($filter, $filter_by)
        {
        }
        public function render_control_radio($filter, $filter_by)
        {
        }
        public function render_control_checkbox($filter, $filter_by)
        {
        }
        public function render_control_list($filter, $filter_by)
        {
        }
        public function render_control_box($filter, $filter_by)
        {
        }
        public function render_control_stars($filter, $filter_by)
        {
        }
        public function render_control_slider($filter, $filter_by)
        {
        }
        public function render_control_reset($filter)
        {
        }
        public function render_control_search($filter, $filter_by)
        {
        }
        public function get_filters_list($filter_type)
        {
        }
        public function get_filter_options($filter, $filter_by)
        {
        }
        /**
         * If the products element is filtering the main query, return those specific terms
         *
         * @return array
         */
        public function get_terms_include($taxonomy)
        {
        }
        /**
         * Helper method to get the tax_query terms per taxonomy
         *
         * @since 1.5
         */
        public function get_tax_query_values($condition, $key, $tax_values)
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Products_Orderby extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-products-orderby';
        public $icon = 'ti-exchange-vertical';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function woocommerce_catalog_orderby($orderby)
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Products_Pagination extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-products-pagination';
        public $icon = 'ti-angle-double-right';
        public function get_label()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
        public function woocommerce_pagination_args($args)
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Products_Total_Results extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-products-total-results';
        public $icon = 'ti-info';
        public function get_label()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Products extends \Bricks\Custom_Render_Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-products';
        public $icon = 'ti-archive';
        public $css_selector = '.product';
        public function get_label()
        {
        }
        public function set_control_groups()
        {
        }
        public function set_controls()
        {
        }
        public function render_grid_widgets($zone)
        {
        }
        public function woocommerce_catalog_orderby($orderby)
        {
        }
        public function render()
        {
        }
        public function render_fields($image_classes, $post, $post_index)
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Template_Hook extends \Bricks\Element
    {
        public $category = 'woocommerce';
        public $name = 'woocommerce-template-hook';
        public $icon = 'fas fa-anchor';
        public function get_label()
        {
        }
        public function get_keywords()
        {
        }
        public function set_controls()
        {
        }
        public function render()
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce_Helpers
    {
        /**
         * Product query controls (products, related products, upsells)
         *
         * @param array $args Arguments to merge (e.g. control 'group').
         */
        public static function get_product_query_controls($args = false)
        {
        }
        /**
         * Default order by control options
         */
        public static function get_default_orderby_control_options()
        {
        }
        public static function get_filters_list($flat = true)
        {
        }
        /**
         * Is product archive page
         *
         * @return boolean
         */
        public static function is_archive_product()
        {
        }
        /**
         * Calculate the filters query args based on the URL parameters and element settings
         * DO NOT early return!
         * WooCommerce query
         *
         * https://github.com/woocommerce/woocommerce/wiki/wc_get_products-and-WC_Product_Query
         * https://docs.woocommerce.com/wc-apidocs/class-WC_Product.html
         *
         * @since 1.5
         *
         * @param array  $settings The element settings.
         * @param array  $bricks_query_var Generated query_vars from Bricks_Query.
         * @param string $element_name The element name.
         * @param array  $options Additional options for query args generation. (@since 2.3)
         * @return array
         */
        public static function filters_query_args($settings, $bricks_query_var = [], $element_name = '', $options = [])
        {
        }
        /**
         * Set query args for price filter
         *
         * @param array $args
         * @return array
         */
        public static function set_price_query_args($args)
        {
        }
        /**
         * Gets the first element from a flat list that contains a products query (Products element or Query Loop builder set to products)
         *
         * @since 1.5
         *
         * @param array $data
         * @return array|boolean
         */
        public static function get_products_element($data = [])
        {
        }
        /**
         * Get the products query based on a Products element present in the content of a page
         *
         * @param string $post_id
         * @return WP_Query|boolean false if products element not found
         */
        public static function get_products_element_query($post_id)
        {
        }
        /**
         * Helper function to set the cart variables for better builder preview
         *
         * @return void
         */
        public static function maybe_init_cart_context()
        {
        }
        /**
         * Maybe add products to the cart if cart is empty for better builder preview
         *
         * @since 1.5
         *
         * @return void
         */
        public static function maybe_populate_cart_contents()
        {
        }
        /**
         * Maybe load the cart - render using WP REST API
         *
         * @since 1.5
         */
        public static function maybe_load_cart()
        {
        }
        /**
         * Add or remove actions in the repeated_wc_template_hooks
         *
         * Used in {do_action} which the action is inside the repeated_wc_template_hooks hooks
         * To avoid duplicate ouput which already exists in Bricks elements
         *
         * @since 1.7
         *
         * @param string $template required (ex: 'content-single-product', 'content-product').
         * @param string $action remove, add.
         * @param string $hook optional.
         *
         * @return void
         */
        public static function execute_actions_in_wc_template($template = '', $action = 'remove', $hook = '')
        {
        }
        /**
         * All woo template hooks that might be causing duplicated ouput when using together with Bricks WooCommerce elements
         *
         * @see woocommerce/includes/wc-template-hooks.php
         *
         * @since 1.7
         *
         * @param string $template
         *
         * @return array
         */
        public static function repeated_wc_template_hooks($template = '')
        {
        }
        /**
         * Find the template hooks array by using the action name.
         *
         * @since 1.7
         *
         * @param string $action
         *
         * @return array
         */
        public static function get_repeated_wc_template_hooks_by_action($action = '')
        {
        }
        /**
         * Bricks helper function to render the product rating.
         * single-product/rating.php
         *
         * @param WC_Product $product Product instance.
         * @param array      $params  Keys: show_empty_stars, hide_reviews_link, wrapper, reviews_link_text_single, reviews_link_text_plural.
         * @param bool       $render  Render (echo) or return.
         *
         * @since 1.8
         */
        public static function render_product_rating($product = null, $params = [], $render = true)
        {
        }
        /**
         * Hooked to woocommerce_product_get_rating_html
         *
         * @since 1.8
         */
        public static function show_empty_stars($html, $rating, $count)
        {
        }
        /**
         * Get product stock amount value
         *
         * Previously in get_stock_html(), but refactored into a separate function for reusability and readability.
         * Bare in mind if the product is not managed stock, the value will be 0 even stock status is instock.
         *
         * @param \WC_Product $product
         * @return int
         *
         * @since 1.6.1
         * @since 1.11.1: Moved here from provider-woo.php.
         */
        public static function get_stock_amount($product)
        {
        }
        /**
         * Similar function to wc_format_stock_for_display but adapted to be possible to use the stock sum up of the product variations
         *
         * @since 1.5.7
         * @since 1.11.1: Moved here from provider-woo.php.
         */
        public static function format_stock_for_display($product, $stock_amount)
        {
        }
    }
}
namespace Bricks\Woocommerce {
    // Exit if accessed directly
    class Product_Variation_Swatches
    {
        public function __construct()
        {
        }
        /**
         * Enqueue WordPress media scripts on attribute term pages and attribute settings page
         */
        public function enqueue_media_scripts()
        {
        }
        /**
         * Add swatch type settings to product attribute configuration
         *
         * @since 2.0
         */
        public function add_attribute_swatch_type_settings()
        {
        }
        /**
         * Save swatch type setting for product attribute
         *
         * @since 2.0
         */
        public function save_attribute_swatch_type($attribute_id, $attribute, $old_attribute)
        {
        }
        /**
         * Add swatch fields when adding a new attribute term
         *
         * @since 2.0
         */
        public function add_attribute_term_fields($term = false)
        {
        }
        /**
         * Add swatch fields when editing an attribute term
         *
         * @since 2.0
         */
        public function edit_attribute_term_fields($term, $taxonomy)
        {
        }
        /**
         * Save the term fields
         *
         * @since 2.0
         */
        public function save_attribute_term_fields($term_id, $tt_id = '', $taxonomy = '')
        {
        }
        /**
         * Register hooks for all product attribute taxonomies
         *
         * @since 2.0
         */
        public function register_attribute_term_hooks()
        {
        }
        /**
         * Register swatch type column for all product attribute taxonomies
         */
        public function register_swatch_type_column()
        {
        }
        /**
         * Add swatch type column to the taxonomy table
         */
        public function add_swatch_type_column($columns)
        {
        }
        /**
         * Populate the swatch type column
         */
        public function populate_swatch_type_column($content, $column_name, $term_id)
        {
        }
    }
}
namespace Bricks {
    // Exit if accessed Woocommerce_directly
    class Woocommerce_Theme_Styles
    {
        public function __construct()
        {
        }
        /**
         * Add Woo Theme style control groups
         */
        public function set_groups($control_groups)
        {
        }
        /**
         * Add Woo Theme style controls
         */
        public function set_controls($controls)
        {
        }
    }
    // Exit if accessed directly
    class Woocommerce
    {
        public static $product_categories = [];
        public static $product_tags = [];
        public static $is_active = false;
        public function __construct()
        {
        }
        /**
         * Dont't show WooCommerce outdated template files admin notice
         *
         * Show custom Bricks message instead.
         *
         * @since 1.9.8
         */
        public function show_admin_notice($true, $notice)
        {
        }
        /**
         * Show custom message for outdated WooCommerce template files
         *
         * @since 1.9.8
         */
        public function admin_notice_outdated_template_files()
        {
        }
        /**
         * My account endpoint template preview: Redirect to actual my account endpoint
         *
         * To render entire my account area (navigation + content)
         *
         * @since 1.9
         */
        public function template_redirect()
        {
        }
        /**
         * Woo Phase 3: Get #brx-content HTML as rendered on the frontend
         *
         * To render complete my account (navigation + content)
         * and move dynamic drag & drop area into my account content div.
         *
         * @since 1.9
         */
        public function builder_dynamic_wrapper($dynamic_area = [])
        {
        }
        /**
         * Woo Phase 3 - Check if current page is my account dashboard page
         *
         * @see includes/wc-template-functions.php woocommerce_account_content()
         */
        public static function is_wc_account_dashboard()
        {
        }
        /**
         * My account: Render Bricks template data if available
         *
         * @since 1.9
         */
        public function add_my_account_content()
        {
        }
        /**
         * Woo Phase 3 - Set account navigation active class in builder
         *
         * @since 1.9
         */
        public function woocommerce_account_menu_item_classes($classes, $endpoint)
        {
        }
        /**
         * Sync Woocommerce product flexslider with Bricks thumbnail slider
         *
         * @since 1.9
         */
        public function single_product_carousel_options($options)
        {
        }
        /**
         * Checkout: Make sure the removed billing/shipping fields in the WooCommerce checkout customer details element are set to be not required
         *
         * @since 1.5.7
         */
        public function woocommerce_checkout_fields($fields)
        {
        }
        /**
         * Cart or checkout build with Bricks: Remove 'wordpress' post class to avoid auto-containing Bricks content
         *
         * @since 1.5.5
         */
        public function post_class($classes, $class, $post_id)
        {
        }
        /**
         * If WooCommerce is not used, make sure the single and archive Woo templates are not used
         *
         * @since 1.5.1
         *
         * @param string $template
         * @return string
         */
        public function no_woo_template_include($template)
        {
        }
        /**
         * Sale badge HTML
         *
         * Show text or percentage.
         */
        public function badge_sale($html, $post, $product)
        {
        }
        public static function badge_new()
        {
        }
        /**
         * Product review submit button: Add 'button' class to apply Woo button styles
         */
        public function product_review_comment_form_args($comment_form)
        {
        }
        /**
         * WooCommerce support sets WC_Template_Loader::$theme_support = true
         */
        public function add_theme_support()
        {
        }
        /**
         * Get products terms (categories, tags) for in-builder product query controls
         */
        public function set_products_terms()
        {
        }
        /**
         * Get terms for a given product taxonomy
         */
        public static function get_products_terms($taxonomy = null)
        {
        }
        /**
         * Check if WooCommerce plugin is active
         *
         * @return boolean
         */
        public static function is_woocommerce_active()
        {
        }
        /**
         * Determine if currently landed on WC api endpoint
         *
         * @see woocommerce/includes/class-woocommerce.php api_request_url()
         * @since 2.0
         */
        public static function is_wc_api_endpoint()
        {
        }
        /**
         * Init WooCommerce theme styles
         */
        public function init_theme_styles()
        {
        }
        /**
         * Init WooCommerce elements
         */
        public function init_elements()
        {
        }
        public function quantity_input_field_add_minus_button()
        {
        }
        public function quantity_input_field_add_plus_button()
        {
        }
        public function breadcrumb_separator($defaults)
        {
        }
        /**
         * Add search breadbrumb in the product archive if using Bricks search filter
         *
         * @param array         $crumbs
         * @param WC_Breadcrumb $crumbs_obj
         * @return array
         */
        public function add_breadcrumbs_from_filters($crumbs, $crumbs_obj)
        {
        }
        /**
         * Bypass Builder post type check because page set to WooCommerce Shop fails
         *
         * @return boolean
         */
        public function bypass_builder_post_type_check($supported_post_types, $current_post_type)
        {
        }
        /**
         * Builder: Set single product template & populate content (if needed)
         */
        public function maybe_set_template_preview_content()
        {
        }
        /**
         * Cart/Checkout/Account page: Return no title if rendered via Bricks template
         *
         * @since 1.8
         */
        public function default_page_title($post_title, $post_id)
        {
        }
        /**
         * Set aria-current="page" for WooCommerce
         *
         * @since 1.8
         */
        public function maybe_set_aria_current_page($set, $url)
        {
        }
        public static function get_wc_endpoint_from_url($url)
        {
        }
        /**
         * Builder: Add body classes to Woo templates
         *
         * @param array $classes
         */
        public function add_body_class($classes)
        {
        }
        /**
         * On the builder, move up WooCommerce specific elements
         *
         * @since 1.2.1
         *
         * @param string $category
         * @param int    $post_id
         * @param string $post_type
         *
         * @return string
         */
        public function set_first_element_category($category, $post_id, $post_type)
        {
        }
        /**
         * Page marked as shop - is_shop() - has a global $post_id set to the first product (like is_home)
         *
         * In builder or when setting the active templates we need to replace the active post id by the page id
         *
         * @param int $post_id
         */
        public function maybe_set_post_id($post_id)
        {
        }
        /**
         * Add WooCommerce element link selectors to allow Theme Styles for the links
         *
         * @since 1.5.7
         */
        public function link_css_selectors($selectors)
        {
        }
        /**
         * NOTE: Not in use as we renamed the 'PhotoSwipe' class to 'Photoswipe5' to avoid conflicts with WooCommerce Photoswipe 4
         */
        public function unload_photoswipe5_lightbox_assets()
        {
        }
        /**
         * Remove WooCommerce scripts on non-WooCommerce pages
         *
         * @since 1.2.1
         */
        public function wp_enqueue_scripts()
        {
        }
        /**
         * Enqueue WooCommerce scripts and styles for LTR pages
         *
         * It will be enqueued after the Bricks WooCommerce assets.
         *
         * @since 2.0
         */
        public function wp_enqueue_scripts_rtl()
        {
        }
        /**
         * Before Bricks searchs for the right template, set the content_type if needed
         *
         * @param string $content_type
         * @param int    $post_id
         */
        public static function set_content_type($content_type, $post_id)
        {
        }
        /**
         * All WooCommerce templates in Bricks
         *
         * @since 1.11.1
         * @return array
         */
        public static function get_woo_templates()
        {
        }
        /**
         * Add template types to control options
         *
         * @param array $control_options
         * @return array
         *
         * @since 1.4
         */
        public function add_template_types($control_options)
        {
        }
        /**
         * Remove "Template Conditions" & "Populate Content" panel controls for WooCommerce Cart & Checkout template parts
         *
         * @param array $settings
         * @return array
         *
         * @since 1.4
         */
        public function remove_template_conditions($settings)
        {
        }
        /**
         * Get template data by template type
         *
         * For woocommerce templates inside Bricks theme.
         *
         * Return template data rendered via Bricks template shortcode.
         *
         * @since 1.8: Return template ID if render is false (to not trigger any hooks when we are not rendering the template)
         * Example: do_shortcode will be execute in post_class filter, which will trigger the do_shortcode action,
         * and causing wc_print_notices to be executed in post_class filter before the actual template is rendered.
         * Resulted actual template rendering empty notices. (wc_print_notices() will erase the notices after it is executed)
         *
         * @see /includes/woocommerce/cart/cart.php (wc_cart), etc.
         *
         * @since 1.4
         */
        public static function get_template_data_by_type($type = '', $render = true)
        {
        }
        /**
         * Add Archive Product content type
         *
         * Note: Not in use
         *
         * @param array $types
         */
        public function add_content_types($types)
        {
        }
        /**
         * Setup the products query loop in the products archive, including is_shop page (frontend only)
         *
         * @param array  $data Elements list.
         * @param string $post_id Post ID.
         */
        public function setup_query($data, $post_id)
        {
        }
        public function reset_query($sections, $post_id)
        {
        }
        /**
         * Update the mini-cart fragments
         *
         * @param array $fragments
         */
        public function update_mini_cart($fragments)
        {
        }
        /**
         * Check if the query loop is on Woo products, and if yes, check if we should merge the main query
         *
         * @since 1.5
         *
         * @param boolean $merge
         * @param string  $element_id
         * @return boolean
         */
        public function maybe_merge_query($merge, $element_id)
        {
        }
        /**
         * Add products query vars to the query loop
         *
         * @since 1.5
         *
         * @param array  $query_vars
         * @param array  $settings
         * @param string $element_id
         * @return boolean
         */
        public function set_products_query_vars($query_vars, $settings, $element_id, $element_name)
        {
        }
        /**
         * Determine if the query merge should be disabled based on query vars or settings
         *
         * @since 2.3
         */
        public function is_query_merge_disabled($query_vars = [], $settings = [])
        {
        }
        /**
         * Adds the cart contents query to the Query Loop builder
         *
         * @param array $control_options
         * @return array
         */
        public function add_control_options($control_options)
        {
        }
        /**
         * Returns the cart contents query
         *
         * @param array $results
         * @param Query $query
         * @return array
         */
        public function run_cart_query($results, $query)
        {
        }
        /**
         * Sets the loop object (to WP_Post) in each query loop iteration
         *
         * @param array  $loop_object
         * @param string $loop_key
         * @param Query  $query
         * @return array
         */
        public function set_loop_object($loop_object, $loop_key, $query)
        {
        }
        /**
         * Returns the loop object id (for the cart query)
         *
         * @since 1.5.3
         */
        public function set_loop_object_id($object_id, $object, $query_id)
        {
        }
        /**
         * Returns the loop object type (for the cart query)
         *
         * @since 1.5.3
         */
        public function set_loop_object_type($object_type, $object, $query_id)
        {
        }
        /**
         * Check if user enabled single ajax add to cart
         *
         * @return bool
         * @since 1.6.1
         */
        public static function enabled_ajax_add_to_cart()
        {
        }
        /**
         * Get global AJAX show notice setting
         *
         * @return string
         * @since 1.9
         */
        public static function global_ajax_show_notice()
        {
        }
        /**
         * Get global AJAX scroll to notice setting
         *
         * @return string
         * @since 1.9
         */
        public static function global_ajax_scroll_to_notice()
        {
        }
        /**
         * Get global AJAX reset text after setting
         *
         * @return int
         * @since 1.9
         */
        public static function global_ajax_reset_text_after()
        {
        }
        /**
         * Get global AJAX adding text setting
         *
         * @return string
         * @since 1.9.2
         */
        public static function global_ajax_adding_text()
        {
        }
        /**
         * Get global AJAX added text setting
         *
         * @return string
         * @since 1.9.2
         */
        public static function global_ajax_added_text()
        {
        }
        /**
         * Get global AJAX error action setting
         *
         * - Redirect to product page (default)
         * - Show notice
         *
         * @return string
         * @since 1.11
         */
        public static function global_ajax_error_action()
        {
        }
        /**
         * Get global AJAX error scroll to notice setting
         *
         * @return string
         * @since 1.11
         */
        public static function global_ajax_error_scroll_to_notice()
        {
        }
        /**
         * AJAX Add to cart
         * Support product types: simple, variable, grouped
         *
         * @since 1.6.1
         *
         * @see woocommerce/includes/class-wc-ajax.php add_to_cart()
         */
        public function add_to_cart()
        {
        }
        /**
         * Same as WC_AJAX::get_refreshed_fragments() but without the cart_hash and cart_url fragments
         *
         * @since 1.8.4
         */
        public static function get_refreshed_fragments()
        {
        }
        /**
         * Remove .ajax_add_to_cart if get_option( 'woocommerce_enable_ajax_add_to_cart' ) is not checked.
         * To avoid native AJAX add to cart firing because product-add-to-cart element needs to enqueue wc-add-to-cart.js for AJAX Woo Quick View
         * #86c993p6a
         *
         * @since 2.3.3
         */
        public function maybe_remove_native_ajax_class($args, $product)
        {
        }
        /**
         * Take over the native WooCommerce AJAX add to cart button
         *
         * @since 1.8.5
         */
        public function overwrite_native_ajax_add_to_cart($args, $product)
        {
        }
        /**
         * Check if use bricks woo notice element
         *
         * @since 1.8.1
         * @return bool
         */
        public static function use_bricks_woo_notice_element()
        {
        }
        /**
         * Remove all native woocommerce notices hooks if use Bricks woo notice element
         *
         * So user can control the location of notices via the Bricks woo notice element.
         *
         * @since 1.8.1
         * @since 1.11.1: Included logic for Woo Checkout Coupon & Login Element
         * @see woocommerce/includes/wc-template-hooks.php Notices
         */
        public static function maybe_remove_native_woocommerce_notices_hooks()
        {
        }
        /**
         * Remove WooCommerce hook actions to avoid duplicate content
         *
         * @since 1.7
         *
         * @param string   $action
         * @param array    $filters
         * @param string   $context
         * @param \WP_Post $post
         */
        public function maybe_remove_woo_hook_actions($action, $filters, $context, $post)
        {
        }
        /**
         * Restore WooCommerce hooks
         *
         * @since 1.7
         *
         * @param string   $action
         * @param array    $filters
         * @param string   $context
         * @param \WP_Post $post
         * @param mixed    $value
         */
        public function maybe_restore_woo_hook_actions($action, $filters, $context, $post, $value)
        {
        }
        /**
         * Add bricks-woo-{template} body class to the body
         * Add woocommerce body classes for templates (builder or preview)
         *
         * Woo Phase 3
         */
        public function maybe_set_body_class($classes)
        {
        }
        /**
         * Add .woocommerce class to the main tag (#brx-content) when previewing woo templates in frontend OR if the current page is my account page
         *
         * Otherwise not all Woo CSS & JS is applied. In builder, we add this class inside TheDynamicArea.vue
         *
         * Woo Phase 3
         */
        public function template_preview_main_classes($attributes)
        {
        }
        /**
         * Check if use quantity in loop
         *
         * @return bool
         * @since 1.9
         */
        public static function use_quantity_in_loop()
        {
        }
        /**
         * Add quantity input field to loop
         *
         * Support product types: simple
         *
         * @since 1.9
         */
        public function add_quantity_input_field($html, $product)
        {
        }
        /**
         * Get $args for password reset form via
         *
         * Used in Account page & reset password form template.
         *
         * @see Woo core lost_password()
         * @since 1.9
         */
        public static function get_reset_password_args()
        {
        }
        /**
         * @since 1.11.1
         */
        public static function use_bricks_woo_checkout_coupon_element()
        {
        }
        /**
         * @since 1.11.1
         */
        public static function use_bricks_woo_checkout_login_element()
        {
        }
        /**
         * Get active WooCommerce templates for current page
         * Use by admin top bar
         *
         * @return array Array of template IDs indexed by template type
         * @since 1.12
         */
        public static function get_active_templates_for_current_page()
        {
        }
        /**
         * Get active WooCommerce templates for current endpoint
         *
         * Remove unrelated arrays generated from get_active_templates_for_current_page() based on the current endpoint
         *
         * @since 1.12
         */
        public static function get_active_templates_for_current_endpoint()
        {
        }
        /**
         * Remove WooCommerce resource hints that could cause PHP fatal errors (preg_match use on boolean) (#86c1r48gg)
         * We deregister wp-polyfill in the builder and register it as false
         *
         * @see src/Blocks/AssetsController.php get_absolute_url() (WooCommerce plugin)
         * @since 1.12
         */
        public function remove_woo_resource_hints()
        {
        }
        /**
         * When searching by meta fields that might belong to product variations (sku, gtin, etc), include the parent product IDs as well
         *
         * @since 2.2
         */
        public function maybe_include_product_parent_ids($post_ids, $search_fields, $meta_fields, $search_term, $filter_id, $query_id)
        {
        }
    }
}
namespace Bricks {
    function get_effective_wp_mail_from_address()
    {
    }
    function get_effective_wp_mail_from_name()
    {
    }
    function encipher_api_key($settings, $setting_key)
    {
    }
}
namespace Bricks {
    function bricks_check_meta_value_column_type()
    {
    }
}
/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Composer\Autoload {
    /**
     * Scope isolated include.
     *
     * Prevents access to $this/self from included files.
     */
    function includeFile($file)
    {
    }
}
namespace {
    // Exit if accessed directly
    /**
     * Define constants
     *
     * @since 1.0
     */
    \define('BRICKS_VERSION', '2.3.3');
    \define('BRICKS_NAME', 'Bricks');
    \define('BRICKS_TEMP_DIR', 'bricks-temp');
    // Template import/export (JSON & ZIP)
    \define('BRICKS_TEMPLATE_SCREENSHOTS_DIR', 'bricks/template-screenshots');
    // Template screenshots (@since 1.10)
    \define('BRICKS_PATH', \trailingslashit(\get_template_directory()));
    // require_once files
    \define('BRICKS_PATH_ASSETS', \trailingslashit(\BRICKS_PATH . 'assets'));
    \define('BRICKS_URL', \trailingslashit(\get_template_directory_uri()));
    // WP enqueue files
    \define('BRICKS_URL_ASSETS', \trailingslashit(\BRICKS_URL . 'assets'));
    \define('BRICKS_REMOTE_URL', 'https://my.bricksbuilder.io/');
    \define('BRICKS_BUILDER_PARAM', 'bricks');
    \define('BRICKS_BUILDER_IFRAME_PARAM', 'brickspreview');
    \define('BRICKS_DEFAULT_IMAGE_SIZE', 'large');
    \define('BRICKS_DB_PANEL_WIDTH', 'bricks_panel_width');
    \define('BRICKS_DB_STRUCTURE_WIDTH', 'bricks_structure_width');
    // @since 1.10.2
    \define('BRICKS_DB_BUILDER_SCALE_OFF', 'bricks_builder_scale_off');
    \define('BRICKS_DB_BUILDER_WIDTH_LOCKED', 'bricks_builder_width_locked');
    \define('BRICKS_DB_COMPONENTS', 'bricks_components');
    \define('BRICKS_DB_COLOR_PALETTE', 'bricks_color_palette');
    \define('BRICKS_DB_BREAKPOINTS', 'bricks_breakpoints');
    \define('BRICKS_DB_STYLE_MANAGER', 'bricks_style_manager');
    // @since 2.2
    \define('BRICKS_DB_GLOBAL_QUERIES', 'bricks_global_queries');
    \define('BRICKS_DB_GLOBAL_QUERIES_CATEGORIES', 'bricks_global_queries_categories');
    \define('BRICKS_DB_GLOBAL_SETTINGS', 'bricks_global_settings');
    \define('BRICKS_DB_GLOBAL_ELEMENTS', 'bricks_global_elements');
    \define('BRICKS_DB_GLOBAL_CLASSES', 'bricks_global_classes');
    \define('BRICKS_DB_GLOBAL_CLASSES_CATEGORIES', 'bricks_global_classes_categories');
    \define('BRICKS_DB_GLOBAL_CLASSES_LOCKED', 'bricks_global_classes_locked');
    \define('BRICKS_DB_GLOBAL_CLASSES_TIMESTAMP', 'bricks_global_classes_timestamp');
    \define('BRICKS_GLOBAL_CLASSES_DEFAULT_TRASH_RETENTION_DAYS', 30);
    \define('BRICKS_DB_GLOBAL_CLASSES_TRASH', 'bricks_global_classes_trash');
    \define('BRICKS_DB_GLOBAL_CLASSES_USER', 'bricks_global_classes_user');
    \define('BRICKS_DB_PSEUDO_CLASSES', 'bricks_global_pseudo_classes');
    \define('BRICKS_DB_GLOBAL_VARIABLES', 'bricks_global_variables');
    \define('BRICKS_DB_GLOBAL_VARIABLES_CATEGORIES', 'bricks_global_variables_categories');
    \define('BRICKS_DB_PINNED_ELEMENTS', 'bricks_pinned_elements');
    \define('BRICKS_DB_SIDEBARS', 'bricks_sidebars');
    \define('BRICKS_DB_THEME_STYLES', 'bricks_theme_styles');
    \define('BRICKS_DB_ADOBE_FONTS', 'bricks_adobe_fonts');
    \define('BRICKS_DB_ELEMENT_MANAGER', 'bricks_element_manager');
    \define('BRICKS_DB_FONT_FAVORITES', 'bricks_font_favorites');
    // @since 2.0
    \define('BRICKS_DB_ICON_SETS', 'bricks_icon_sets');
    // @since 2.0
    \define('BRICKS_DB_CUSTOM_ICONS', 'bricks_custom_icons');
    // @since 2.0
    \define('BRICKS_DB_DISABLED_ICON_SETS', 'bricks_disabled_icon_sets');
    // @since 2.0
    \define('BRICKS_DB_EDITOR_MODE', '_bricks_editor_mode');
    \define('BRICKS_BREAKPOINTS_LAST_GENERATED', 'bricks_breakpoints_last_generated');
    \define('BRICKS_CSS_FILES_LAST_GENERATED', 'bricks_css_files_last_generated');
    \define('BRICKS_CSS_FILES_LAST_GENERATED_TIMESTAMP', 'bricks_css_files_last_generated_timestamp');
    \define('BRICKS_CSS_FILES_ADMIN_NOTICE', 'bricks_css_files_admin_notice');
    \define('BRICKS_CODE_SIGNATURES_LAST_GENERATED', 'bricks_code_signatures_last_generated');
    \define('BRICKS_CODE_SIGNATURES_LAST_GENERATED_TIMESTAMP', 'bricks_code_signatures_last_generated_timestamp');
    \define('BRICKS_CODE_SIGNATURES_ADMIN_NOTICE', 'bricks_code_signatures_admin_notice');
    \define('BRICKS_DB_CAPABILITIES_PERMISSIONS', 'bricks_capabilities_permissions');
    \define('BRICKS_LOCK_CODE_SIGNATURES', \false);
    /**
     * Syntax since 1.2 (container element)
     *
     * Pre 1.2: '_bricks_page_{$content_type}'
     */
    \define('BRICKS_DB_PAGE_HEADER', '_bricks_page_header_2');
    \define('BRICKS_DB_PAGE_CONTENT', '_bricks_page_content_2');
    \define('BRICKS_DB_PAGE_FOOTER', '_bricks_page_footer_2');
    \define('BRICKS_DB_PAGE_SETTINGS', '_bricks_page_settings');
    \define('BRICKS_DB_REMOTE_TEMPLATES', 'bricks_remote_templates');
    \define('BRICKS_DB_TEMPLATE_SLUG', 'bricks_template');
    \define('BRICKS_DB_TEMPLATE_TAX_BUNDLE', 'template_bundle');
    \define('BRICKS_DB_TEMPLATE_TAX_TAG', 'template_tag');
    \define('BRICKS_DB_TEMPLATE_TYPE', '_bricks_template_type');
    \define('BRICKS_DB_TEMPLATE_SETTINGS', '_bricks_template_settings');
    \define('BRICKS_DB_CUSTOM_FONTS', 'bricks_fonts');
    \define('BRICKS_DB_CUSTOM_FONT_FACES', 'bricks_font_faces');
    \define('BRICKS_DB_CUSTOM_FONT_FACE_RULES', 'bricks_font_face_rules');
    // @since 1.7.2
    \define('BRICKS_EXPORT_TEMPLATES', 'brick_export_templates');
    \define('BRICKS_ADMIN_PAGE_URL_LICENSE', \admin_url('admin.php?page=bricks-license'));
    \define('BRICKS_AUTH_CHECK_INTERVAL', 30);
    \define('BRICKS_DEBUG', \false);
    \define('BRICKS_MAX_REVISIONS_TO_KEEP', 100);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_COMPONENTS', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_COLOR_PALETTE', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_GLOBAL_QUERIES', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_GLOBAL_QUERIES_CATEGORIES', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_CLASSES', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_CLASSES_CATEGORIES', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_VARIABLES', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_VARIABLES_CATEGORIES', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_GLOBAL_ELEMENTS', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_FONT_FAVORITES', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_ICON_SETS', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_CUSTOM_ICONS', \false);
    \define('BRICKS_MULTISITE_USE_MAIN_SITE_DISABLED_ICON_SETS', \false);
    \define('BRICKS_ASSETS_SUFFIX', '');
    /**
     * Builder check
     *
     * @since 1.0
     */
    function bricks_is_builder()
    {
    }
    function bricks_is_builder_iframe()
    {
    }
    function bricks_is_builder_main()
    {
    }
    function bricks_is_frontend()
    {
    }
    /**
     * Is AJAX call check
     *
     * @since 1.0
     */
    function bricks_is_ajax_call()
    {
    }
    /**
     * Is WP REST API call check
     *
     * @since 1.5
     */
    function bricks_is_rest_call()
    {
    }
    /**
     * Is builder call (AJAX OR REST API)
     *
     * @since 1.5
     */
    function bricks_is_builder_call()
    {
    }
    /**
     * Render dynamic data tags inside of a content string
     *
     * Example: Inside an executing Code element, custom plugin, etc.
     *
     * Academy: https://academy.bricksbuilder.io/article/function-bricks_render_dynamic_data/
     *
     * @since 1.5.5
     *
     * @param string $content The content (including dynamic data tags).
     * @param int    $post_id The post ID.
     * @param string $context text, image, link, etc.
     *
     * @return string
     */
    function bricks_render_dynamic_data($content, $post_id = 0, $context = 'text')
    {
    }
    /*
     * Print array as JSON and then
     * exit program with a particular
     * exit-code.
     */
    function sysexit($results, $status)
    {
    }
    /**
     * Comments list
     *
     * @since 1.0
     */
    function bricks_list_comments($comment, $args, $depth)
    {
    }
    /**
     * Move comment form textarea to the bottom
     *
     * @since 1.0
     */
    function bricks_comment_form_fields_order($fields)
    {
    }
    /**
     * Add custom fields to menu item (Appearance > Menus)
     *
     * Much better than using the Walker_Nav_Menu_Edit class ;)
     *
     * https://make.wordpress.org/core/2020/02/25/wordpress-5-4-introduces-new-hooks-to-add-custom-fields-to-menu-items/
     *
     * @since 1.8
     */
    function bricks_nav_menu_item_custom_fields($item_id, $item)
    {
    }
    /**
     * Save the menu item postmeta
     *
     * Mega menu (= selected Bricks template ID )
     * Multilevel menu
     *
     * @param int $menu_id
     * @param int $menu_item_db_id
     *
     * @since 1.8
     */
    function bricks_update_nav_menu_item($menu_id, $menu_item_db_id)
    {
    }
    function woocommerce_output_content_wrapper()
    {
    }
    function woocommerce_output_content_wrapper_end()
    {
    }
}