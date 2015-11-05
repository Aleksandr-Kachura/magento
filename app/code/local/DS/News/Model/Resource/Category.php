<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/5/15
 * Time: 3:06 PM
 */
class DS_News_Model_Resource_Category extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('dsnews/table_categories', 'category_id');
    }

}