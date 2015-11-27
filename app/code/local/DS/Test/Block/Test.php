<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/6/15
 * Time: 10:41 AM
 */

class DS_Test_Block_Test extends Mage_Core_Block_Template
{

    public function getNewsCollection()
    {
        $newsCollection = Mage::getModel('dsnews/news')->getCollection();
        $newsCollection->setOrder('created', 'DESC');
        return $newsCollection;
    }


}