<?php
 
namespace Azhar\Test\Controller\Adminhtml;
 
// use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Azhar\Test\Model\PostFactory;
 
abstract class Affiliates extends \Magento\Backend\App\Action
{

    protected $_coreRegistry;
    protected $_resultPageFactory;
    protected $_postFactory;
    
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        PageFactory $resultPageFactory,
        PostFactory $postFactory
    ) {
       parent::__construct($context);
        $this->_coreRegistry = $coreRegistry;
        $this->_resultPageFactory = $resultPageFactory;
        $this->_postFactory = $postFactory;
    }
 
    protected function _isAllowed()
    {
        // return $this->_authorization->isAllowed('Azhar_Test::requests');
        return true;
    }
}