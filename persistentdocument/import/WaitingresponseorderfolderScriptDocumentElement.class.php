<?php
/**
 * featurepacka_WaitingresponseorderfolderScriptDocumentElement
 * @package modules.featurepacka.persistentdocument.import
 */
class featurepacka_WaitingresponseorderfolderScriptDocumentElement extends import_ScriptDocumentElement
{
    /**
     * @return featurepacka_persistentdocument_waitingresponseorderfolder
     */
    protected function initPersistentDocument()
    {
    	return featurepacka_WaitingresponseorderfolderService::getInstance()->getNewDocumentInstance();
    }
    
    /**
	 * @return f_persistentdocument_PersistentDocumentModel
	 */
	protected function getDocumentModel()
	{
		return f_persistentdocument_PersistentDocumentModel::getInstanceFromDocumentModelName('modules_featurepacka/waitingresponseorderfolder');
	}
}