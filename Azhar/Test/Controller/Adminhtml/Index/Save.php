<?php
 
namespace Azhar\Test\Controller\Adminhtml\Index;
 
use Azhar\Test\Controller\Adminhtml\Affiliates;
 
class Save extends Affiliates
{
   /**
     * @return void
     */
   public function execute()
   {
      $isPost = $this->getRequest()->getPost();
      if ($isPost) {
         $requestModel = $this->_postFactory->create();

         $requestId = $this->getRequest()->getParam('id'); 
         
         if ($requestId) {
            $requestModel->load($requestId);
         }
         $formData = $this->getRequest()->getParam('req');
         $formData['update_time'] = Varien_Date::now();
         echo  '<pre>'; print_r($formData); echo '</pre>'; exit;
         $requestModel->setData($formData);
         
         try {
            // Save request
            $requestModel->save();
 
            // Display success message
            $this->messageManager->addSuccess(__('The request has been saved.'));
 
            // Check if 'Save and Continue'
            if ($this->getRequest()->getParam('back')) {
               $this->_redirect('*/*/edit', ['id' => $requestModel->getId(), '_current' => true]);
               return;
            }
 
            // Go to grid page
            $this->_redirect('*/*/');
            return;
         } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
         }
 
         $this->_getSession()->setFormData($formData);
         $this->_redirect('*/*/edit', ['id' => $requestId]);
      }
   }


}