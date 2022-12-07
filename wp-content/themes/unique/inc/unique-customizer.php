<?php
function lotos_sanitize_default($value)
{
   return $value;
}
/** Lotos - Customizer - Add Settings */
function lotos_register_theme_customizer($wp_customize)
{
   /** Add Sections -----------------------------------------------------------------------------------------------------------*/
   $wp_customize->add_section('app_links', array(
      'title'       => esc_html__('Ссылки для приложения', 'lotos'),
      'description' => esc_html__('Вставьте ссылку', 'lotos')
   ));




   /** Add Settings ------------------------------------------------------------------------------------------------------------*/
   // Header and Logo
   $wp_customize->add_setting(
      'apple_link',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'apple_link',
         array(
            'label'      => esc_html__('Вставьте ссылку на app store', 'lotos'),
            'section'    => 'app_links',
            'settings'   => 'apple_link',
            'type'       => 'text',
            'priority'    => 1
         )
      )
   );

   $wp_customize->add_setting(
      'google_link',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'google_link',
         array(
            'label'      => esc_html__('Вставьте ссылку на play market', 'lotos'),
            'section'    => 'app_links',
            'settings'   => 'google_link',
            'type'       => 'text',
            'priority'    => 1
         )
      )
   );
}
add_action('customize_register', 'lotos_register_theme_customizer');
