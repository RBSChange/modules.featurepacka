<?php
/**
 * featurepacka_ProductqueryfolderService
 * @package modules.featurepacka
 */
class featurepacka_ProductqueryfolderService extends filter_QueryfolderService
{
	/**
	 * @var featurepacka_ProductqueryfolderService
	 */
	private static $instance;

	/**
	 * @return featurepacka_ProductqueryfolderService
	 */
	public static function getInstance()
	{
		if (self::$instance === null)
		{
			self::$instance = self::getServiceClassInstance(get_class());
		}
		return self::$instance;
	}

	/**
	 * @return featurepacka_persistentdocument_productqueryfolder
	 */
	public function getNewDocumentInstance()
	{
		return $this->getNewDocumentInstanceByModelName('modules_featurepacka/productqueryfolder');
	}

	/**
	 * Create a query based on 'modules_featurepacka/productqueryfolder' model.
	 * Return document that are instance of modules_featurepacka/productqueryfolder,
	 * including potential children.
	 * @return f_persistentdocument_criteria_Query
	 */
	public function createQuery()
	{
		return $this->pp->createQuery('modules_featurepacka/productqueryfolder');
	}
	
	/**
	 * Create a query based on 'modules_featurepacka/productqueryfolder' model.
	 * Only documents that are strictly instance of modules_featurepacka/productqueryfolder
	 * (not children) will be retrieved
	 * @return f_persistentdocument_criteria_Query
	 */
	public function createStrictQuery()
	{
		return $this->pp->createQuery('modules_featurepacka/productqueryfolder', false);
	}
}