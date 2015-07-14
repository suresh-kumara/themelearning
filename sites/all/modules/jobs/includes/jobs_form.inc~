<?php
/**
 * @file
 * The theme system, which controls the output of Drupal.
 *
 * The theme system allows for nearly all output of the Drupal system to be
 * customized by user themes.
 */

/**
 * Form constructor for jobs steps personaldetails in a multi step form.
 */
function jobs_steps_personal_details($form, &$form_state) {
  $values = isset($form_state['multistep_values']['personal_details']) ? $form_state['multistep_values']['personal_details'] : array();
  $form['some_text'] = array(
    '#markup' => '<p>All fields marked with <span class="red">*</span> are mandatory</p>',
  );
  $form['personal_details'] = array(
    '#type' => 'fieldset', 
    '#title' => 'Personal Details',
  );
  $form['first_name'] = array(
    '#prefix' => '<div class="container-inline">',
    '#type' => 'textfield', 
    '#title' =>  'First name',
    '#size' => 45,
    '#maxlength' => 45,
    '#required' => TRUE,
    '#suffix' => '</div>',
    '#default_value' => isset($form_state['multistep_values']['personal_details']['first_name']) ? $form_state['multistep_values'] ['personal_details']['first_name'] : '',
  );
  $form['last_name'] = array(
    '#type' => 'textfield', 
    '#title' => 'Last name',
    '#size' => 45,
    '#required' => TRUE,
    '#maxlength' => 45,
    '#default_value' => isset($form_state['multistep_values']['personal_details']['last_name']) ? $form_state['multistep_values']['personal_details']['last_name'] : '',
  );
  $form['email'] = array(
    '#type' => 'textfield', 
    '#title' =>  'Email',
    '#size' => 60,
    '#required' => TRUE,
    '#autocomplete_path' => FALSE,
    '#default_value' => isset($form_state['multistep_values']['personal_details']['email']) ? $form_state['multistep_values']['personal_details']['email'] : '',
    '#element_validate' => array('jobs_email_element_validate'),
  );
  $form['date_of_birth'] = array(
    '#type' => 'datepicker',
    '#date_format' => 'd/m/Y', 
    '#title' =>  'Date of birth',
    '#required' => TRUE,
    '#size' => 50,
    '#default_value' => isset($form_state['multistep_values']['personal_details']['date_of_birth']) ? $form_state['multistep_values']['personal_details']['date_of_birth'] : '',
    '#date_year_range' => '-60:-18',
  );
  $form['mobile'] = array(
    '#type' => 'textfield', 
    '#title' =>  'Mobile',
    '#size' => 10,
    '#maxlength' => 10,
    '#required' => TRUE,
    '#default_value' => isset($form_state['multistep_values']['personal_details']['mobile']) ? $form_state['multistep_values']['personal_details']['mobile'] : '',
  );
  $form['institution_details'] = array(
    '#type' => 'fieldset', 
    '#title' =>  'Institution Details',
  );
  $form['name_of_the_institution'] = array(
    '#type' => 'textfield', 
    '#title' =>  'Name of the institution',
    '#required' => TRUE,
    '#default_value' => isset($form_state['multistep_values']['personal_details']['name_of_the_institution']) ? $form_state['multistep_values']['personal_details']['name_of_the_institution'] : '',
  );
  $form['qualification'] = array(
    '#type' => 'textfield', 
    '#title' =>  'qualification',
    '#size' => 60,
    '#required' => TRUE,
    '#default_value' => isset($form_state['multistep_values']['personal_details']['qualification']) ? $form_state['multistep_values']['personal_details']['qualification'] : '',
  );

  $form['next'] = array(
    '#type' => 'submit',
    '#value' => t('next'),
  );
 
  return $form; 
}

/**
 * Email element validator 
 * @see https://www.drupal.org/node/970068
 */

function jobs_email_element_validate($element, &$form_state, $form) {
  if (!valid_email_address($element['#value'])) {
    form_error($element, t('Please enter a valid email address.'));
  }
}

/**
 * Form constructor for job details in a multi step form.
 */
