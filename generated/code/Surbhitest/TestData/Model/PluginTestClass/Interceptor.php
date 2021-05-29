<?php
namespace Surbhitest\TestData\Model\PluginTestClass;

/**
 * Interceptor class for @see \Surbhitest\TestData\Model\PluginTestClass
 */
class Interceptor extends \Surbhitest\TestData\Model\PluginTestClass implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getPluginMessage($msg, $msg_1) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPluginMessage');
        return $pluginInfo ? $this->___callPlugins('getPluginMessage', func_get_args(), $pluginInfo) : parent::getPluginMessage($msg, $msg_1);
    }
}
