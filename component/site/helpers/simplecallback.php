<?php

/**
 * @version    CVS: 1.0.0
 * @package    Com_Simplecallback
 * @author     Alexey Startler <info@startler.ru>
 * @copyright  2016 Alexey Startler
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Class SimplecallbackFrontendHelper
 *
 * @since  1.6
 */
class SimplecallbackHelpersSimplecallback
{
	/**
	 * Get an instance of the named model
	 *
	 * @param   string  $name  Model name
	 *
	 * @return null|object
	 */
	public static function getModel($name)
	{
		$model = null;

		// If the file exists, let's
		if (file_exists(JPATH_SITE . '/components/com_simplecallback/models/' . strtolower($name) . '.php'))
		{
			require_once JPATH_SITE . '/components/com_simplecallback/models/' . strtolower($name) . '.php';
			$model = JModelLegacy::getInstance($name, 'SimplecallbackModel');
		}

		return $model;
	}

	/**
	 * Gets the files attached to an item
	 *
	 * @param   int     $pk     The item's id
	 *
	 * @param   string  $table  The table's name
	 *
	 * @param   string  $field  The field's name
	 *
	 * @return  array  The files
	 */
	public static function getFiles($pk, $table, $field)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query
			->select($field)
			->from($table)
			->where('id = ' . (int) $pk);

		$db->setQuery($query);

		return explode(',', $db->loadResult());
	}
}
