<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Simplecallback
 * @author     Alexey Startler <info@startler.ru>
 * @copyright  2016 Alexey Startler
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Message controller class.
 *
 * @since  1.6
 */
class SimplecallbackControllerMessage extends JControllerForm
{
	/**
	 * Constructor
	 *
	 * @throws Exception
	 */
	public function __construct()
	{
		$this->view_list = 'messages';
		parent::__construct();
	}
}
