<?php

/**
 *
 * @file views handler files
 * 
 *
 */

class jobs_views_handler_field_apply extends views_handler_field {
/**
 * Render function: return html output
 * Including edit and delete action
 */
function render($values) {
 $actions = array();

  $alt = t('Apply');
  
  $actions[] = array(
    'name' => t('Apply'),
    'url' => 'node/' . $values->nid . '/edit',
    'icon' => theme('image', array('path' => drupal_get_path('module', 'view_actions') . '/images/images.jpg', 'alt' => $alt)),
    'title' => $alt,
  ); 
  $output = '';
   foreach ($actions as $action) {
     $output .= l($action['icon'], $action['url'], array('attributes' => array('title' => $action['title']), 'html' => TRUE));
   }
  return $output;
 
}  
 /**
   *
   */
function query() {
    // Do nothing, leave query blank, we render the contents
}
}
