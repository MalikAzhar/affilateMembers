<?php
 
namespace Azhar\Test\Controller\Adminhtml\Index;
 
use Azhar\Test\Controller\Adminhtml\Affiliates;
 
class MassDelete extends Affiliates
{
   /**
    * @return void
    */
   public function execute()
   {
      // Get IDs of the selected request
      $requestIds = $this->getRequest()->getParam('affiliates');
 
        foreach ($requestIds as $requestId) {
            try {
               /** @var $requestModel \Mageworld\SimpleNews\Model\News */
                $requestModel = $this->_postFactory->create();
                $requestModel->load($requestId)->delete();
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
 
        if (count($requestIds)) {
            $this->messageManager->addSuccess(
                __('A total of %1 record(s) were deleted.', count($requestIds))
            );
        }
 
        $this->_redirect('*/*/index');
   }
}