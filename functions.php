<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';



class blog {
    function blog() {
        add_action('init',array($this,'create_post_type'));
    }
    function create_post_type() {
        $labels = array(
            'name' => 'ブログ',
            'singular_name' => 'ブログ',
            'add_new' => '新規追加',
            'all_items' => 'ブログ一覧',
            'add_new_item' => '新規追加',
            'edit_item' => '修正',
            'new_item' => '新しいアイテム',
            'view_item' => '表示を確認',
            'search_items' => '探す',
            'not_found' =>  'ありません',
            'not_found_in_trash' => 'ゴミ箱にはありません',
            'parent_item_colon' => '親:',
            'menu_name' => 'ブログ'
        );
        $args = array(
            'labels' => $labels,
            'description' => "ブログです",
            'public' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'menu_position' => 10,
            'menu_icon' => 'dashicons-flag',
            'capability_type' => 'post',
            'hierarchical' => false,
            'supports' => array('title','editor','author','thumbnail','excerpt','revisions','page-attributes','post-formats'),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
        );
        register_post_type('blog',$args);
    }
}
$blog = new blog();