function job_details_form($form, &$form_state) {
// echo <pre>; print_r($_SESSION);  exit; 
  $values = isset($form_state['multistep_values']['job_details']) ? $form_state['multistep_values']['job_details'] : array();
  $form['compensation_details'] = array(
    '#type' => 'fieldset', 
    '#title' =>  'Compensation Details',
    '#collapsible' => FALSE, 
    '#collapsed' => FALSE,
  );
  $form['fixed_compensation'] = array(
    '#type' => 'textfield', 
    '#title' =>  'Fixed Compensation',
    '#default_value' => isset($form_state['multistep_values']['job_details']['fixed_compensation']) ? $form_state['multistep_values']['job_details']['fixed_compensation'] : '',
  );
  $form['variable_compensation'] = array(
    '#type' => 'textfield', 
    '#title' =>  'Variable Compensation',
    '#default_value' => isset($form_state['multistep_values']['job_details']['variable_compensation']) ? $form_state['multistep_values']['job_details']['variable_compensation'] : '',
  );
  $form['Location Details'] = array(
    '#type' => 'fieldset', 
    '#title' =>  'Location Details',
    '#collapsible' => FALSE, 
    '#collapsed' => FALSE,
  );
  $form['current_location'] = array(
    '#type' => 'textfield', 
    '#title' =>  'Current Location',
    '#default_value' => isset($form_state['multistep_values']['job_details']['current_location']) ? $form_state['multistep_values']['job_details']['current_location'] : '',
  );
  $form['permanent_location'] = array(
    '#type' => 'textfield', 
    '#title' =>  'Permanent Location',
    '#default_value' => isset($form_state['multistep_values']['job_details']['permanent_location']) ? $form_state['multistep_values']['job_details']['permanent_location'] : '',
  );
  $form['current_role_details'] = array(
    '#type' => 'fieldset', 
    '#title' =>  'Current Role Details',
    '#collapsible' => FALSE, 
    '#collapsed' => FALSE,
  );
  $form['company'] = array(
    '#type' => 'textfield', 
    '#title' =>  'Company',
    '#default_value' => isset($form_state['multistep_values']['job_details']['company']) ? $form_state['multistep_values']['job_details']['company']  : '',
  );
  $form['years_of_experience'] = array(
    '#type' => 'textfield', 
    '#title' =>  'Years of Experience',
    '#default_value' => isset($form_state['multistep_values']['job_details']['years_of_experience']) ? $form_state['multistep_values']['job_details']['years_of_experience'] : '',
  );
  $form['current_role'] = array(
    '#type' => 'textfield', 
    '#title' =>  'Current Role',
    '#default_value' => isset($form_state['multistep_values']['job_details']['current_role']) ? $form_state['multistep_values']['job_details']['current_role'] : '',
  );
  $form['notice_period'] = array(
    '#type' => 'textfield', 
    '#title' =>  'notice period',
    '#suffix' => t('no of days'),
    '#size' => 2,
    '#maxlength' => 2,
    '#default_value' => isset($form_state['multistep_values']['job_details']['notice_period']) ? $form_state['multistep_values']['job_details']['notice_period'] : '',
  );
  $form['other_information'] = array(
    '#type' => 'fieldset', 
    '#title' =>  'Other Information',
    '#collapsible' => FALSE, 
    '#collapsed' => FALSE,
  );
  $form['candidate_ex_employee_check'] = array(
    '#type' => 'checkbox', 
    '#title' =>  'candidate_ex_employee_check',
    '#default_value' => 1,
  );
  $form['back'] = array(
    '#type' => 'submit',
    '#value' => t('Back'),
  );
  $form['next'] = array(
    '#type' => 'submit',
    '#value' => t('Next'),
  );
  return $form;
}

/**
 * Form constructor for jobs uploadresume form in a multi step form.
 */

function steps_uploadresume_form($form, &$form_state) {
// echo '<pre>'; print_r($_SESSION);  exit; 
  $values = isset($form_state['multistep_values']['uploadresume']) ? $form_state['multistep_values']['uploadresume'] : array();
  $form['captcha'] = array(
    '#type' => 'captcha',
    '#captcha_type' => 'image_captcha/Image',
    '#attached' => array(
      'js' => 'jQuery("#edit-captcha-response").removeClass("required");',
      'type' => 'inline',	
    ),   	
  );

  $form['resume'] = array(
    '#type' => 'managed_file', 
    '#title' => 'Upload your resume',
    '#description' => t('it will accept .txt, .pdf, .doc and size should be less then 2 MB'), 
    '#upload_location' => "public://resume/",
    '#upload_validators' => array(
      'file_validate_extensions' => array('txt pdf doc docx'),
      'file_validate_size' => array(1024*1024*2),   
    ),    
    '#default_value' => isset($form_state['multistep_values']['uploadresume']['resume']) ? $form_state['multistep_values']['uploadresume']['resume'] : '',
    '#field_prefix' => '(resume filed is required)',
  );
  $form['cover_letter'] = array(
    '#type' => 'textarea', 
    '#title' =>  'Cover Letter',
    '#default_value' => isset($form_state['multistep_values']['uploadresume']['cover_letter']) ? $form_state['multistep_values']['uploadresume']['cover_letter'] : '',
  );
  $form['back'] = array(
    '#type' => 'submit',
    '#value' => t('Back'),
  );
  $form['next'] = array(
    '#type' => 'submit',
    '#value' => t('Next'),
  );
  return $form;
}

