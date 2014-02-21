<?php
/**
 * @package     HelloWorld.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die;

/**
 * Categories Controller
 *
 * @since  0.0.2
 */
class HelloWorldControllerCategories extends JControllerAdmin
{
	/**
	 * [getModel description]
	 *
	 * @param   string  $name    The Model Name.optional.
	 * @param   string  $prefix  The Class name.optional.
	 * @param   array   $config  The array of possible Config values.optional.
	 *
	 * @return  object           The Model
	 */
	public function getModel($name = 'Category', $prefix = 'HelloworldModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}

	/**
	 * Rebuild the nested set tree.
	 *
	 * @return  bool  False on failure or error, true on success.
	 *
	 * @since   1.6
	 */
	public function rebuild()
	{
		JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

		$this->setRedirect(JRoute::_('index.php?option=com_helloworld&view=categories', false));

		$model = $this->getModel();

		if ($model->rebuild())
		{
			// Rebuild succeeded.
			$this->setMessage(JText::_('COM_CATEGORIES_REBUILD_SUCCESS'));

			return true;
		}
		else
		{
			// Rebuild failed.
			$this->setMessage(JText::_('COM_CATEGORIES_REBUILD_FAILURE'));

			return false;
		}
	}
}
