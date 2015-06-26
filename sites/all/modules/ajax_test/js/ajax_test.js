/**
 *
 * @file js 
 *
 */
(function($){
  Drupal.behaviors.ajax_test = {
    attach : function(context, settings) {
      $.ajax({
        url: 'username',
        success: function(data) {
         $('h1#page-title').after('<span>Username: ' + data + '</span>')
        }
      });
    }
  }
}(jQuery));
