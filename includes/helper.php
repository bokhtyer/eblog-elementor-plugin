<?php 
namespace CodexUnicThemeElementor\Helper;

// BDT Position
function element_pack_position() {
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