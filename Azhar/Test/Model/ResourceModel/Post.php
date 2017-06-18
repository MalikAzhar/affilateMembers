<?php

namespace Azhar\Test\Model\ResourceModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('azhar', 'entity_id');
    }

}