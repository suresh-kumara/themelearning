<?php
/**
 *
 * $theme_hook_suggestions
 */
?>

<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>" <?php print $attributes; ?>>
 <?php print render($title_prefix); ?>
<?php if ($block->subject) : ?> 
 <div id="<?php print $title_attributes; ?>"><?php print $block->subject; ?></div>
 <?php endif; ?>

 <?php print render($title_suffix); ?>
<?php if ($content) : ?> 
 <div id="<?php print $content_attributes; ?>"><?php print $content; ?></div>
 <?php endif; ?>
</div>
</div>

