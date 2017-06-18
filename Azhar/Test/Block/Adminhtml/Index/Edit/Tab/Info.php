<?php
 
namespace Azhar\Test\Block\Adminhtml\Index\Edit\Tab;
 
use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Tab\TabInterface;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Magento\Framework\Data\FormFactory;
use Magento\Cms\Model\Wysiwyg\Config;
use Azhar\Test\Model\System\Config\Status;
 
class Info extends Generic implements TabInterface
{

    protected $_wysiwygConfig;
    protected $_status;
 

    public function __construct(
        Context $context,
        Registry $registry,
        FormFactory $formFactory,
        Config $wysiwygConfig,
        Status $status,
        array $data = []
    ) {
        $this->_wysiwygConfig = $wysiwygConfig;
        $this->_status = $status;
        parent::__construct($context, $registry, $formFactory, $data);
    }
 
    /**
     * Prepare form fields
     *
     * @return \Magento\Backend\Block\Widget\Form
     */
    protected function _prepareForm()
    {

        $model = $this->_coreRegistry->registry('requests_data');

        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('request_');
        $form->setFieldNameSuffix('req');
 
        $fieldset = $form->addFieldset(
            'base_fieldset',
            ['legend' => __('General')]
        );
 
        if ($model->getId()) {
            $fieldset->addField(
                'entity_id',
                'hidden',
                ['name' => 'entity_id']
            );
        }
        $fieldset->addField(
            'name',
            'text',
            [
                'name'        => 'name',
                'label'    => __('Member Name'),
                'required'     => true
            ]
        );

        $fieldset->addField(
            'image',
            'image',
            [
                'name'        => 'image',
                'label'    => __('Upload Image'),
                'required'     => true
            ]
            
        );

        $fieldset->addField(
            'status',
            'select',
            [
                'name'      => 'status',
                'label'     => __('Status'),
                'options'   => $this->_status->toOptionArray()
            ]
        );

        $data = $model->getData();

        $form->setValues($data);
        $this->setForm($form);
 
        return parent::_prepareForm();
    }
 
    public function getTabLabel()
    {
        return __('General');
    }
 
    public function getTabTitle()
    {
        return __('General');
    }
 
    public function canShowTab()
    {
        return true;
    }
 
    public function isHidden()
    {
        return false;
    }
}