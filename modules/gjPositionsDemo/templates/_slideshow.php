<div class="design_element slideshow">
slideshow
<ul>
<?php foreach($contents as $i => $content): ?>
  <li>
    <h3><?php echo $content['override']['title'] ? $content['override']['title'] : $content['Object']['title'] ?></h3>
  </li>
<?php endforeach; ?>
</ul>
</div>
