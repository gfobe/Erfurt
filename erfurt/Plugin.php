<?php

/**
  * Abstract base class for all Erfurt plug-ins. 
  *
  * @package Plugin
  * @author Norman Heino <norman@feedface.de>
  * @version $Id$
  */
abstract class Erfurt_Plugin {
	
	/**
	  * @var Array of datatypes available in plug-ins
	  */
	protected $types;
	
	/**
	  * @var The Erfurt plug-in base as a URL reference
	  */
	protected $pluginBaseUrl;
	
	/**
	  * @var The Erfurt plug-in base as a file system reference
	  */
	protected $pluginBaseDir;
	
	/**
	  * Protected constructor. You cannot instantiate this class.
	  */
	protected function __construct() {
		$config = Zend_Registry::get('config');
		$this->types = Zend_Registry::get('datatypes');
		$this->pluginBaseUrl = $config->erfurtPublicUri . $config->pluginDir;
		$this->pluginBaseDir = ERFURT_BASE . $config->pluginDir;
	}
}

?>