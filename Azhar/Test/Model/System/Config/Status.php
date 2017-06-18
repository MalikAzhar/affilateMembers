<?php
 
namespace Azhar\Test\Model\System\Config;
 
use Magento\Framework\Option\ArrayInterface;
 
class Status implements ArrayInterface
{
    const ACTIVE  = 1;
    const DISABLED = 0;
 
    public function toOptionArray()
    {
        $options = [
            self::ACTIVE => __('Active'),
            self::DISABLED => __('Disabled')
        ];
 
        return $options;
    }
}