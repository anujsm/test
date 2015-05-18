<?php
/*
Plugin Name: Admin Charts
Plugin URI: http://dev.imbilal.com/wpadmincharts
Description: JavaScript charts for WordPress admin. These charts show different statistics in the WordPress admin.
Version: 1.0
Author: AM
Author URI: www
License: GPLv2 or later
*/

 
/********************************* Adding some constants for later use *********************************/
define( 'ROOT', plugin_dir_url( __FILE__ ) );
 
/********************************* Adding the admin page for the plugin *********************************/
add_action( 'admin_menu', 'chart_add_admin_page' );
function chart_add_admin_page() {
    add_plugins_page(
        'Charts For Wordpress',
        'Admin Charts',
        'administrator',
        'admin-charts',
        'render_admin_charts_page'
    );
}
 
function render_admin_charts_page() {
    ?>
    <div class="wrap">
        <h2>Admin Charts</h2>
        <form action="#" method="post" name="admin_chart_form" id="admin_chart_form">
            <p>
                <label for="chart_data_type">What type of data do you want to show?</label>
                <select name="chart_data_type" id="chart_data_type">
                    <option value="chart_most_popular" <?php selected_option('chart_most_popular'); ?>>Most Popular Post</option>
                </select>
            </p>
            <input type="submit" class="button-primary" value="Display Data" id="show_chart" name="show_chart">
        </form>
        <div id="chart-stats" class="chart-container" style="width:900px; height:500px;"></div>
    </div>
    <?php
}
 
/********************************* Adding necessary scripts/styles needed *********************************/
add_action( 'admin_enqueue_scripts', 'chart_register_scripts' );
function chart_register_scripts() {
    wp_register_script(
        'highCharts',
        ROOT . 'js/highcharts.js',
        array( 'jquery' ),
        '3.0',
        true
    );
    wp_register_script(
        'adminCharts',
        ROOT . 'js/admin_charts.js',
        array( 'highCharts' ),
        '1.0',
        true
    );
    wp_register_style(
        'adminChartsStyles',
        ROOT . 'css/admin_chart.css'
    );
}
 
add_action( 'admin_enqueue_scripts', 'chart_add_scripts' );
function chart_add_scripts( $hook ) {
    if ( 'plugins_page_admin-charts' == $hook ) {
 
        wp_enqueue_style( 'adminChartsStyles' );
        wp_enqueue_script( 'adminCharts' );
 
        // checking what type of data we are displaying
        if ( isset( $_POST['show_chart'] ) ) {
 
    if ( 'chart_most_popular' == $_POST['chart_data_type'] ) {
 
        $posts = new WP_Query(
            array(
                'post_type'      => 'post',
                'orderby'        => 'comment_count',
                'order'          => 'DESC',
                'posts_per_page' => 5
            )
        );
 
        $data = array(
            'data_type'  => 'chart_most_popular',
            'chart_type' => 'column',
            'post_data'  => $posts->posts
        );
 
        wp_localize_script( 'adminCharts', 'data', $data );
 
    }
 
}
    }
}


?>
