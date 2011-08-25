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
		return f_Locale::translateUI("&modules.featurepacka.document.waitingresponseorderfolder.Document-name;");
	}
}