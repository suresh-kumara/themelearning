<div id="header-wrap">
<div id="header"><?php print render($page['header']); ?></div>
<div id="highlighted"><?php print render($page['$highlighted']); ?></div>
<div id="help"><?php print render($page['help']); ?></div>
<div id="logo">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Frontpage'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('logo'); ?>" />
        </a>
      <?php endif; ?>
</div>
<div id="site_name">
   <?php if ($site_name): ?>
   <span><?php print $site_name; ?></span>
   <?php endif; ?>
</div>

<div id="admin"><?php if ($is_admin) { print theme('username', array('account' => $user));  } ?></div>


<div id ="main_menu">  
<?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation"><div class="section">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </div></div> <!-- /.section, /#navigation -->
    <?php endif; ?>
</div>
<div id="banner"><?php print render($page['banner']); ?></div>

<div id="tabs">
<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
</div>

<div id="navigation"><?php //print render($page['navigation']); ?></div>
</div>

<div id="page-wrapper">
<?php if ($page['sidebar_first']): ?>
<div id="sidebar_first"><?php print render($page['sidebar_first']); ?></div>
<div id="left_sidebar_first"><?php print render($page['left_sidebar_first']); ?></div>
<?php endif; ?>

<div id="content"><?php print render($page['content']); ?></div>
<div id="#customtheme">
<?php print render( theme('ajax_test2', array('message' => 'I am from theme_hook') )); ?>
</div>
<?php if ($page['sidebar_second']): ?>
<div id="sidebar_second"><?php print render($page['sidebar_second']); ?></div>
<div id="right_sidebar_second"><?php print render($page['right_sidebar_second']); ?></div>
</div>
<?php endif; ?>

<?php ////print theme('customtheme_hook'); ?>
<div id="footer"><?php print render($page['footer']); ?></div>

<?php dpm($message); ?> 

<?php print $name; ?>

<?php print $body; ?>

<?php print $created; ?>

<?php dpm($page['sidebar_first']); ?>


