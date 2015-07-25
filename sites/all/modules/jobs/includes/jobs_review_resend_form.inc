<?php
/**
 * @file
 * The theme system, which controls the output of Drupal.
 *
 * The theme system allows for nearly all output of the Drupal system to be
 * customized by user themes.
 */
/**
 * Form constructor for review resend form in multi step form
 */
function steps_review_resend_form($form, &$form_state) {
  $values = isset($form_state['multistep_values']['review_resend']) ? $form_state['multistep_values']['review_resend'] : array();
  $form['some_text'] = array(
    '#markup' => '<p>All fields marked with <span class="red">*</span> are mandatory</p>',
  );
  $form['personal_details'] = array(
    '#type' => 'fieldset',
    '#title' =>  'Personal Details',
  );
  if (isset($form_state['multistep_values']['personal_details']['first_name']))
    $form['first_name'] = array(
      '#prefix' => '<div class="container-inline">',
      '#type' => 'textfield',
      '#title' =>  'First name',
      '#size' => 45,
      '#maxlength' => 45,
      '#required' => TRUE,
      '#suffix' => '</div>',
      '#default_value' => $form_state['multistep_values']['personal_details']['first_name'],
    );
  if (isset($form_state['multistep_values']['personal_details']['last_name']))
    $form['last_name'] = array(
      '#type' => 'textfield',
      '#title' =>  'Last name',
      '#size' => 45,
      '#required' => TRUE,
      '#maxlength' => 45,
      '#default_value' => $form_state['multistep_values']['personal_details']['last_name'],
    );
  if (isset( $form_state['multistep_values']['personal_details']['email'] ))
    $form['email'] = array(
      '#type' => 'textfield',
      '#title' =>  'Email',
      '#size' => 60,
      '#required' => TRUE,
      '#element_validate' => array('jobs_email_element_validate'),
      '#default_value' => $form_state['multistep_values']['personal_details']['email'],
    );
  if (isset( $form_state['multistep_values']['personal_details']['date_of_birth']))
    $form['date_of_birth'] = array(
      '#type' => 'datepicker',
      '#date_format' => 'd/m/Y',
      '#title' =>  'Date of birth',
      '#required' => TRUE,
      '#size' => 50,
      '#default_value' => $form_state['multistep_values']['personal_details']['date_of_birth'],
      '#date_year_range' => '-60:-18',
    );
  if (isset($form_state['multistep_values']['personal_details']['mobile']))
    $form['mobile'] = array(
      '#type' => 'textfield',
      '#title' =>  'Mobile',
      '#size' => 10,
      '#maxlength' => 10,
      '#required' => TRUE,
      '#default_value' => $form_state['multistep_values']['personal_details']['mobile'],
    );
  $form['institution_details'] = array(
   '#type' => 'fieldset',
   '#title' =>  'Institution Details',
  );
  if (isset($form_state['multistep_values']['personal_details']['name_of_the_institution']))
    $form['name_of_the_institution'] = array(
      '#type' => 'textfield',
      '#title' =>  'Name of the institution',
      '#required' => TRUE,
      '#default_value' => $form_state['multistep_values']['personal_details']['name_of_the_institution'],
  );
  if (isset($form_state['multistep_values']['personal_details']['qualification']))
    $form['qualification'] = array(
      '#type' => 'textfield',
      '#title' =>  'qualification',
      '#size' => 60,
      '#required' => TRUE,
      '#default_value' =>  $form_state['multistep_values']['personal_details']['qualification'],
    );
  $form['compensation_details'] = array(
   '#type' => 'fieldset',
   '#title' =>  'Compensation Details',
   '#collapsible' => FALSE,
   '#collapsed' => FALSE,
  );
  if (isset($form_state['multistep_values']['job_details']['fixed_compensation']))
    $form['fixed_compensation'] = array(
      '#type' => 'textfield',
      '#title' =>  'Fixed Compensation',
      '#default_value' => $form_state['multistep_values']['job_details']['fixed_compensation'],
    );
  if (isset($form_state['multistep_values']['job_details']['variable_compensation']))
    $form['variable_compensation'] = array(
      '#type' => 'textfield',
      '#title' =>  'Variable Compensation',
      '#default_value' => $form_state['multistep_values']['job_details']['variable_compensation'],
    );
  $form['Location Details'] = array(
    '#type' => 'fieldset',
    '#title' =>  'Location Details',
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  if (isset($form_state['multistep_values']['job_details']['current_location']))
    $form['current_location'] = array(
      '#type' => 'textfield',
      '#title' =>  'Current Location',
      '#default_value' => $form_state['multistep_values']['job_details']['current_location'],
    );
  if (isset($form_state['multistep_values']['job_details']['permanent_location']))
    $form['permanent_location'] = array(
      '#type' => 'textfield',
      '#title' =>  'Permanent Location',
      '#default_value' => $form_state['multistep_values']['job_details']['permanent_location'],
    );
  $form['current_role_details'] = array(
    '#type' => 'fieldset',
    '#title' =>  'Current Role Details',
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  if (isset($form_state['multistep_values']['job_details']['company']))
    $form['company'] = array(
      '#type' => 'textfield',
      '#title' =>  'Company',
      '#default_value' => $form_state['multistep_values']['job_details']['company'],
  );
  if (isset($form_state['multistep_values']['job_details']['years_of_experience']))
    $form['years_of_experience'] = array(
      '#type' => 'textfield',
      '#title' =>  'Years of Experience',
      '#default_value' => $form_state['multistep_values']['job_details']['years_of_experience'],
  );
  if (isset($form_state['multistep_values']['job_details']['current_role']))
    $form['current_role'] = array(
      '#type' => 'textfield',
      '#title' =>  'Current Role',
      '#default_value' => $form_state['multistep_values']['job_details']['current_role'],
  );
  if (isset($form_state['multistep_values']['job_details']['notice_period']))
    $form['notice_period'] = array(
      '#type' => 'textfield',
      '#title' =>  'notice period',
      '#suffix' => t('no of days'),
      '#size' => 2,
      '#maxlength' => 2,
      '#default_value' => $form_state['multistep_values']['job_details']['notice_period'],
    );
  $form['other_information'] = array(
    '#type' => 'fieldset',
    '#title' =>  'Other Information',
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  if (isset($form_state['multistep_values']['job_details']['candidate_ex_employee_check']))
    $form['candidate_ex_employee_check'] = array(
      '#type' => 'checkbox',
      '#title' =>  'candidate_ex_employee_check',
      '#default_value' => $form_state['multistep_values']['job_details']['candidate_ex_employee_check'],
  );
  if (isset($form_state['multistep_values']['uploadresume']['resume']))
    $form['resume'] = array(
      '#type' => 'managed_file',
      '#title' =>  'Upload your resume',
      '#description'  => t('it will accept .txt, .pdf, .doc and size should be less then 2 MB'),
      '#default_value' => $form_state['multistep_values']['uploadresume']['resume'],
      '#upload_location'    => "public://resume/",
      '#upload_validators' => array(
        'file_validate_extensions' => array('txt pdf doc docx'),
        'file_validate_size' => array(1024*1024*2),
      ),
     '#required' => TRUE,
    );
  if (isset($form_state['multistep_values']['uploadresume']['cover_letter']))
    $form['cover_letter'] = array(
      '#type' => 'textarea',
      '#title' =>  'Cover Letter',
      '#default_value' => $form_state['multistep_values']['uploadresume']['cover_letter'],
    );
  $form['submit'] = array(
   '#type' => 'submit',
   '#value' => t('submit application'),
  );
  return $form;
}
