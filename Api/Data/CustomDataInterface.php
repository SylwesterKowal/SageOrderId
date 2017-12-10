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

    const CUSTOMER_ID = 'customer_id';
    const PRODUCT_ID = 'product_id';

    const SAGE_ORDER_ID = 'sage_order_id';
    /**#@-*/

    /**
     * Get Id.
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set Id.
     *
     * @param int $id
     * @return $this
     */
    public function setId($id = null);

    /**
     * Get Customer Id.
     *
     * @return int|null
     */
    public function getCustomerId();
    public function getSageOrderId();

    /**
     * Set Customer Id.
     *
     * @param int $customerId
     * @return $this
     */
    public function setCustomerId($customerId = null);
    public function setSageOrderId($customerId = null);

    /**
     * Get Product Id.
     *
     * @return int|null
     */
    public function getProductId();

    /**
     * Set Product Id.
     *
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId = null);
}