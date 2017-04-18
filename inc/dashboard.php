<?php

    //TODO add options to ask which modules should be removed

    // Admin Bar Button
    function materialize_fc_support_button($wp_admin_bar){
        $args = array(
        'id' => 'dylangore-support-button',
        'title' => 'Theme Support',
        'href' => 'mailto:hello@dylangore.ie?subject=[Theme Support] Materialize for Coders',
        'meta' => array(
        'class' => 'dylangore-support-button-class'
        )
    );
    $wp_admin_bar->add_node($args);
    }

    add_action('admin_bar_menu', 'materialize_fc_support_button', 10000);
	//Remove Admin Bar Links
	function remove_admin_bar_links() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
		$wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
		$wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
		$wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
		$wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
		$wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
	}
	add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

    // Add Dashboard Widgets
    function materialize_fc_dashboard_widgets() {
        global $wp_meta_boxes;

        wp_add_dashboard_widget('materialize_fc_theme_info_widget', 'Theme Information', 'materialize_fc_dashboard_theme_info');
		wp_add_dashboard_widget('materialize_fc_latest_news_widget', 'Latest News', 'materialize_fc_dashboard_latest_news');
    }

	function materialize_fc_dashboard_theme_info() {
        $theme_data = wp_get_theme();
        echo '<p>You are running the <b>' . $theme_data->get( 'Name' ) . '</b> Theme' .  ' version <b>' . $theme_data->get( 'Version' ) . '</b></p>';
    }

    function materialize_fc_dashboard_latest_news() {
        $theme_data = get_theme_data( get_theme_root() . '/' . 'crazycarts-child' . '/style.css' );
		$news_text = file_get_contents('https://dylangore.space/news.txt');
        echo($news_text);
    }

    // Remove Default Dashboard Widgets
    function materialize_fc_dashboard_remove_defaults() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
    }
        add_action( 'admin_init', 'materialize_fc_dashboard_remove_defaults' );
        add_action('wp_dashboard_setup', 'materialize_fc_dashboard_widgets');


?>
