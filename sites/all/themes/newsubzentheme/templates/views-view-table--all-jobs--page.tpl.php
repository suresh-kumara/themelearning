<?php
/**
 * @file 
 * list all the applicants
 * @param $fields array of fileds name
 * @param $rows  array  of result set
 * @param $row['title']  title
 * @param $row['category'] category
 * @param $row['job_description'] job description
 * @param $row['job_id'] job id
 * @param $row['no_of_openings'] number of openings
 * @param $row['last_date'] last date to apply
 * @param $row['webform_edit'] 
 *
 */ 

<table>
<thead>
  <tr>
  <?php  foreach($fields as $field=>$key) { ?>
     <th><?php echo $key; ?></th>
   <?php  } ?>
  </tr>
 </thead>
<?php // print_r($rows); exit;  ?>
<tbody>
  <?php   foreach ($rows as $row) {  ?>
    <tr class="odd views-row-first">
      <td class="views-field views-field-title">  <?php print render($row['title']);  ?>  </td>
      <td class="views-field views-field-category"> <?php print render($row['category']);  ?> </td>
      <td class="views-field views-field-job-description"> <?php print render($row['job_description']);  ?>  </td>
      <td class="views-field views-field-job-id"> <?php print render($row['job_id']);  ?>  </td>
      <td class="views-field views-field-no-of-openings"> <?php print render($row['no_of_openings']);  ?></td>
      <td class="views-field views-field-last-date"> <?php print render($row['last_date']); ?> </td>
      <td class="views-field views-field-webform-edit"> 
      <?php 
     // $ccc = date_format($row['last_date'], 'l j F Y');
     //  echo  $ccc;  
     //  $yyyy = strtotime(date('l j F Y')); 
     //  echo $yyyy; 
      //  if ( strtotime(date_create($row['last_date'])) > strtotime(date('l j F Y')) )  {
           print render($row['webform_edit']); 
      //  }  */ 
      ?>
      </td>
      </tr>
<?php } ?>
</tbody>
</table>
