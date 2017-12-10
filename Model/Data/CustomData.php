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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_get(self::ID);
    }

    /**
     * @param null $id
     * @return mixed
     */
    public function setId($id = null)
    {
        return $this->setData(self::ID, $id);
    }


    /**
     * @return mixed
     */
    public function getSageOrderId()
    {
        return $this->_get(self::SAGE_ORDER_ID);
    }


    /**
     * @param null $sageOrderId
     * @return mixed
     */
    public function setSageOrderId($sageOrderId = null)
    {
        return $this->setData(self::SAGE_ORDER_ID, $sageOrderId);
    }


}