<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/4/15
 * Time: 9:28 AM
 */
class DS_News_Model_Resource_News extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('dsnews/table_news', 'news_id');
    }

}
