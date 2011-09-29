<?php
/**
 * order_PrintOrderPropertiesView
 * @package modules.featurepacka.views
 */
class order_PrintOrderMessagesView extends f_view_BaseView
{
	/**
	 * @param Context $context
	 * @param Request $request
	 */
	public function _execute($context, $request)
	{
		$this->forceModuleName('featurepacka');
		$this->setTemplateName('Order-Action-PrintOrder-Messages');
		$this->includeStyle();
		
		$this->setAttribute('companyName', Framework::getCompanyName());
		$order = $request->getAttribute('order');
		$this->setAttribute('order', $order);
		$this->setAttribute('messages', order_MessageService::getInstance()->getByOrder($order));
	}

	protected function includeStyle()
	{
		$ss = StyleService::getInstance();
		$ss->registerStyle('modules.featurepacka.printOrder');
		$ss->registerStyle('modules.featurepacka.printOrderPrint', StyleService::MEDIA_PRINT);
		$this->setAttribute('cssInclusion', $ss->execute(K::HTML));
	}
}