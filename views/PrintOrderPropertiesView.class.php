<?php
/**
 * order_PrintOrderPropertiesView
 * @package modules.featurepacka.views
 */
class order_PrintOrderPropertiesView extends f_view_BaseView
{
	/**
	 * @param Context $context
	 * @param Request $request
	 */
	public function _execute($context, $request)
	{
		$this->forceModuleName('featurepacka');
		$this->setTemplateName('Order-Action-PrintOrder-Properties');
		$this->includeStyle();

		$order = $request->getAttribute('order');
		$this->setAttribute('order', $order);
		$this->setAttribute('shop', $order->getShop());
		
		$payments = array();
		foreach (order_BillService::getInstance()->getByOrder($order) as $bill)
		{
			/* @var $bill order_persistentdocument_bill */
			$connector = $bill->getPaymentConnector();
			$connector->getDocumentService()->setPaymentInfo($connector, $bill);
			$template = 'Payment-Block-Payment-' . $connector->getTemplateViewName();
			$payments[] = array('bill' => $bill, 'connector' => $connector, 'template' => $template);
		}
		$this->setAttribute('payments', $payments);
		
		$expeditions = array();
		foreach (order_ExpeditionService::getInstance()->getByOrderForDisplay($order) as $expedition)
		{
			/* @var $bill order_persistentdocument_expedition */
			$lines = $expedition->getDocumentService()->getLinesForDisplay($expedition);
			$expeditions[] = array('expedition' => $expedition, 'lines' => $lines);
		}
		$this->setAttribute('expeditions', $expeditions);
	}

	protected function includeStyle()
	{
		$ss = StyleService::getInstance();
		$ss->registerStyle('modules.featurepacka.printOrder');
		$ss->registerStyle('modules.featurepacka.printOrderPrint', StyleService::MEDIA_PRINT);
		$this->setAttribute('cssInclusion', $ss->execute(K::HTML));
	}
}