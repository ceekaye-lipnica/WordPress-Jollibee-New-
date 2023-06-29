<?php 

// PANG GAWA NG CUSTOMIZE NA BLOCK OR TEMPLATE
function jollibee_register_blocks() {
    if ( function_exists( 'acf_register_block' ) ) {
        
        acf_register_block( array(
            'name'          => 'two-columns',
            'title'         => __( 'Two Columns' ),
            'render_template'   => 'blocks/two-cols.php',
            'category'      => 'jollibee-blocks',
            'icon'          => 'format-image',
            'mode'          => 'edit',
            'keywords'      => array( 'grid', 'column')
        ));

        acf_register_block( array(
            'name'          => 'menu-slider',
            'title'         => __( 'Menu Slider' ),
            'render_template'   => 'blocks/menu-slider.php',
            'category'      => 'jollibee-blocks',
            'icon'          => 'slides',
            'mode'          => 'edit',
            'keywords'      => array( 'slider', 'menu')
        ));
    } 
} 

add_action('acf/init', 'jollibee_register_blocks' );