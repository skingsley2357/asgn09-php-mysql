<?php require_once('../../private/initialize.php'); ?>

<?php
  
  $salamander_set = find_all_salamanders();

?>

<?php $page_title = 'Salamanders'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">
  <div class="subjects listing">
    <h1>Salamanders</h1>

    <div class="actions">
      <a class="action" href="">Create New Salamander</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($salamander = mysqli_fetch_assoc($salamander_set)) { ?>
        <tr>
          <td><?php echo h($salamander['id']); ?></td>
          <td><?php echo h($salamander['name']); ?></td>
          <td><?php echo h($salamander['habitat']) == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo h($salamander['description']); ?></td>
          <td><a class="action" href="<?php echo 
            url_for('/salamanders/show.php?id=' . $subject['id']) ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php
      mysqli_free_result($salamander_set);
    ?>

  </div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
