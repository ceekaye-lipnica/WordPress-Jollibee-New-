<?php
    
    function jollibee_cta ($atts, $content) {

        $option = shortcode_atts(
            array(
            'body' => '',
            ), $atts); 
    
        $output = '<section class="cta"><div class="container"><div class="cta__wrapper"><h3>Have a question? </h3><p>'. $option['body'] .'</p><button id="btnModal">Contact</button></div></div></section>';
    
        return $output;
    }    
    add_shortcode('contact-jollibee', 'jollibee_cta');