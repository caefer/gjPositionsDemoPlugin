<?php

/**
 * Base components for the gjPositionsDemoPlugin gjPositionsDemo module.
 * 
 * @package     gjPositionsDemoPlugin
 * @subpackage  gjPositionsDemo
 * @author      caefer
 * @version     SVN: $Id: BaseComponents.class.php 12534 2008-11-01 13:38:27Z Kris.Wallsmith $
 */
abstract class BasegjPositionsDemoComponents extends sfComponents
{
  public function executeSlideshow(sfWebRequest $request)
  {
  }

  public function executeLatestArticles(sfWebRequest $request)
  {
    $this->articles = Doctrine_Query::create()
      ->from('DemoArticle a')
      ->orderBy('a.created_at ASC')
      ->limit($this->params['number'])
      ->execute();
  }
}
