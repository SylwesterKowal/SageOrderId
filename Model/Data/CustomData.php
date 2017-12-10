<?php

namespace Wm21w\Sage\Model\Data;

use \Magento\Framework\Api\AttributeValueFactory;

/**
 * Class Custom Data
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class CustomData extends \Magento\Framework\Api\AbstractExtensibleObject implements
    \Wm21w\Sage\Api\Data\CustomDataInterface
{

    public function getId()
    {
        return $this->_get(self::ID);
    }

    public function setId($id = null)
    {
        return $this->setData(self::ID, $id);
    }


    public function getSageOrderId()
    {
        return $this->_get(self::SAGE_ORDER_ID);
    }


    public function setSageOrderId($sageOrderId = null)
    {
        return $this->setData(self::SAGE_ORDER_ID, $sageOrderId);
    }


}