<?php 
    /* Template Name: Elementor */ 
?>

<?php get_header() ?>

<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'page' ) ) {
    the_content();
} ?>


<?php get_footer() ?>