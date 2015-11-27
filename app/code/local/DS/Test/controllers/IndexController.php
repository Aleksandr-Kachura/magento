<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/5/15
 * Time: 12:51 PM
 */
class DS_Test_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
       /* $news = Mage::getModel('dstest/test')->load(2);
        var_dump($news->getData());
        var_dump($news->getDescript());*/

      /*  $tests = Mage::getModel('dstest/test')->getCollection()->load();
        $output = array();
        foreach($tests as $test){
            $output[$test->getId()] = $test->getTitle();
        }
        var_dump($output);*/

        /*$this->loadLayout();
        $this->renderLayout();*/

        $this->loadLayout()->_setActiveMenu('dsnews');
       // $this->_addContent($this->getLayout()->createBlock('dstest/adminhtml_test_edit'));
        $this->renderLayout();

    }


}