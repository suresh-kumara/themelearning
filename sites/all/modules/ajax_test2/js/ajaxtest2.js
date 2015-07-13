/**
 *
 * @file ajaxtest2.js
 *
 *
 */
(function($){
  Drupal.behaviors.ajaxtest2 = {
    attach : function(context, settings) {
          //alert(Drupal.t('hai'));
   $.fn.ajax_link = function() {
        $('#ajax-link').hide();
        setTimeout(function(){
          $('#ajax-display').fadeOut().html("").show();
          $('#ajax-link').fadeIn();
        }, 5000);
      }
    
    }    
  }
}(jQuery));
