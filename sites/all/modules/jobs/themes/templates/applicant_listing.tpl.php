<?php
/*
 * @file 
 * applicant details
 */
?>
<div class="CSSTableGenerator"> 
  <table>
    <tr>
      <?php
        if ( isset($result) && !empty($result)) {
          foreach($result as $row) { 
            foreach( $row as $key => $val) { 
              switch($key) { 
                case 'resume' : ?>
                  <tr> 
                    <td>Resume</td> 
                    <td><?php $image_path = file_load($val); echo l($image_path->filename,file_create_url($image_path->uri)); ?></td>
                  </tr>
            <?php break;  
                case 'candidate_ex_employee_check' : ?>
                  <tr> 
                    <td>Candidate ex employee</td> 
                    <td><?php if($val == 1) echo 'yes'; else echo 'no'; ?> </td> 
                  </tr>
            <?php break;
                case 'candidate_ex_employee_check':  ?>
                  <tr> 
                    <td><?php echo $key; ?> </td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'title':  ?>
                  <tr> 
                    <td>Job title</td> 
                    <td><?php echo $val; ?></td> 
                  </tr>
            <?php break;
                case 'first_name':  ?>
                  <tr> 
                    <td>First name</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'last_name':  ?>
                  <tr>
                    <td>Last name</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'date_of_birth':  ?>
                  <tr> 
                    <td>Date of Birth</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'mobile':  ?>
                  <tr> 
                    <td>Mobile</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'name_of_the_institution':  ?>
                  <tr> 
                    <td>Name of the institutions</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'qualification':  ?>
                  <tr> 
                    <td>Qualification</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'fixed_compensation':  ?>
                  <tr> 
                    <td>Fixed compensation</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'variable_compensation':  ?>
                  <tr> 
                    <td>Variable compensation</td> 
                    <td><?php echo $val; ?> </td>
                  </tr>
            <?php break;
                case 'current_location':  ?>
                  <tr> 
                    <td>Current location</td> 
                    <td><?php echo $val; ?> </td>
                  </tr>
            <?php break;
                case 'permanent_location':  ?>
                  <tr> 
                    <td>parmanent location</td> 
                    <td><?php echo $val; ?> </td>
                  </tr>
            <?php break;
                case 'years_of_experience':  ?>
                  <tr> 
                    <td>Years of experience</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'notice_period':  ?>
                  <tr> 
                    <td>Notice period</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'current_role':  ?>
                  <tr> 
                    <td>Current role</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                case 'cover_letter':  ?>
                  <tr> 
                    <td>Cover letter</td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
            <?php break;
                default:  ?>
                  <tr> 
                    <td><?php echo $key; ?></td> 
                    <td><?php echo $val; ?> </td> 
                  </tr>
           <?php break; 
            } 
          } 
        }
      }
      else { ?>
     <tr> 
      <td>Result not found</td>
<?php }?>
     </tr>
  </table>
</div>
