<?php 

namespace Azhar\Test\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init('Azhar\Test\Model\Post', 'Azhar\Test\Model\ResourceModel\Post');
    }

}