<?php
namespace CodexUnicThemeElementor\Widget;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

/**
 * CodexUnicTheme Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class CodexUnicThemeBanner extends \Elementor\Widget_Base {
	/**
	 * Get widget name.
	 *
	 * Retrieve CodexUnicTheme Elementor widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'eblog-banner';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve CodexUnicTheme Elementor widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Banner', 'codexunictheme-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve CodexUnicTheme Banner widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-favorite';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the CodexUnicTheme Slider widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'codexunictheme-elementor' ];
	}

	public function get_keywords() {
		return [ 'Banner' ];
	}

	public function get_script_depends() {
		return [ 'codexunictheme-elementor'];
	}

	// BDT Position
	protected function element_pack_position() {
	    $position_options = [
	        ''              => esc_html__('Default', 'codexunictheme-elementor'),
	        'top-left'      => esc_html__('Top Left', 'codexunictheme-elementor') ,
	        'top-center'    => esc_html__('Top Center', 'codexunictheme-elementor') ,
	        'top-right'     => esc_html__('Top Right', 'codexunictheme-elementor') ,
	        'center'        => esc_html__('Center', 'codexunictheme-elementor') ,
	        'center-left'   => esc_html__('Center Left', 'codexunictheme-elementor') ,
	        'center-right'  => esc_html__('Center Right', 'codexunictheme-elementor') ,
	        'bottom-left'   => esc_html__('Bottom Left', 'codexunictheme-elementor') ,
	        'bottom-center' => esc_html__('Bottom Center', 'codexunictheme-elementor') ,
	        'bottom-right'  => esc_html__('Bottom Right', 'codexunictheme-elementor') ,
	    ];

	    return $position_options;
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'banner_content_section',
			[
				'label' => esc_html__( 'Banner Content', 'codexunictheme-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'codexunictheme-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'banner-style-1'  => esc_html__( 'Banner Style 1', 'codexunictheme-elementor' ),
					'banner-style-2' => esc_html__( 'Banner Style 2', 'codexunictheme-elementor' ),
					'banner-style-3' => esc_html__( 'Banner Style 3', 'codexunictheme-elementor' ),
					'banner-style-4' => esc_html__( 'Banner Style 4', 'codexunictheme-elementor' ),
					'banner-style-5' => esc_html__( 'Banner Style 5', 'codexunictheme-elementor' ),
				],
				'default'   => 'banner-style-1',
			]
		);

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Sub Heading', 'codexunictheme-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your sub heading', 'codexunictheme-elementor' ),
				'default'     => __( 'It is Sub Heading', 'codexunictheme-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-2', 'banner-style-3',  'banner-style-5']
				],
			]
		);

		$this->add_control(
			'heading_type',
			[
				'label'     => esc_html__( 'Sub Heading Type', 'codexunictheme-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'h1'  => esc_html__( 'H1', 'codexunictheme-elementor' ),
					'h2'  => esc_html__( 'H2', 'codexunictheme-elementor' ),
					'h3'  => esc_html__( 'H3', 'codexunictheme-elementor' ),
					'h4'  => esc_html__( 'H4', 'codexunictheme-elementor' ),
					'h5'  => esc_html__( 'H5', 'codexunictheme-elementor' ),
					'h6'  => esc_html__( 'H6', 'codexunictheme-elementor' ),
					'span'  => esc_html__( 'Span', 'codexunictheme-elementor' ),
				],
				'default'   => 'Select Sub Heading',
				'condition' => [
					'chose_style' => ['banner-style-2', 'banner-style-3',  'banner-style-5']
				],
			]
		);
		$this->add_control(
			'show_heading',
			[
				'label'   => esc_html__( 'Show Heading', 'codexunictheme-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'heading_font_size',
			[
				'label'       => __( 'Sub Heading Font Size', 'codexunictheme-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'codexunictheme-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-2', 'banner-style-3',  'banner-style-5']
				],
			]
		);
		$this->add_control(
			'bg_image',
			[
				'label'   => esc_html__( 'Backgroud Image', 'codexunictheme-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Background Image', 'codexunictheme-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2', 'banner-style-4', 'banner-style-5']
				],
			]
		);


	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings);

		$bg_image_src = wp_get_attachment_image_src( $settings['bg_image']['id'], 'full' );
		$bg_image_url = $bg_image_src ? $bg_image_src[0] : '';

		$heading_font_size = ($settings['heading_font_size']) ? $settings['heading_font_size'] : '85px';
		$heading_type = ($settings['heading_type']) ? $settings['heading_type'] : 'h1';	

		?>
		<style>
			.header-banner {
				font-size: <?php print esc_attr( $heading_font_size ); ?>;
			}
		</style>
		
		<?php if( $chose_style == 'banner-style-1' ): ?>

			<div class="header-banner" style="background-image:url(<?php print esc_url( $bg_image_url ); ?>)">
				<?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>					
            		<<?php print esc_attr( $heading_type ); ?>>

            			<?php echo wp_kses_post($settings['heading']); ?>

            		</<?php print esc_attr( $heading_type ); ?>>
				<?php endif; ?>	
			</div>

		<?php	elseif( $chose_style == 'banner-style-2' ): ?>

			<div class="header-banner2" style="background-image:url(<?php print esc_url( $bg_image_url ); ?>)">
				<?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>					
            		<<?php print esc_attr( $heading_type ); ?>>

            			<?php echo wp_kses_post($settings['heading']); ?>

            		</<?php print esc_attr( $heading_type ); ?>>
				<?php endif; ?>	
			</div>

		<?php	elseif( $chose_style == 'banner-style-3' ): ?>

			<div class="header-banner3">
				<h3>Hello 3</h3>
			</div>

		<?php	elseif( $chose_style == 'banner-style-4' ): ?>

			<div class="header-banner4">
				<h3>Hello 4</h3>
			</div>

		<?php	elseif( $chose_style == 'banner-style-5' ): ?>

			<div class="header-banner5">
				<h3>Hello 5</h3>
			</div>

		<?php endif;


	}
}