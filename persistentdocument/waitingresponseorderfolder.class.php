<?php
/**
 * Class where to put your custom methods for document featurepacka_persistentdocument_waitingresponseorderfolder
 * @package modules.featurepacka.persistentdocument
 */
class featurepacka_persistentdocument_waitingresponseorderfolder extends featurepacka_persistentdocument_waitingresponseorderfolderbase 
{
	/**
	 * @return string
	 */
	public function getLabel()
	{
		return LocaleService::getInstance()->transBO('m.featurepacka.document.waitingresponseorderfolder.document-name', array('ucf'));
	}
}