<?php
 
namespace Azhar\Test\Controller\Adminhtml\Index;
 
use Azhar\Test\Controller\Adminhtml\Affiliates;
 
class Delete extends Affiliates
{
   /**
    * @return void
    */
   public function execute()
   {
      $requestId = (int) $this->getRequest()->getParam('id');
 
      if ($requestId) {

         $requestModel = $this->_postFactory->create();
         $requestModel->load($requestId);
 
         // Check this request exists or not
         if (!$requestModel->getId()) {
            $this->messageManager->addError(__('This request no longer exists.'));
         } else {
               try {
                  // Delete request
                  $requestModel->delete();
                  $this->messageManager->addSuccess(__('The request has been deleted.'));
 
                  // Redirect to grid page
                  $this->_redirect('*/*/');
                  return;
               } catch (\Exception $e) {
                   $this->messageManager->addError($e->getMessage());
                   $this->_redirect('*/*/edit', ['id' => $requestModel->getId()]);
               }
            }
      }
   }
}
 