<?php
/**
 * @file
 * validates the form elements and save multi step form data
 */
/**
 * validates the form elements and save the form data
 */
function steps_review_resend_submit($form, &$form_state) {
  $fields = array();
  $node = $form_state['build_info']['args']['0'];
  $fields['job_id'] = $jobid = $node->vid;
  $last_date = field_get_items('node', $node, 'last_date');
  // echo $fields['0']['value'];  exit;
  if (isset($jobid) && !empty($jobid)  && isset($last_date['0']['value']) &&
    ((strtotime($last_date['0']['value'])) > strtotime(date('l, F j, Y'))) ) {

    if (isset($form_state['values']['first_name']))
      $fields['first_name'] = $form_state['values']['first_name'];

    if (isset($form_state['values']['last_name']))
      $fields['last_name'] = $form_state['values']['last_name'];

    if (isset($form_state['values']['email']))
      $fields['email'] = $form_state['values']['email'];

    if (isset($form_state['values']['date_of_birth']))
      $fields['date_of_birth'] = $form_state['values']['date_of_birth'];

    if (isset($form_state['values']['mobile']))
      $fields['mobile'] = $form_state['values']['mobile'];

    if (isset($form_state['values']['name_of_the_institution']))
      $fields['name_of_the_institution'] = $form_state['values']['name_of_the_institution'];

    if (isset($form_state['values']['qualification']))
      $fields['qualification'] = $form_state['values']['qualification'];

    if (isset($form_state['values']['fixed_compensation']))
      $fields['fixed_compensation'] = $form_state['values']['fixed_compensation'];

    if (isset($form_state['values']['variable_compensation']))
      $fields['variable_compensation'] = $form_state['values']['variable_compensation'];

    if (isset($form_state['values']['current_location']))
      $fields['current_location'] = $form_state['values']['current_location'];

    if (isset($form_state['values']['permanent_location']))
      $fields['permanent_location'] = $form_state['values']['permanent_location'];

    if (isset($form_state['values']['company']))
      $fields['company'] = $form_state['values']['company'];

    if (isset($form_state['values']['years_of_experience']))
      $fields['years_of_experience'] = $form_state['values']['years_of_experience'];

    if (isset($form_state['values']['current_role']))
      $fields['current_role'] = $form_state['values']['current_role'];

    if (isset($form_state['values']['notice_period']))
      $fields['notice_period'] = $form_state['values']['notice_period'];

    if (isset($form_state['values']['candidate_ex_employee_check']))
      $fields['candidate_ex_employee_check'] = $form_state['values']['candidate_ex_employee_check'];

    if (isset($form_state['values']['years_of_experience']))
      $fields['years_of_experience'] = $form_state['values']['years_of_experience'];

    if (isset($form_state['values']['resume']))
      $fields['resume'] = $form_state['values']['resume'];

    if (isset($form_state['values']['cover_letter']))
      $fields['cover_letter'] = $form_state['values']['cover_letter'];
// print_r($fields);  exit;
// $fields  $my_allowed_tags = array('fieldset','legend');
// filter_xss($some_string, $my_allowed_tags);
//  https://api.drupal.org/api/drupal/includes!common.inc/group/sanitization/7

      if (!form_get_errors()) {
        $transaction = db_transaction();
        try {
          $insert_id = db_insert('jobs') // Table name no longer needs {}
            ->fields($fields)
            ->execute();
        } catch (Exception $e) {
            $transaction->rollback();
            watchdog_exception('block', $e);
            throw $e;
        }
        drupal_set_message(t('form submitted successfully'));
        $form_state['complete'] = TRUE;
      }
  }
  else {
    drupal_set_message(t('job is not found'), 'error');
  }
}

