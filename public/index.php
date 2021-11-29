<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Menu'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/salamanders/index.php'); ?>">Salamanders</a></li>
    </ul>
  </div>
</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
