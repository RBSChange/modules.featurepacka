<?php
/**
 * @package modules.featurepacka.setup
 */
class featurepacka_Setup extends object_InitDataSetup
{
	public function install()
	{
		$this->executeModuleScript('init.xml');
		
		$mbs = uixul_ModuleBindingService::getInstance();
		
		// Product query folder.
		$mbs->addImportInPerspective('catalog', 'featurepacka', 'catalog.perspective');
		$mbs->addImportInActions('catalog', 'featurepacka', 'catalog.actions');
		$result = $mbs->addImportForm('catalog', 'modules_featurepacka/productqueryfolder');
		if ($result['action'] == 'create')
		{
			uixul_DocumentEditorService::getInstance()->compileEditorsConfig();
		}
		f_permission_PermissionService::getInstance()->addImportInRight('catalog', 'featurepacka', 'catalog.rights');
		
		// waiting answer order folder.
		$mbs->addImportInPerspective('order', 'featurepacka', 'order.perspective');
		if ($result['action'] == 'create')
		{
			uixul_DocumentEditorService::getInstance()->compileEditorsConfig();
		}
		f_permission_PermissionService::getInstance()->addImportInRight('order', 'featurepacka', 'order.rights');
	}

	/**
	 * @return String[]
	 */
	public function getRequiredPackages()
	{
		// Return an array of packages name if the data you are inserting in
		// this file depend on the data of other packages.
		// Example:
		// return array('modules_website', 'modules_users');
		return array('modules_catalog', 'modules_order');
	}
}