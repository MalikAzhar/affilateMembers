<?php
 
namespace Azhar\Test\Controller\Adminhtml\Index;
 
use Azhar\Test\Controller\Adminhtml\Affiliates;
 
class NewAction extends Affiliates
{
   /**
     * Create new news action
     *
     * @return void
     */
   public function execute()
   {
      $this->_forward('edit');
   }
}