<?php
namespace Humcommerce\Recaptcha\Model\Resolver\RecaptchaConfigResolver;

/**
 * Interceptor class for @see \Humcommerce\Recaptcha\Model\Resolver\RecaptchaConfigResolver
 */
class Interceptor extends \Humcommerce\Recaptcha\Model\Resolver\RecaptchaConfigResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory)
    {
        $this->___init();
        parent::__construct($scopeConfig, $valueFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, $value = null, $args = null) : \Magento\Framework\GraphQl\Query\Resolver\Value
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
