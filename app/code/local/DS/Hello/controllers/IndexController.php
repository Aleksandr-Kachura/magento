<?php

class DS_Hello_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        /*$this->loadLayout();
        $this->renderLayout();*/
        echo "hello";

    }

    public function helloAction()
    {
       // $this->loadLayout();
        $parameters = array(
                'product' => Mage::getModel('catalog/product')->load(166),
                'category' => Mage::getModel('catalog/category')->load(10),
        );
       // Mage::dispatchEvent('helloworld_register_visit');

        Mage::dispatchEvent('register_visit',$parameters);
       // $this->renderLayout();
    }


}