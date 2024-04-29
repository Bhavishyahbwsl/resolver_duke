<?php

namespace Humcommerce\Recaptcha\Model\Resolver;

use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Query\Resolver\ValueFactory;
use Magento\Framework\GraphQl\Query\Resolver\Value;
use Magento\Framework\App\Config\ScopeConfigInterface;

class RecaptchaConfigResolver implements ResolverInterface
{
    protected $scopeConfig;
    protected $valueFactory;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        ValueFactory $valueFactory
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->valueFactory = $valueFactory;
    }

    public function resolve(
        \Magento\Framework\GraphQl\Config\Element\Field $field,
        $context,
        \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info,
        $value = null,
        $args = null
    ): Value {
        $configData = [
            'google_api_website_key' => $this->scopeConfig->getValue('website_security/select_category/google_api_website_key'),
            'google_api_secret_key' => $this->scopeConfig->getValue('website_security/select_category/google_api_secret_key'),
            'minimum_score' => $this->scopeConfig->getValue('website_security/select_category/minimum_score'),
            'invisible_badge' => $this->scopeConfig->getValue('website_security/select_category/invisible_badge'),
        ];
    
        return $this->valueFactory->create(function () use ($configData) {
            return $configData;
        });
    }
}
