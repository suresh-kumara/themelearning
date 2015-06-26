<?php
/**
 *
 *  Responsive design page
 *  RDF namespace
 */
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces; ?>>

  <head profile="<?php print $grddl_profile; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <meta charset="UTF-8">
  <meta name="keywords" content="practice, drupal, azri">
  <meta name="description" content="drupal theming practice"> 
  <!-- <meta http-equiv="refresh" content="30"> -->
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <div class="row">
  <?php print $page_top; ?>
  </div>
  <div class="row">
  <?php print $page; ?>
  </div>
  <div class="row">
  <?php print $page_bottom; ?>
  </div>
  </body>
</html>
