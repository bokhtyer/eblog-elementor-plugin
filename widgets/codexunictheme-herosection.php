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
class CodexUnicThemeHeroBanner extends \Elementor\Widget_Base {
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
		return 'eblog-hero-banner';
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
		return __( 'Hero Banner', 'codexunictheme-elementor' );
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
		return [ 'Hero Banner' ];
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
				'label' => esc_html__( 'Hero Banner Content', 'codexunictheme-elementor' ),
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
				],
				'default'   => 'banner-style-1',
			]
		);

		$this->add_control(
			'sub_heading',
			[
				'label'       => __( 'Sub Heading', 'codexunictheme-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your sub heading', 'codexunictheme-elementor' ),
				'default'     => __( 'It is Sub Heading', 'codexunictheme-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2']
				],
			]
		);

		$this->add_control(
			'show_sub_heading',
			[
				'label'   => esc_html__( 'Show Sub Heading', 'codexunictheme-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'codexunictheme-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'codexunictheme-elementor' ),
				'default'     => __( 'It is Heading', 'codexunictheme-elementor' )
			]
		);

		$this->add_control(
			'content',
			[
				'label'       => __( 'Content', 'codexunictheme-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your content', 'codexunictheme-elementor' ),
				'default'     => __( 'It is content', 'codexunictheme-elementor' )
			]
		);

		$this->add_control(
			'button',
			[
				'label'       => __( 'Button Text', 'codexunictheme-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'default'     => __( 'About Us', 'codexunictheme-elementor' )
			]
		);

		$this->add_control(
			'button_link',
			[
				'label'       => __( 'Button Link', 'codexunictheme-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'default'     => __( '#', 'codexunictheme-elementor' )
			]
		);

		$this->add_control(
			'bg_image',
			[
				'label'   => esc_html__( 'Backgroud Image', 'codexunictheme-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Background Image', 'codexunictheme-elementor' ),
			]
		);

		$this->add_control(
			'right_image',
			[
				'label'   => esc_html__( 'Right Image', 'codexunictheme-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Right Image', 'codexunictheme-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1']
				],
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
			't_color',
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
				'selector' 	=> '{{WRAPPER}} .banner_text h2',
				'condition' => [
					'chose_style' => ['banner-style-1']
				],
			]
		);
		$this->end_controls_section();

		// Button 1 Style
		$this->start_controls_section(
			'button1_style',
			array(
				'label'		=> esc_html__('Button 1 Style','codexunictheme-elementor'),
				'tab'		=> Controls_Manager::TAB_STYLE, 
			)
		);
		$this->add_control(
			'button1_color',
			array(
				'label'		=> __('Color','codexunictheme-elementor'),
				'type'		=> Controls_Manager::COLOR,
			)
		);
		$this->add_control(
			'button1_hover_color',
			array(
				'label'		=> __('Hover Color','codexunictheme-elementor'),
				'type'		=> Controls_Manager::COLOR,
			)
		);
		$this->add_control(
			'button1_bg_color',
			array(
				'label'		=> __('Background Color','codexunictheme-elementor'),
				'type'		=> Controls_Manager::COLOR,
			)
		);
		$this->add_control(
			'button1_bg_hover_color',
			array(
				'label'		=> __('Background Hover','apiza'),
				'type'		=> Controls_Manager::COLOR,
			)
		);
		$this->add_control(
			'button_1_margin',
			[
				'label' 		=> __( 'Margin', 'codexunictheme-elementor' ),
				'type' 			=> Controls_Manager::DIMENSIONS,
				'size_units' 	=> [ 'px', '%', 'em' ],
				'selectors'		=> [
					'{{WRAPPER}} .default_button a.buttond' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'button_1_padding',
			[
				'label' 		=> __( 'Padding', 'codexunictheme-elementor' ),
				'type' 			=> Controls_Manager::DIMENSIONS,
				'size_units' 	=> [ 'px', '%', 'em' ],
				'selectors'		=> [
					'{{WRAPPER}} .default_button a.buttond' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings);

		$content = $settings['content'];
		$button = $settings['button'];
		$button_link = $settings['button_link'];
		$t_color = $settings['t_color'];
		$button1_color = $settings['button1_color'];
		$button1_hover_color = $settings['button1_hover_color'];
		$button1_bg_color = $settings['button1_bg_color'];
		$button1_bg_hover_color = $settings['button1_bg_hover_color'];

		$bg_image_src = wp_get_attachment_image_src( $settings['bg_image']['id'], 'full' );
		$bg_image_url = $bg_image_src ? $bg_image_src[0] : '';

		$right_image = $settings['right_image'];
		?>
		<style>
			.hero-area{
				background-image: url(<?php print esc_url( $bg_image_url ); ?>);
			}
			.banner_text h2{
				color: <?php print esc_attr( $t_color ); ?> !important;
			}
			.default_button a.buttond{
				color: <?php print esc_attr( $button1_color ); ?> !important;
				background: <?php print esc_attr( $button1_bg_color ); ?> !important;
			}
			.default_button a.buttond:hover{
				color: <?php print esc_attr( $button1_hover_color ); ?> !important;
				background: <?php print esc_attr( $button1_bg_hover_color ); ?> !important;
			}
		</style>
		<?php if( $chose_style == 'banner-style-1' ): ?>
			<div class="hero-area">
				<div class="banner_area">
					<div class="container">
						<div class="row align-items-center">
							<!-- Banner Text -->
							<div class="col-lg-6">
								<div class="banner_text">
									<!-- subtitle -->
									<?php if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>	
				            			<h6><?php echo wp_kses_post($settings['sub_heading']); ?></h6>
									<?php endif; ?>	
									<h2><?php echo wp_kses_post($settings['heading']); ?></h2>
									<!-- content -->
									<p><?php echo wp_kses_post($content); ?></p>

									<!-- Button -->
									<?php if($button): ?>
										<div class="default_button mt-25">
											<a class="buttond" href="<?php echo esc_url($button_link); ?>"><?php echo wp_kses_post($button); ?></a>
										</div>
									<?php endif; ?>

								</div>
							</div>
							<!-- Banner Image -->
							<div class="col-lg-6">
								<div class="banner-left-image pt-15 pb-15">
									<img src="<?php echo $right_image['url']; ?>" alt="Banner Left Image">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php	elseif( $chose_style == 'banner-style-2' ): ?>

			<div class="hero-area">
				<div class="banner_area">
					<div class="container">
						<div class="row align-items-center">
							<!-- Banner Text -->
							<div class="col-lg-8 offset-lg-2">
								<div class="banner_text text-center pt-150 pb-100">
									<!-- subtitle -->
									<?php if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>	
				            			<h6><?php echo wp_kses_post($settings['sub_heading']); ?></h6>
									<?php endif; ?>	
									<!-- title -->
									<h2 class="stitle"><?php echo wp_kses_post($settings['heading']); ?></h2>
									<!-- content -->
									<p><?php echo wp_kses_post($content); ?></p>

									<!-- Button -->
									<?php if($button): ?>
										<div class="default_button mt-25">
											<a class="buttond" href="<?php echo esc_url($button_link); ?>"><?php echo wp_kses_post($button); ?></a>
										</div>
									<?php endif; ?>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		<?php endif;
	}
}