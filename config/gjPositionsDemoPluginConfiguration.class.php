<?php

/**
 * gjPositionsDemoPlugin configuration.
 * 
 * @package     gjPositionsDemoPlugin
 * @subpackage  config
 * @author      caefer
 * @version     SVN: $Id: PluginConfiguration.class.php 17207 2009-04-10 15:36:26Z Kris.Wallsmith $
 */
class gjPositionsDemoPluginConfiguration extends sfPluginConfiguration
{
  const VERSION = '1.0.0-DEV';

  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
    exec('rm -rf '.dirname(__FILE__).'/../cache/frontend/dev/config/modules_*');
  }
}
