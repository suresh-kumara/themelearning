<?php

/**
 * @file 
 * step 4: define data structure and handlers.
 * For the Views module, to render a view, it needs a data structure as an input, 
 * a data structure that defines all the elements that make up the view.
 * This is in the first place information about the fields (the 'columns' in the view). 
 * But it is also about the filters, the arguments, the relationships and the sort conditions. 
 * The functionality to deal with fields, arguments, filters and sort conditions is defined in 'handlers'. 
 * Handlers are PHP classes. 
 * The Views module has standard handlers on board. For a field, it has a standard handler 'views_handler_field'. 
 * The class provides for a 'query
 * ' method, to get the value of the field, and a 'render' method to render the output for the field.
 */


function jobs_views_data_alter(&$data) {
  $data['node']['apply'] = array(
    'title' => t('click to apply for a job'), 
    'help' => t('click link to see the help'),
    'field' => array(
      'handler' => 'jobs_views_handler_field_apply',
      'group' => 'content',
      'click sortable' => FALSE,
    ),
  );
}


