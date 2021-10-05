<?php
function optisites_customize_register($wp_customize){
$wp_customize->add_section('Edit_Footer', array(
    'title' => 'Edit footer section',
    'description' => 'the carousel',
));
$wp_customize->add_setting('footer_shortcode', array(
    'title' => 'add footer shortcode',
    'type'  => 'text',
    'default' => '[no_code]'
));
$wp_customize->add_control('footer_shortcode', array(
    'label' => 'add footer shortcode',
    'description' => 'add an elementor blocks shortcode to display footer',
    'section' => 'Edit_Footer',
    'priority' => 1
));
// selective refresh

$wp_customize->selective_refresh->add_partial('footer_shortcode', array(
    'selector' => '.theme-footer', 
));
}
add_action( 'customize_register', 'optisites_customize_register' );
?>