<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/4/15
 * Time: 10:07 AM
 */
class DS_Test_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function Hello()
    {
       /* $products = Mage::getModel('catalog/product')->getCollection();
        $products->joinTable(
            'cataloginventory/stock_item',
            'product_id=entity_id',
            array('qty'=>'qty', 'is_in_stock' => 'is_in_stock'),
            '',
            'left');
        $products->addAttributeToFilter('qty', array('gt' => 0));
        $products->addAttributeToFilter('is_in_stock', array('eq' => 0));
        return $products;*/
        /*$products = Mage::getModel('catalog/product')->getCollection();
        $products->addAttributeToFilter(
            array(
                array('attribute'=> 'someattribute','like' => 'value'),
                array('attribute'=> 'otherattribute','like' => 'value'),
                array('attribute'=> 'anotherattribute','like' => 'value'),
            )
        );*/
    }


}