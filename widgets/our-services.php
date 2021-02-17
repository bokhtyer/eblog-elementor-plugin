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
class CodexUnicThemeOurServices extends \Elementor\Widget_Base {
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
		return 'eblog-ourservices';
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
		return __( 'Services Item', 'codexunictheme-elementor' );
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
		return [ 'Services Item' ];
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
			'Services_Item',
			array(
				'label'		=> esc_html__('Services Item Box','codexunictheme-elementor')
			)
		);
		$this->add_control(
			'icon',
			[
				'label' 	=> esc_html__( 'Icon', 'codexunictheme-elementor' ),
				'type' 		=> \Elementor\Controls_Manager::ICONS,
				'default' 	=> [
					'value' 	=> 'fas fa-star',
					'library' 	=> 'solid',
				],
			]
		);
		$this->add_control(
			'title',
			[
				'label'		=> esc_html__('Title','codexunictheme-elementor'),
				'type'		=> \Elementor\Controls_Manager::TEXTAREA,
				'default'	=> esc_html__('Services Title','codexunictheme-elementor')
			]
		);
		$this->add_control(
			'content',
			[
				'label'		=> esc_html__('Content','codexunictheme-elementor'),
				'type'		=> \Elementor\Controls_Manager::TEXTAREA,
				'default'	=> esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor lobortis ornare. ','codexunictheme-elementor')
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
		$this->start_controls_section(
			'box_style',
			array(
				'label'		=> __('Box Style','codexunictheme-elementor'),
				'tab'		=> Controls_Manager::TAB_STYLE,
			)
		);
		$this->add_control(
			'ba_color',
			array(
				'label'		=> __('Background Color','codexunictheme-elementor'),
				'type'		=> Controls_Manager::COLOR,
			)
		);
		$this->add_control(
			'margin',
			[
				'label' => __( 'Margin', 'codexunictheme-elementor' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .services-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'codexunictheme-elementor' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .services-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
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
				'selector' 	=> '{{WRAPPER}} .services-item h3'
			]
		);
		$this->end_controls_section();

		// Button 1 Style
		$this->start_controls_section(
			'icon_style',
			array(
				'label'		=> esc_html__('Icon Style','codexunictheme-elementor'),
				'tab'		=> Controls_Manager::TAB_STYLE, 
			)
		);
		$this->add_control(
			'icon_color',
			array(
				'label'		=> __('Icon Color','codexunictheme-elementor'),
				'type'		=> Controls_Manager::COLOR,
			)
		);
		$this->add_control(
			'icon_bg_color',
			array(
				'label'		=> __('Icon Background Color','codexunictheme-elementor'),
				'type'		=> Controls_Manager::COLOR,
			)
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' 		=> 'icon_typography',
				'label' 	=> __( 'Typography', 'codexunictheme-elementor' ),
				'scheme' 	=> Scheme_Typography::TYPOGRAPHY_1,
				'selector' 	=> '{{WRAPPER}} .services-item-icon'
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'content_style',
			array(
				'label'		=> __('Content Style','codexunictheme-elementor'),
				'tab'		=> Controls_Manager::TAB_STYLE,
			)
		);
		$this->add_control(
			'contnet_color',
			array(
				'label'		=> __('Content Color','codexunictheme-elementor'),
				'type'		=> Controls_Manager::COLOR,
			)
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' 		=> 'contnet_typography',
				'label' 	=> __( 'Typography', 'codexunictheme-elementor' ),
				'scheme' 	=> Scheme_Typography::TYPOGRAPHY_1,
				'selector' 	=> '{{WRAPPER}} .services-item p'
			]
		);
		$this->end_controls_section();
	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings);

		$icon = $settings['icon'];
		$title = $settings['title'];
		$content = $settings['content'];
		$text_align = $settings['text_align'];
		$ba_color = $settings['ba_color'];
		$color_title = $settings['color'];
		$icon_color = $settings['icon_color'];
		$icon_bg_color = $settings['icon_bg_color'];
		$contnet_color = $settings['contnet_color'];
		?>
		<style>
			.services-item{
				background: <?php print esc_attr( $ba_color ); ?> !important;
				text-align: <?php print esc_attr( $text_align ); ?> !important;
			}
			.services-item-icon{
				background: <?php print esc_attr( $icon_bg_color ); ?> !important;
				color: <?php print esc_attr( $icon_color ); ?> !important;
			}
			.services-item h3{
				color: <?php print esc_attr( $color_title ); ?> !important;
			}
			.services-item p{
				color: <?php print esc_attr( $contnet_color ); ?> !important;
			}
		</style>
		<div class="services-item">
			<div class="services-item-icon">
				<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
			</div>
			<?php if($title): ?>
				<h3><?php esc_html_e($title,'codexunictheme-elementor') ?></h3>
			<?php endif; ?>
			<?php if($content): ?>
				<p><?php esc_html_e($content,'codexunictheme-elementor') ?></p>
			<?php endif; ?>
		</div>
		<?php
	}
}