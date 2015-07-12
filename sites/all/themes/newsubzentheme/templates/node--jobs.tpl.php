<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    //  print_r($content);
//    print render($content['jobs_title']);
    print render($content['category']);
    print render($content['job_description']);
    print render($content['last_date']);
    print render($content['no_of_openings']);
  ?>
<?php if (isset($content['last_date']['#object']->last_date['und']['0']['value']) && strtotime($content['last_date']['#object']->last_date['und']['0']['value']) > strtotime(date('l, F j, Y'))) {  
$jobid = base64_encode($nid);
?>
  <p><a href="<?php echo base_path(). 'apply/jobid/' . $jobid; ?>" class="btn" data-thmr="thmr_47 thmr_48">Apply</a></p>
<?php } ?>
  <?php print render($content['links']); ?>
  
  <?php print render($content['comments']); ?>

</article>
