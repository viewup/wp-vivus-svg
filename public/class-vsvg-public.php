<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://viewup.com.br/
 * @since      1.0.0
 *
 * @package    Vsvg
 * @subpackage Vsvg/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Vsvg
 * @subpackage Vsvg/public
 * @author     Viewup <emails@vieuwp.com.br>
 */
class Vsvg_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @param      string $plugin_name The name of the plugin.
	 * @param      string $version The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Vsvg_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Vsvg_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/vsvg-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		// The Vivus SVG library
		wp_register_script( 'vivus', 'https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.3/vivus.js', array(), '0.4.3', true );

		// The main Plugin scripts
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/vsvg-public.js', array(
			'jquery',
			'vivus'
		), $this->version, true );

	}

}
