<?php
/**
 * @file custom them settings
 *
 */
// In modules hook_form_system_theme_settings_alter().

function customtheme_form_system_theme_settings_alter($form, &$form_state) {

  $form['customtheme_val'] = array(
    '#title' => 'Customtheme val',
    '#type' => 'textfield',
    '#default_value' => theme_get_setting('customtheme_val'),
    '#description' => t('custom settings'),  
  );
}

//hook_system_info_alter()

function customtheme_system_info_alter(&$info, $file, $type) {
  if ($type == 'theme') {
    $info['regions_hidden'][] = 'secondary_footer';
  } 
}

