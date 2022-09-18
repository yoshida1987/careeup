<?php

// css,jsの読み込み */
function enqueue_name(){
    // スタイルシート
	wp_enqueue_style('style-common', get_template_directory_uri() . '/css/common.css', array());
    wp_enqueue_style('style-header', get_template_directory_uri() . '/css/header.css', array());
    wp_enqueue_style('style-footer', get_template_directory_uri() . '/css/footer.css', array());
    wp_enqueue_style('style-common', get_template_directory_uri() . '/css/style.css', array());
    // スクリプトファイル
    wp_enqueue_script('script-common', get_template_directory_uri() . '/js/common.js', array(), false, true);
}
add_action('wp_enqueue_scripts','enqueue_name');
