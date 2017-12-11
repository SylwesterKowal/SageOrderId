<?php

namespace Wm21w\Sage\Model;

use Wm21w\Sage\Api\CustomRepositoryInterface;
use Wm21w\Sage\Api\Data\CustomDataInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\InputException;
use Magento\Framework\Exception\CouldNotSaveException;

class CustomRepository implements CustomRepositoryInterface
{

    public function __construct(
        \Wm21w\Sage\Api\Data\CustomDataInterfaceFactory $customFactory,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Magento\Framework\Api\ExtensibleDataObjectConverter $extensibleDataObjectConverter
    )
    {
        $this->customFactory = $customFactory;
        $this->_objectManager = $objectManager;
        $this->extensibleDataObjectConverter = $extensibleDataObjectConverter;
    }

    public function create(CustomDataInterface $data)
    {
        $id = (int)$data->getId();

        if (!$this->_objectManager->create('Magento\Sales\Model\Order')->load($id)->getData()) {
            throw new InputException(__("Invalid ID provided", $id));
        } else {
            $order = $this->_objectManager->create('\Magento\Sales\Model\Order')->load($id);
            $sageOrderID = $data->getSageId();
            $order->setData('sage_order_id', $sageOrderID);
            $order->save();
        }

        return $data;
    }

    public function update(CustomDataInterface $data)
    {
        $id = (int)$data->getId();

        if (!$this->_objectManager->create('Magento\Sales\Model\Order')->load($id)->getData()) {
            throw new InputException(__("Invalid ID provided", $id));
        } else {
            $order = $this->_objectManager->create('\Magento\Sales\Model\Order')->load($id);
            $sageOrderID = $data->getSageOrderId();
            $order->setData('sage_order_id', $sageOrderID);
            $order->save();
        }

        return $data;
    }

    public function get($id)
    {
        if (!$this->_objectManager->create('Magento\Sales\Model\Order')->load($id)->getData()) {
            throw new InputException(__("Invalid ID provided", $id));
        } else {
            $order = $this->_objectManager->create('\Magento\Sales\Model\Order')->load($id);
            $sageOrderID = $order->getSageOrderId();
        }
        $result = array();
        $result[] = $sageOrderID;
        return $result;
    }

    public function delete($id)
    {

    }

}