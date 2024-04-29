<?php
namespace Humcommerce\Recaptcha\Model\Config\Source;

class BadgePosition implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'inline', 'label' => __('Inline')],
            ['value' => 'bottomright', 'label' => __('Bottom Right')],
            ['value' => 'bottomleft', 'label' => __('Bottom Left')]
        ];
    }
}
