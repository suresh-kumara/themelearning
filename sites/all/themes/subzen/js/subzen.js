/**
*
*  @file js test
*
*/
(function($){
Drupal.behaviors.my_module_behaviour = {
    attach: function(context,settings) {
      alert('hai i will load only in front page implemented (hook_preprocess_html)');  
    }
  }
}(jQuery)); 

