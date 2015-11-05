<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/5/15
 * Time: 1:59 PM
 */
class DS_Test_Model_Resource_Test extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('dstest/table_test', 'id');
    }

}
