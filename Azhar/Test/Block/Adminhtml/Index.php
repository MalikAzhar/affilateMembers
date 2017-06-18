<?php
 
namespace Azhar\Test\Block\Adminhtml;
 
use Magento\Backend\Block\Widget\Grid\Container;
 
class Index extends Container
{
   /**
     * Constructor
     *
     * @return void
     */
   protected function _construct()
    {
        $this->_controller = 'adminhtml_index';
        $this->_blockGroup = 'Azhar_Test';
        $this->_headerText = __('Add member');
        parent::_construct();
    }
}