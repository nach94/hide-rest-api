<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://helloeveryone.me/
 * @since      1.0.0
 *
 * @package    Hide_Rest_Api
 * @subpackage Hide_Rest_Api/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Hide_Rest_Api
 * @subpackage Hide_Rest_Api/admin
 * @author     HelloEveryone <hola@helloeveryone.me>
 */
class Hide_Rest_Api_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function add_plugin_admin_menu() {
		add_menu_page(
			'Hide REST API',
			'Hide REST API',
			'manage_options',
			'hide-rest-api',
			array( $this, 'display_plugin_admin_page' ),
			'dashicons-admin-generic',
			81
		);
	}

	public function register_settings() {
		register_setting(
			'hide_rest_api_options_group',
			'hide_rest_api_options'
		);
	}


	public function display_plugin_admin_page() {
		include_once plugin_dir_path( __FILE__ ) . 'partials/hide-rest-api-admin-display.php';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hide_Rest_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hide_Rest_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/hide-rest-api-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hide_Rest_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hide_Rest_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/hide-rest-api-admin.js', array( 'jquery' ), $this->version, false );

	}

}
