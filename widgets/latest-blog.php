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
class CodexUnicThemeEblogBlog extends \Elementor\Widget_Base {
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
		return 'eblog-blog';
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
		return __( 'Eblog Blog', 'codexunictheme-elementor' );
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
		return [ 'Eblog Blog' ];
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
			'Eblog_blog',
			array(
				'label'		=> __('Blog','codexunictheme-elementor')
			)
		);
		$this->add_control(
			'post_count',
			[
				'label' => esc_html__( 'Post Count', 'codexunictheme-elementor' ),
				'type' => Controls_Manager::SELECT,
                'options' => [
                    '2' => esc_html__('2', 'codexunictheme-elementor'),
                    '3' => esc_html__('3', 'codexunictheme-elementor'),
                    '4' => esc_html__('4', 'codexunictheme-elementor'),
                    '6' => esc_html__('6', 'codexunictheme-elementor'),
                    '8' => esc_html__('8', 'codexunictheme-elementor'),
                    '9' => esc_html__('9', 'codexunictheme-elementor'),
                    '12' => esc_html__('12', 'codexunictheme-elementor'),
                ],
                'default' => '3'
			]
		);
		$this->add_control(
            'orderby',
            [
                'label' => esc_html__('Order By', 'codexunictheme-elementor'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'ID' => esc_html__('Post ID', 'codexunictheme-elementor'),
                    'title' => esc_html__('Title', 'codexunictheme-elementor'),
                    'date' => esc_html__('Date', 'codexunictheme-elementor'),
                    'modified' => esc_html__('Last Modified Date', 'codexunictheme-elementor'),
                    'rand' => esc_html__('Random Order', 'codexunictheme-elementor'),
                    'comment_count' => esc_html__('Popular Post', 'codexunictheme-elementor'),
                ],
                'default' => 'ID',
            ]
        );

        $this->add_control(
            'order',
            [
                'label' => esc_html__('Post Order', 'codexunictheme-elementor'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'asc' => esc_html__('ASC', 'codexunictheme-elementor'),
                    'desc' => esc_html__('DESC', 'codexunictheme-elementor'),
                ],
                'default' => 'desc',
            ]
        );

        $this->add_control(
			'blog_coloms',
			array(
				'label'		=> esc_html__('Blog Columns','codexunictheme-elementor'),
				'type'		=> Controls_Manager::SELECT,
				'default' 	=> '3',
				'options' 	=> [
					'6' 		=> __( '2', 'codexunictheme-elementor' ),
					'4' 		=> __( '3', 'codexunictheme-elementor' ),
					'3' 		=> __( '4', 'codexunictheme-elementor' )
				],
			)
		);
		$this->add_control(
			'blog_excerpt',
			array(
				'label' 	=> esc_html__('Blog Excerpt','codexunictheme-elementor'),
				'type'		=> Controls_Manager::NUMBER,
				'default'	=> '20'
			)
		);

		$this->add_control(
            'show_post_category',
            [
                'label' => esc_html__('Show Post Category', 'codexunictheme-elementor'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
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
	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings);

		$post_count = $settings['post_count'];
		$orderby = $settings['orderby'];
		$order = $settings['order'];
		$blog_coloms = $settings['blog_coloms'];
		$blog_excerpt = $settings['blog_excerpt'];
		$show_post_category = $settings['show_post_category'];

		$grid_query= null;
        $args = array(
            'post_type' 		=> 'post',
			'post_status'    	=> 'publish',
            'posts_per_page' 	=> $post_count,
            'orderby' 			=> $orderby,
            'order' 			=> $order,
        );

        $grid_query = new \WP_Query( $args );
        ?>
        <div class="latest-blog-area">
        	<div class="container">
        		<div class="row">
        			<?php while( $grid_query->have_posts() ):$grid_query->the_post(); global $post; ?>
        			<div class="col-lg-<?php esc_html_e( $blog_coloms ); ?> col-md-6 mb-30">
        				<div class="latest-blog-single">
        					<div class="latest-blog-thumbnail">
        						<?php the_post_thumbnail(); ?>

        						<?php 
        						if ($show_post_category == 'yes'):
        						 ?>
	        						<div class="blog-date">
		        						<span><?php the_category(); ?></span>
	        						</div>
	        					<?php 
	        					endif; ?>
        					</div>
        					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        					<?php esc_html_e( wp_trim_words( get_the_content(), $blog_excerpt, '...' ) ); ?>
        					<div class="latest-blog-read-more">
        						<a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','eblog'); ?></a>
        					</div>
        				</div>
        			</div>
        			<?php endwhile; wp_reset_postdata(); ?>
        		</div>
        	</div>
        </div>
        <?php
	}

}