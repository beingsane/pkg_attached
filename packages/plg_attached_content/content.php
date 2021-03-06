<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Attached.Content
 *
 * @author      Bruno Batista <bruno@atomtech.com.br>
 * @copyright   Copyright (C) 2013 AtomTech, Inc. All rights reserved.
 * @license     Commercial License
 */

// No direct access.
defined('_JEXEC') or die;

/**
 * Content Attached plugin.
 *
 * @package     Attached
 * @subpackage  Attached.content
 * @author      Bruno Batista <bruno@atomtech.com.br>
 * @since       3.2
 */
class PlgAttachedContent extends JPlugin
{
	/**
	 * Constructor.
	 *
	 * @param   object  &$subject  The object to observe.
	 * @param   array   $config    An array that holds the plugin configuration.
	 *
	 * @access  protected
	 * @since   3.2
	 */
	public function __construct(& $subject, $config)
	{
		parent::__construct($subject, $config);

		$this->loadLanguage();
	}

	/**
	 * Method to get config.
	 *
	 * @param   array  $config  The array with configs to load.
	 *
	 * @return  array
	 *
	 * @since   3.2
	 */
	public function onGetConfig($config)
	{
		$config['context'] = 'com_content.article';
		$config['text'] = JText::_('PLG_ATTACHED_CONTENT_ARTICLE');

		return $config;
	}
}
