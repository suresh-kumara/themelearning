<?php

function theme_ajax_test2($variable) {
  $parameter = $variable['message'];
  if (!empty($parameter)) {
    return '<div id="customtheme_hook"><span>customtheme_hook paremeter:' . $parameter . '</span></div>';
  }
}

function customtheme_preprocess_node(&$variables) {
  $variables['title_attribute_array']['class'][] = 'node-title';
        // print_r($variables[teaser] ); exit;   
  if ($variables['teaser']) {
    $variables['display_submitted'] = FALSE;
       $variables['title'] = truncate_utf8($variables['title'], 2, TRUE, TRUE);

  }
  
  if (!empty($vars['content']['comments']['comment_form'])) {
  hide($vars['content']['links']['comment']);
 }
 print render($content['links']);
}

function customtheme_process(&$variables) {
  
}

function customtheme_preprocess_page(&$vars, $hook) {
  if (isset($vars['node']->type)) {
     $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type; 
  }
}

/**
 * function customtheme_preprocess_THEMEHOOK(&$variables) {
 * // Changes go here.
 * }
 *
 * function customtheme_preprocess_THEMEHOOK(&$variables) {
 * // Changes go here.
 * }
 */
 
 function customtheme_preprocess_region(&$variables) {
  $region =  $variables['region'];
  if (in_array($region, array('sidebar_first','sidebar_second'))) {
    $variables['classes_array'][] = 'preprocess';
  }
  
  if (in_array($region, array('footer','help'))) {
    $variables['classes_array'][] = 'preprocess_footer';
  }
}

function customtheme_preprocess_user_picture(&$variables) { 
   //print_r($variables); exit;
   
   $variables['edit_picture'] = '';
     if ($variables['account']->uid == $variables['user']->uid) {
    // Create a variable containing a link to the user profile, with a class
    // "change-user-picture" to style against with CSS.
    $variables['edit_picture'] = l('Change picture', 'user/' . $vars['account']->uid . '/edit',
      array(
        'fragment' => 'edit-picture',
        'attributes' => array('class' => array('change-user-picture')),
      )
    ); 
  }
}



//hook_page_alter()  Perform alterations before a page is rendered.

function customtheme_page_alter(&$page) {
  $page['sidebar_second']['new_stuff'] = array(
    '#type' => 'container',
    '#attributes' => array(
      'class' => 'my_new_stuff',
    ),     
  );
  $page['sidebar_second']['new_stuff']['heading'] = array(
   '#type' => 'html_tag',
   '#tag' => 'h2',
   '#value' => t('Heading'),
    '#attributes' => array('id' => 
      'my-heading'),
  );
  $page['sidebar_second']['new_stuff']['list'] = array(
   '#theme' => 'item_list',
    '#items' => array(
      'First item',
      'Second item',
      'Third item',
    ), 
  ); 
  
 
  if (node_is_page(menu_get_object())) {
    $temp = $page['sidebar_first'];
    $page['sidebar_first'] =  $page['sidebar_second'];
    $page['sidebar_second'] = $temp;
    unset($temp);
  }
  $page['footer']['breadcrumbs'] = array(
    '#type' => 'container',
    '#attributes' => array('class' => array('breadcrumb-wrapper', 'clearfix')), '#weight' => 10,
  );
  $page['footer']['breadcrumbs']['breadcrumb'] = array(
    '#theme' => 'breadcrumb',
    '#breadcrumb' => drupal_get_breadcrumb(),
  );
  
    $page['footer']['#sorted'] = FALSE;
}
// theme_item_list()
// theme_html_tag()
function customtheme_element_info_alter(&$type) {
// dprint_r($type);  exit;
}

/**
 * statestesting_form
 * template files, preprocess, or process functions with forms, the first thing you’ll need to do is register the form ID 
 * as a theme hook. This is necessary so that Drupal knows about the theme hook.
 *
 * Implements hook_theme().  register a form Id as a theme hook
 */  

//The render element key is required for theme hooks that use the render API to generate markup, such as forms

function customtheme_theme() {
  return array(
    'statestesting_form' => array(
      'render element' => 'form'
    ),
    'states_example_form' => array(
      'render element' => 'form',
      'path' => drupal_get_path('theme','customtheme') . '/templates',
      'template' => 'states_example_form',     
    ), 
  );

}
function customtheme_statestesting_form(&$variables) {

  // Renders children of an element and concatenates them.
   $variables['form']['subject'] = 'form theming';
   
  $output = render($variables['form']['subject'] );
  
  $variables['form']['first_name']['title'] = t('Enter First name ');
  $variables['form']['last_name']['title'] = t('Enter last name');
  $variables['form']['first_name']['#description'] = t("description from hook_theme.");
  /**
   * $variables['form']['message']['#weight'] = -10;
   * $variables['form']['message']['#sorted'] = FALSE;
   * $variables['form']['copy']['#checked'] = TRUE;
   * unset($variables['form']['mail']['#theme_wrappers']);
   */ 
  $output .= drupal_render_children($variables['form']);  
  
  return $output; 
}

/**
 * Even if you call render() on every element you have added to the form, Drupal will have added some important
 * hidden elements  identifying the form and those need to be rendered, too. So calling drupal_render_children($form) at the 
 * end of the theme function is mandatory. 
 */ 
 
 
 // To make this really clean, you’d do the following in a preprocess function:
/** 
 function customtheme_states_example_form_form_alter(&$form, &$form_state, $form_id) {

//     render();
   $form['subject'] = '<h2>form theming in templates and subject from preprocess functions</h2>'; 
   
 }
*/ 
/**
function customtheme_form_alter(&$form, $form_state, $form_id) {

    if (isset($form_id) && $form_id == 'states_example_form') {
        $form['subject'] = '<h2>form alter</h2>';      
    }
    return $form;
}
*/ 
 function customtheme_preprocess_states_example_form(&$variables) {
 
//     render();
   $variables['form']['subject'] .= '<h2>form id alter</h2>'; 
   
 }

 function customtheme_preprocess_html() {
   if (drupal_is_front_page()) {
     drupal_add_css(drupal_get_path('theme', 'customtheme') . '/css/front_page.css', array('group' => CSS_THEME, 'every_page' => FALSE));
   }
 }

/**
 * function template_process_html(&$variables) {
 * ...
 * $variables['styles'] = drupal_get_css();
  ...
  } 
*/


function customtheme_css_alter(&$css) {
  if ($css['sites/all/themes/customtheme/css/front_page.css']) {
   $css['sites/all/themes/customtheme/css/front_page.css'][data] = drupal_get_path('theme', 'customtheme') . '/css/layout.css';   
  }
}
