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

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_simplecallback'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Simplecallback', JPATH_COMPONENT_ADMINISTRATOR);

$controller = JControllerLegacy::getInstance('Simplecallback');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
