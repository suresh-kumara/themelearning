/**
 * @file js loading  
 */
(function($){
  Drupal.behaviors.js_behavior = {
    attach : function(context, settings) {
      alert(Drupal.t('i am loaded from js_loading module from module file using drupal_add_js functions'));
      
      
      alert(Drupal.t('Age = ') + Drupal.t(Drupal.settings.js_loading.age) +'  ' + Drupal.t('Age value("passing php variable to js") came from module'));
      
      alert(Drupal.t('custom setting value = ') + Drupal.t(Drupal.settings.js_loading.custom_setting) ); 
    }
  }
}(jQuery));
