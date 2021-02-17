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
class CodexUnicThemeSectionTitle extends \Elementor\Widget_Base {
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
		return 'eblog-section-title';
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
		return __( 'Section Title', 'codexunictheme-elementor' );
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
		return [ 'Section Title' ];
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
			'section_title',
			[
				'label' => esc_html__( 'Section Title', 'codexunictheme-elementor' ),
			]
		);

		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'codexunictheme-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your Section Title', 'codexunictheme-elementor' ),
				'default'     => __( 'This is Section TItle', 'codexunictheme-elementor' )
			]
		);
		$this->add_control(
			'text_align',
			[
				'label' 	=> __( 'Alignment', 'codexunictheme-elementor' ),
				'type' 		=> Controls_Manager::CHOOSE,
				'options' 	=> [
					'left' 		=> [
						'title' 	=> __( 'Left', 'codexunictheme-elementor' ),
						'icon' 		=> 'fa fa-align-left',
					],
					'center' 	=> [
						'title' 	=> __( 'Center', 'codexunictheme-elementor' ),
						'icon' 		=> 'fa fa-align-center',
					],
					'right' 	=> [
						'title' 	=> __( 'Right', 'codexunictheme-elementor' ),
						'icon' 	=> 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);
		$this->end_controls_section();

		// Start Controls Style Sections
		// Title Style
		$this->start_controls_section(
			'Title_style',
			array(
				'label'		=> __('Title Style','codexunictheme-elementor'),
				'tab'		=> Controls_Manager::TAB_STYLE,
			)
		);
		$this->add_control(
			'color',
			array(
				'label'		=> __('Title Color','codexunictheme-elementor'),
				'type'		=> Controls_Manager::COLOR,
			)
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' 		=> 'title_typography',
				'label' 	=> __( 'Typography', 'codexunictheme-elementor' ),
				'scheme' 	=> Scheme_Typography::TYPOGRAPHY_1,
				'selector' 	=> '{{WRAPPER}} .section-title h2'
			]
		);
		$this->end_controls_section();

		// Button 1 Style
		$this->start_controls_section(
			'shap_style',
			array(
				'label'		=> esc_html__('Shape Style','codexunictheme-elementor'),
				'tab'		=> Controls_Manager::TAB_STYLE, 
			)
		);
		$this->add_control(
			'shap_color',
			array(
				'label'		=> __('Shape Color','codexunictheme-elementor'),
				'type'		=> Controls_Manager::COLOR,
			)
		);
		$this->end_controls_section();
	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings);

		$title = $settings['title'];
		$color = $settings['color'];
		$text_align = $settings['text_align'];
		$shap_color = $settings['shap_color'];
		?>
		<style>
			.section-title h2{
				color: <?php print esc_attr( $color ); ?> !important;
				text-align: <?php echo $text_align; ?>;
				color: <?php print esc_attr( $color ); ?> !important;
			}
			.section-title h2::before {
				background: <?php print esc_attr( $shap_color ); ?> !important;
			}
			.section-title h2::after {
				background: <?php print esc_attr( $shap_color ); ?> !important;
			}
		</style>
		<div class="section-headding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title mb-50 <?php echo $text_align; ?>">
							<h2><?php echo wp_kses_post($title); ?></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}