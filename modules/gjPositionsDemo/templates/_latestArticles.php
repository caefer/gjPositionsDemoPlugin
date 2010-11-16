<?php use_helper('Text') ?>
<div class="design_element latestArticles">
<h3>Latest articles</h3>
<ul>
<?php foreach($articles as $i => $article): ?>
  <li>
    <h3><?php echo $article['headline'] ?></h3>
    <p><?php echo truncate_text($article['text'], 100) ?></p>
  </li>
<?php endforeach; ?>
</ul>
<h3>Manually assigned contents</h3>
<ul>
<?php foreach($contents as $i => $content): ?>
  <li>
    <h3><?php echo $content ?></h3>
  </li>
<?php endforeach; ?>
</ul>
</div>
