<?php require_once('../../private/initialize.php'); ?>

<?php
  $id = $_GET['id'] ?? '1';
?>

<?php $page_title = 'View Salamander'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="page-show">

    Page ID: <?php echo h($id); ?>

  </div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
