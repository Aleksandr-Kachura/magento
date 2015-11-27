<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/6/15
 * Time: 3:41 PM
 */
class Ds_Test_Model_Observer
{
    public function logCustomer($observer)
    {


        /*$customer = $observer->getCustomer();
        echo D;
        exit;

        Mage::log($customer->getName()."has logged in!",null,"customer.log");*/
        $customer = $observer->getCustomer();
        Mage::log("text here", null, 'MMM.log');
    }
}