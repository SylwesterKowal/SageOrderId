<?php

namespace Wm21w\Sage\Block\Adminhtml\Order\View;
class Custom extends \Magento\Backend\Block\Template
{
    public function getSageOrderID()
    {
        $parent = $this->getParentBlock();
        $order = $parent->getOrder();
        return 'Hello world:' . $order->getSageOrderId();
    }
}