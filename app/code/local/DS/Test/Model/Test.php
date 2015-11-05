<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/5/15
 * Time: 1:58 PM
 */
class DS_Test_Model_Test extends Mage_Core_Model_Abstract
{

    protected  function _construct()
    {
        // parent::_construct();
        $this->_init('dstest/test');
    }


}
