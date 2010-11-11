<?php

/**
 * Base actions for the gjPositionsDemoPlugin demopage module.
 * 
 * @package     gjPositionsDemoPlugin
 * @subpackage  demopage
 * @author      Your name here
 * @version     SVN: $Id: BaseActions.class.php 12534 2008-11-01 13:38:27Z Kris.Wallsmith $
 */
abstract class BasedemopageActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $id = $request->getParameter('id');
    $this->forward404unless($id);
    $this->page = Doctrine_Core::getTable('DemoPage')->find($id);
    $this->getResponse()->setTitle($this->page['title']);
    $this->config = sfConfig::get('app_gjPositionsPlugin_design_elements', array());
  }
}
