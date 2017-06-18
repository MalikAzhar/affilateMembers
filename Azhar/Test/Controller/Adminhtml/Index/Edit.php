<?php
 
namespace Azhar\Test\Controller\Adminhtml\Index;
 
use Azhar\Test\Controller\Adminhtml\Affiliates;
 
class Edit extends Affiliates
{

   public function execute()
   {
        $recordId = $this->getRequest()->getParam('id');
        /** @var \Azhar\Test\Model\Index $model */
        $model = $this->_postFactory->create();
 
        
        if ($recordId) {
            $model->load($recordId);

            if (!$model->getId()) {
                $this->messageManager->addError(__('This news no longer exists.'));
                $this->_redirect('*/*/');
                return;
            }
        }
 
        // Restore previously entered form data from session
        $data = $this->_session->getNewsData(true);

        if (!empty($data)) {
            $model->setData($data);
        }
        $this->_coreRegistry->register('requests_data', $model);
 

        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Azhar_Test::requests');
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Record'));
 
        return $resultPage;
   }
}