<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/4/15
 * Time: 10:07 AM
 */
class DS_News_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function getImagePath($id = 0)
    {
        $path = Mage::getBaseDir('media') . '/ds_news';
        if ($id) {
            return "{$path}/{$id}.jpg";
        } else {
            return $path;
        }
    }

    public function getImageUrl($id = 0)
    {
        $url = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . 'ds_news/';
        if ($id) {
            return $url . $id . '.jpg';
        } else {
            return $url;
        }
    }

    public function getCategoriesList()
    {
        $categories = Mage::getModel('dsnews/category')->getCollection()->load();
        $output = array();
        foreach($categories as $category){
            $output[$category->getId()] = $category->getTitle();
        }
        return $output;
    }

    public function getCategoriesOptions()
    {
        $categories = Mage::getModel('dsnews/category')->getCollection()->load();
        $options = array();
        $options[] = array(
            'label' => '',
            'value' => ''
        );
        foreach ($categories as $category) {
            $options[] = array(
                'label' => $category->getTitle(),
                'value' => $category->getId(),
            );
        }
        return $options;
    }

}