<?php

namespace Wm21w\Sage\Api;

interface CustomRepositoryInterface
{
    /**
     * Create custom Api.
     *
     * @param \Wm21w\Sage\Api\Data\CustomDataInterface $entity
     * @return \Wm21w\Sage\Api\Data\CustomDataInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function create(
        \Wm21w\Sage\Api\Data\CustomDataInterface $entity
    );

    /**
     * Update custom Api.
     *
     * @param \Wm21w\Sage\Api\Data\CustomDataInterface $entity
     * @return \Wm21w\Sage\Api\Data\CustomDataInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function update(
        \Wm21w\Sage\Api\Data\CustomDataInterface $entity
    );

    /**
     * Get custom Api.
     *
     * @param int $id
     * @return \Wm21w\Sage\Api\Data\CustomDataInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($id
    );

    /**
     * Delete custom Api.
     *
     * @param int $id
     * @return bool Will returned True if deleted
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete($id
    );
}