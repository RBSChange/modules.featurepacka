<?php
class featurepacka_ContainedProductOrderFilter extends f_persistentdocument_DocumentFilterImpl
{
	public function __construct()
	{
		$info = new BeanPropertyInfoImpl('product', 'modules_catalog/product');
		$this->setParameter('product', new f_persistentdocument_DocumentFilterValueParameter($info));
	}
	
	/**
	 * @return String
	 */
	public static function getDocumentModelName()
	{
		return 'modules_order/order';
	}
	
	/**
	 * @return f_persistentdocument_criteria_Query
	 */
	public function getQuery()
	{
		$query = order_OrderService::getInstance()->createQuery();
		$criteria1 = $query->createCriteria('line');
		$criteria1->add(Restrictions::in('productId', DocumentHelper::getIdArrayFromDocumentArray($this->getParameter('product')->getValueForQuery())));
		return $query;
	}
}