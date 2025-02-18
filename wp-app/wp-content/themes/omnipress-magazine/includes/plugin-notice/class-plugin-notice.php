<?php
/**
 * Plugin notice class file.
 *
 * * Place this folder inside your includes folder.
 * * Change current namespace to your themes namespace. |||VERY IMPORTANT|||
 * * Place this code in your functions.php file:" require_once get_theme_file_path( 'includes/plugin-notice/class-plugin-notice.php' ); "
 */

namespace Omnipress_Magazine;

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

new Plugin_Notice();

class Plugin_Notice {

	/** @var \WP_Theme */
	private $theme;

	private $plugin_status = 'not-found';

	private $omnipress_url = 'https://omnipressteam.com/';

	/**
	 * Class construct.
	 */
	public function __construct() {

		$this->theme = wp_get_theme();

		$this->plugin_status = $this->get_plugin_status( 'omnipress/omnipress.php' );

		if ( 'active' === $this->plugin_status ) {
			return;
		}

		add_action( 'admin_head', array( $this, 'notice_styles' ) );
		add_action( 'admin_notices', array( $this, 'render_notice' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'notice_scripts' ) );
	}

	/**
	 * Returns plugins status.
	 *
	 * @param string $plugin_slug
	 * @return string active | paused | not-found
	 */
	protected function get_plugin_status( $plugin_slug ) {

		if ( ! function_exists( 'is_plugin_active' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		if ( is_plugin_active( $plugin_slug ) ) {
			return 'active';
		}

		static $plugins = array();

		if ( ! $plugins ) {
			$plugins = get_plugins();
		}

		if ( isset( $plugins[ $plugin_slug ] ) ) {
			return 'paused';
		}

		return 'not-found';

	}

	public function notice_styles() {
		?>
		<style id="omnipressteams-admin-notice-styles">

			#omnipressteams-plugin-notice {
				border: none;
				border-left: 4px solid #72aee6;
			}

			.wp-core-ui .notice.is-dismissible {
				padding-right: 0;
			}

			
			.notice.is-dismissible .omnipressteams-content-wrap {
				padding-right: 38px;
			}

			.omnipressteams-content-wrap {
				background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/includes/plugin-notice/notice-bg.png');
				background-position: center;
				display: flex;
				align-items: center;
				justify-content: space-between;
			}

			.omnipressteams-notice-left {
				padding: 0 40px;
			}
			.omnipressteams-notice-left h2 {
				font-size: 28px;
				font-weight: 700;
				padding: 0;
				margin: 0;
			}

			.omnipressteams-notice-left p {
				font-size: 17px;
				line-height: 30px;
				margin: 25px 0;
				padding: 0;
			}

			.notice-actions button {
				background: #175FFF;
				color: #ffffff;
				cursor: pointer;
				font-size: 18px;
				font-weight: 500;
				border: none;
				border-radius: 199px;
				padding: 10px 20px;
				transition: all 0.2s linear;
			}
			.notice-actions button:hover {
				background: #003bbd;
			}

			.omnipressteams-notice-right {
				padding: 32px 0 0;
			}

			.omnipressteams-notice-right img {
				width: 400px;
			}
		</style>
		<?php
	}

	protected function _render_title() {
		?>
		<h2><?php printf( 'Thank you for installing %s!', '<span>' . $this->theme->get( 'Name' ) . '</span>' ); ?></h2>
		<?php
	}

	protected function _render_content() {

		$link = '<a href="' . $this->omnipress_url . '" target="_blank">Omnipress</a>';

		$text = sprintf(
			'Explore the full potential of %1$s! <br> Get started by installing %2$s and access dozens of ready-to-use patterns and demos templates.',
			$this->theme->get( 'Name' ),
			'paused' === $this->plugin_status ? "activating {$link}" : "installing {$link}"
		);

		echo wp_kses_post( wpautop( $text ) );
	}

	protected function _render_actions() {
		?>
		<div class="notice-actions">
			<button type="button" id="btn-install-activate">
				<?php echo 'paused' === $this->plugin_status ? 'Activate Omnipress' : 'Install And Activate Omnipress'; ?>
			</button>
		</div>
		<?php
	}

	public function render_notice() {
		?>
		<div id="omnipressteams-plugin-notice" class="notice notice-info is-dismissible">
			<div class="omnipressteams-content-wrap">
				<div class="omnipressteams-notice-left">
					<?php
						$this->_render_title();

						$this->_render_content();

						$this->_render_actions();
					?>
				</div>
				<div class="omnipressteams-notice-right">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/includes/plugin-notice/notice-img.png">
				</div>
			</div>
		</div>
		<?php
	}

	public function notice_scripts() {
		ob_start();
		?>
		<script>
			(function(wp) {
				const apiFetch = wp.apiFetch;

				const btnInstallActivate = document.getElementById('btn-install-activate');

				if ( btnInstallActivate ) {
					btnInstallActivate.addEventListener('click', function(e) {
						e.preventDefault();

						btnInstallActivate.setAttribute('disabled', 'disabled');
						btnInstallActivate.innerText = '<?php echo 'paused' === $this->plugin_status ? 'Activating...' : 'Installing...'; ?>';

						apiFetch({
							path: '<?php echo 'paused' === $this->plugin_status ? 'wp/v2/plugins/omnipress/omnipress' : 'wp/v2/plugins'; ?>',
							method: "POST",
							data: {
								slug: 'omnipress',
								status: 'active'
							}
						}).then(function(res) {
							if ('active' === res?.status) {
								window.location.href = "<?php echo esc_url( set_url_scheme( admin_url( '/admin.php?page=omnipress' ) ) ); ?>";
							} else {
								alert( 'Something went wrong. Please try again later.' );
								window.location.reload();
							}
						}).catch(function() {
							alert( 'Something went wrong. Please try again later.' );
							window.location.reload();
						});
					});
				}
			})(wp);
		</script>
		<?php
		$scripts = ob_get_contents();
		ob_end_clean();

		wp_enqueue_script( 'wp-api-fetch' );
		wp_add_inline_script( 'wp-api-fetch', str_replace( array( '<script>', '</script>' ), '', $scripts ) );

	}

}
