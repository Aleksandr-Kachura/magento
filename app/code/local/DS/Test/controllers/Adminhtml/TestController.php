<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/9/15
 * Time: 5:01 PM
 */
class DS_Test_Adminhtml_TestController extends  Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('dsnews');

        $contentBlock = $this->getLayout()->createBlock('dstest/adminhtml_test_edit');
      //  var_dump($this->getLayout()->createBlock('dstest/adminhtml_test'));
        Mage::register('current_test', Mage::getModel('dstest/test')->load(1));
        $this->_addContent($contentBlock);
        $this->renderLayout();
    }

    public function saveAction()
    {
        /*var_dump($this->getRequest()->getPost());
        exit;*/
        if ($data = $this->getRequest()->getPost()) {
            try {
                $model = Mage::getModel('dstest/test');
                $model->setData($data)->setId($this->getRequest()->getParam('id'));
                $model->save();

                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('News was saved successfully'));
                Mage::getSingleton('adminhtml/session')->setFormData(false);
                $this->_redirect('*/*/');
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                $this->_redirect('*/*/edit', array(
                    'id' => $this->getRequest()->getParam('id')
                ));
            }
            return;
        }
        Mage::getSingleton('adminhtml/session')->addError($this->__('Unable to find item to save'));
        $this->_redirect('*/*/');
    }
}