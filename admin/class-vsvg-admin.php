<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://viewup.com.br/
 * @since      1.0.0
 *
 * @package    Vsvg
 * @subpackage Vsvg/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Vsvg
 * @subpackage Vsvg/admin
 * @author     Viewup <emails@vieuwp.com.br>
 */
class Vsvg_Admin {

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
	 * @param      string $plugin_name The name of this plugin.
	 * @param      string $version The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
//		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/vsvg-admin.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
//		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/vsvg-admin.js', array( 'jquery' ), $this->version, false );
	}

	/**
	 * Add an notice to install the SVG support plugin
	 *
	 * @since 1.0.0
	 */
	public function svg_support_reminder() {

		if ( is_plugin_active( 'svg-support/svg-support.php' ) ) {
			return;
		}

		$plugins   = get_plugins();
		$installed = false;
		foreach ( $plugins as $plugin ) {
			if ( $this->plugin_name === $plugin['TextDomain'] ) {
				$installed = true;
				break;
			}
		}

		$action = 'install-plugin';
		$slug   = 'svg-support';
		$link   = wp_nonce_url( add_query_arg( array(
			'action' => $action,
			'plugin' => $slug
		), admin_url( 'update.php' ) ), $action . '_' . $slug );
		?>
        <div class="notice notice-info is-dismissible">
            <p><?php _e( 'To easy insert animated SVG, install the SVG support plugin', 'vsvg' ); ?></p>
            <p>
				<?php if ( ! $installed ) : ?>
                    <a href="<?php echo $link ?>" class="button button-primary"><?php _e( 'Install Now', 'vsvg' ) ?></a>
				<?php else : ?>
                    <a href="<?php echo esc_url_raw( self_admin_url( 'plugins.php' ) ); ?>"
                       class="button button-primary"><?php _e( 'Activate Now', 'vsvg' ) ?></a>
				<?php endif ?>

            </p>
        </div>
		<?php
	}

}
