<?php
namespace Wm21w\Sage\Observer;

class Sage implements \Magento\Framework\Event\ObserverInterface
{
  public function execute(\Magento\Framework\Event\Observer $observer)
  {
     //$order = $observer->getData('order');
	 //$order->doSomething();

     return $this;
  }
}