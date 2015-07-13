<?php
/**
 * @file
 * validate handler for jobs multistep form
 */

/**
 * Form validate handler for jobs_steps_personal_details_form()
 */

function jobs_steps_personal_details_validate($form, &$form_state) {
  if (!isset($form_state['values']['first_name']) || ($form_state['values']['first_name'] == '') || 
    (!ctype_alpha($form_state['values']['first_name'])) || (strlen($form_state['values']['first_name']) > 40)) {
    form_set_error($form_state['values']['first_name'], t('First name is required and should have 
      only alpha characters and less than 40 characters!'));   
  }
  if (!isset($form_state['values']['last_name'])  || ($form_state['values']['last_name'] == '') || 
    (!ctype_alpha($form_state['values']['last_name'])) || (strlen($form_state['values']['last_name']) > 40)) {
    form_set_error($form_state['values']['last_name'], t('Last name is required and should have only 
      alpha characters and less than 40 characters!'));   
  }
  if (!isset($form_state['values']['date_of_birth'])  || ($form_state['values']['date_of_birth'] == '')) {
    form_set_error($form_state['values']['first_name'], t('Date of birth field is required'));   
  }
  if (!isset($form_state['values']['mobile']) || ($form_state['values']['mobile'] == '') || 
    (!ctype_digit($form_state['values']['mobile'])) || (strlen($form_state['values']['mobile']) > 10)) {
    form_set_error($form_state['values']['mobile'], t('mobile number is required and should have only numbers!'));   
  }

// echo $form_state['values']['name_of_the_institution'];   exit;
   if (!isset($form_state['values']['name_of_the_institution']) || ($form_state['values']['name_of_the_institution'] == '')) {
     form_set_error($form_state['values']['name_of_the_institution'], t('Name of the institution is required and should have only alpha characters!'));   
   }      
   if (!isset($form_state['values']['qualification']) || ($form_state['values']['qualification'] == '')) {
     form_set_error($form_state['values']['qualification'], t('qualification is required and should have only alpha characters!'));   
   }      
}

/**
 * Form validator handler for job_details_form()
 */

function job_details_validate($form, &$form_state) {
  if (!isset($form_state['values']['fixed_compensation']) || (!ctype_digit($form_state['values']['fixed_compensation'])) ||
    (strlen($form_state['values']['fixed_compensation']) > 5)) {
    form_set_error($form_state['values']['fixed_compensation'], t('Fixed compensation should have only numbers and  less than 5 digits!'));   
  }
  if (!isset($form_state['values']['variable_compensation']) || (!ctype_digit($form_state['values']['variable_compensation'])) || 
    (strlen($form_state['values']['variable_compensation']) > 5)) {
    form_set_error($form_state['values']['variable_compensation'], t('Variable compensation should have 
      only numbers and  less than 5 digits!'));   
  }
  if (!isset($form_state['values']['current_location'])  || (strlen($form_state['values']['current_location']) > 250) ) {
    form_set_error($form_state['values']['current_location'], t('current location  less than 250 characters'));   
  }
  if (!isset($form_state['values']['company']) || (strlen($form_state['values']['company']) > 100)) {
    form_set_error($form_state['values']['company'], t('mobile number is required and should have only numbers!'));   
  }
  if ( !isset($form_state['values']['years_of_experience'])  || (!ctype_digit($form_state['values']['years_of_experience'])) || 
    (strlen($form_state['values']['years_of_experience']) > 2) || ($form_state['values']['years_of_experience'] > 60 )) {
    form_set_error($form_state['values']['years_of_experience'], t('years_of_experience should be numbers and less than 60 years!'));   
  } 

  if ( !isset($form_state['values']['notice_period'])  || (!ctype_digit($form_state['values']['notice_period'])) || 
    (strlen($form_state['values']['notice_period']) > 2) || ($form_state['values']['notice_period'] > 60 )) {
    form_set_error($form_state['values']['notice_period'], t('notice period should be numbers and less than 60 days!'));   
  }      
}

/**
 * Form validator handler for steps_uploadresume_form()
 */
function steps_uploadresume_validate($form, &$form_state) {
  if (isset($form_state['triggering_element']['#value'])  && ($form_state['triggering_element']['#value'] == 'Next')) { 
    if (!isset($form_state['values']['resume']) || ($form_state['values']['resume'] == '')) {
     form_set_error($form_state['values']['resume'], t('Resume field is required')); 
    } 
  }
  if ((!isset($form_state['values']['cover_letter']) || ($form_state['values']['cover_letter'] == '') || 
    (strlen($form_state['values']['cover_letter']) <  20 ))) {
    form_set_error($form_state['values']['cover_letter'], t('Cover letter is required minimum 20 letters')); 
  }
}

/**
 * Form validation handler for steps_review_resend_form().
 */
function steps_review_resend_validate($form, &$form_state) {
  if (!isset($form_state['values']['first_name']) || ($form_state['values']['first_name'] == '') || 
    (!ctype_alpha($form_state['values']['first_name'])) || (strlen($form_state['values']['first_name']) > 40)) {
    form_set_error($form_state['values']['first_name'], t('First name is required and should have 
      only alpha characters and less than 40 characters!'));   
  }
  if (!isset($form_state['values']['last_name']) || ($form_state['values']['last_name'] == '') || 
    (!ctype_alpha($form_state['values']['last_name'])) || (strlen($form_state['values']['last_name']) > 40)) {
    form_set_error($form_state['values']['last_name'], t('Last name is required and should have 
      only alpha characters and less than 40 characters!'));   
  }
  if (!isset($form_state['values']['date_of_birth']) || ($form_state['values']['date_of_birth'] == '')) {
    form_set_error($form_state['values']['first_name'], t('Date of birth field is required'));   
  }
  if (!isset($form_state['values']['mobile']) || ($form_state['values']['mobile'] == '') || 
    (!ctype_digit($form_state['values']['mobile'])) || (strlen($form_state['values']['mobile']) > 10)) {
    form_set_error($form_state['values']['mobile'], t('mobile number is required and should have only numbers!'));   
  }
  if (!isset($form_state['values']['name_of_the_institution']) || ($form_state['values']['name_of_the_institution'] == '')) {
    form_set_error($form_state['values']['name_of_the_institution'], t('Name of the institution is required 
      and should have only alpha characters!'));   
  }      
  if (!isset($form_state['values']['qualification'])  || ($form_state['values']['qualification'] == '')) {
    form_set_error($form_state['values']['qualification'], t('qualification is required and should have only alpha characters!'));   
  }
  if (!isset($form_state['values']['fixed_compensation']) || (!ctype_digit($form_state['values']['fixed_compensation'])) || 
    (strlen($form_state['values']['fixed_compensation']) > 5)) {
    form_set_error($form_state['values']['fixed_compensation'], t('Fixed compensation should have only numbers and  less than 5 digits!'));   
  }
  if (!isset($form_state['values']['variable_compensation']) || (!ctype_digit($form_state['values']['variable_compensation'])) || 
    (strlen($form_state['values']['variable_compensation']) > 5)) {
    form_set_error($form_state['values']['variable_compensation'], t('Variable compensation should have 
      only numbers and  less than 5 digits!'));   
  }
  if (!isset($form_state['values']['current_location']) || (strlen($form_state['values']['current_location']) > 250)) {
    form_set_error($form_state['values']['current_location'], t('current location  less than 250 characters'));   
  }
  if (!isset($form_state['values']['company']) || (strlen($form_state['values']['company']) > 100)) {
    form_set_error($form_state['values']['company'], t('mobile number is required and should have only numbers!'));   
  }
  if ( !isset($form_state['values']['years_of_experience'])  || (!ctype_digit($form_state['values']['years_of_experience'])) || 
    (strlen($form_state['values']['years_of_experience']) > 2) || ($form_state['values']['years_of_experience'] > 60 ) ) {
    form_set_error($form_state['values']['years_of_experience'], t('years_of_experience should be numbers and less than 60 years!'));   
  } 

  if (!isset($form_state['values']['cover_letter']) || ($form_state['values']['cover_letter'] == '') || 
    (strlen($form_state['values']['cover_letter']) <  20 )) {
    form_set_error($form_state['values']['cover_letter'], t('Cover letter is required minimum 20 letters')); 
  }

  if ( !isset($form_state['values']['notice_period']) || (!ctype_digit($form_state['values']['notice_period'])) || 
    (strlen($form_state['values']['notice_period']) > 2) || ($form_state['values']['notice_period'] > 60 )) {
    form_set_error($form_state['values']['notice_period'], t('notice period should be numbers and less than 60 days!'));   
  }
}

