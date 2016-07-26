<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Simplecallback
 * @author     Alexey Startler <info@startler.ru>
 * @copyright  2016 Alexey Startler
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Simplecallback', JPATH_COMPONENT);
JLoader::register('SimplecallbackController', JPATH_COMPONENT . '/controller.php');


// Execute the task.
$controller = JControllerLegacy::getInstance('Simplecallback');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
