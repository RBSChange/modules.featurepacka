<?php
/**
 * featurepacka_ProductqueryfolderScriptDocumentElement
 * @package modules.featurepacka.persistentdocument.import
 */
class featurepacka_ProductqueryfolderScriptDocumentElement extends import_ScriptDocumentElement
{
    /**
     * @return featurepacka_persistentdocument_productqueryfolder
     */
    protected function initPersistentDocument()
    {
    	return featurepacka_ProductqueryfolderService::getInstance()->getNewDocumentInstance();
    }
    
    /**
	 * @return f_persistentdocument_PersistentDocumentModel
	 */
	protected function getDocumentModel()
	{
		return f_persistentdocument_PersistentDocumentModel::getInstanceFromDocumentModelName('modules_featurepacka/productqueryfolder');
	}
}