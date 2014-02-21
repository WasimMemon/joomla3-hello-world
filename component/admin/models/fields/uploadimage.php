<?php
/**
 * @package     Helloworld.Administrator
 * @subpackage  com_helloworld
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_PLATFORM') or die;

/**
 * User mediA Field class for the COM_HELLOWORLD component.
 *
 * @package     Helloworld.Administrator
 * @subpackage  com_helloworld
 * @since       0.0.1
 */
class JFormFieldUploadimage extends JFormField
{
	/**
	 * The user media type
	 *
	 * @var  string
	 */
	protected $type = 'Uploadimage';

	/**
	 * Method to get the field input markup.
	 *
	 * @return   string   The field input markup.
	 *
	 * @since    0.0.1
	 */
	protected function getInput()
	{
		$html = array();
		$html[] = '<div class="button2-left">';
		$html[] = '<input type="file" name="' . $this->name . '" value ="' . $this->value . '"/>';
		$html[] = '<input type="hidden" name="jform[hiddenpath]" value="' . $this->value . '"/>';
		$html[] = '</div>';
		$html[] = '<div style=" height:300px; width:300px;">';
		$html[] = '<img src ="' . JUri::root() . 'media/com_helloworld/images/category/' . $this->value . '" />';
		$html[] = '</div>';

		return implode("\n", $html);
	}
}
