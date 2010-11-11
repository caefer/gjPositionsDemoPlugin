<?php use_helper('gjPositions') ?>
<h1><?php echo $page['headline'] ?></h1>
<?php foreach($page['DesignElements'] as $name => $designElement): ?>
  <?php include_design_element($designElement); ?>
<?php endforeach; ?>
