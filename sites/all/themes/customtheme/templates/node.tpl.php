<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 */
 
 dpm($variables);
 //print render($variables[body]); 
?>

<div class="<?php print $classes; ?>" <?php print $attributes; ?> >

<h2 <?php print $title_attributes; ?> >title: <?php print $title; ?></h2>

<h1 class="content"<?php print $content_attributes; ?>>
  <?php 
    hide($content['comments']);
    hide($content['links']);
    print render($content);
    //print $variables['body'];
    ?>
    </h1>
</div>


<div id="#comments">
  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>
</div>
