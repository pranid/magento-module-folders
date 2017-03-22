<?php

class Publisher_ModuleName_Model_Mysql4_Mymodel extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('modulename/mymodel', 'id');
    }

}