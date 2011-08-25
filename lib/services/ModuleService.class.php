<?php
/**
 * @package modules.featurepacka.lib.services
 */
class featurepacka_ModuleService extends ModuleBaseService
{
	/**
	 * Singleton
	 * @var featurepacka_ModuleService
	 */
	private static $instance = null;

	/**
	 * @return featurepacka_ModuleService
	 */
	public static function getInstance()
	{
		if (is_null(self::$instance))
		{
			self::$instance = self::getServiceClassInstance(get_class());
		}
		return self::$instance;
	}
}