<?php use_helper('Text') ?>
<div class="design_element latestArticles">
<ul>
<?php foreach($articles as $i => $article): ?>
  <li>
    <h3><?php echo $article['headline'] ?></h3>
    <p><?php echo truncate_text($article['text'], 100) ?></p>
  </li>
<?php endforeach; ?>
</ul>
</div>
