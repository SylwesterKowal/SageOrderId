<?php

namespace Wm21w\Sage\Api\Data;

/**
 * Custom Data interface.
 * @api
 */
interface CustomDataInterface extends \Magento\Framework\Api\CustomAttributesDataInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */
    const ID = 'id';
    const SAGE_ORDER_ID = 'sage_order_id';

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param null $id
     * @return mixed
     */
    public function setId($id = null);

    /**
     * @return mixed
     */
    public function getSageOrderId();

    /**
     * @param null $SageOrderId
     * @return mixed
     */
    public function setSageOrderId($SageOrderId = null);

}