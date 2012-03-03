<?php
/**
 * @file
 * Main page template file for the alternator theme.
 */
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $body_classes; ?>">
  <div class="header" id="page-header">
    <div class="top">
    <?php if ($user->uid): ?>
      <?php print l(t('Logout'), 'logout', array('attributes' => array('class' => 'login-btn'))) ?>
    <?php else: ?>
      <?php print l(t('Log ind'), 'user/login', array('attributes' => array('class' => 'login-btn'), 'query' => 'destination=user/status')) ?>
    <?php endif; ?>
    </div>
    <div class="bottom">
      <div id="search">
        <?php print $search; ?>
      </div>
    </div>
  </div>
  <?php print $main_menu ?>

  <?php if ($help OR $messages): ?>
    <div id="drupal-messages">
      <?php print $help ?>
      <?php print $messages ?>
    </div>
  <?php endif; ?>

  <?php print $content; ?>

  <?php print $bottom_menu; ?>

  <?php print $closure; ?>
</body>
</html>
