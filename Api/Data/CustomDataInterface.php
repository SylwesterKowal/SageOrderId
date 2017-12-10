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

    public function getId();

    public function setId($id = null);

    public function getSageOrderId();

    public function setSageOrderId($SageOrderId = null);

}