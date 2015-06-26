<?php
/**
 *
 *  Responsive design page
 *
 */
?>

<?php // print $right_header;  exit; ?>
<div id="page">
<div class="row">
  <div class="right_header">
    <?php print render($page['right_header']); ?>
  </div>
  <div class="logo">
  <?php if ($logo): ?>
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo">
    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
  <?php endif;?>
  </div>
  <div class="site_name">
  <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
  </div>
  <div class="row">
  <div class="menu">
   <div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>
      </div>
    </div>
    </div>
    <div class="row">
  <div class="marquee_text">
    <?php print render($page['maqruee_text']); ?>
  </div>
  </div>
  <div class="row">
    <div class="breadcrumb">
    <?php print $breadcrumb; ?>
    </div>
    </div>
  <div class="container_wrap">
  <div class="row">
    <div class="left_sidebar">
    <?php print render($page['left_sidebar']); ?>
    </div>
    
    <div class="main_content">
    <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      
     
    </div>
    
    <div class="right_sidebar">
    <?php print render($page['right_sidebar']); ?>
    </div>
  </div>
  </div>
</div>
