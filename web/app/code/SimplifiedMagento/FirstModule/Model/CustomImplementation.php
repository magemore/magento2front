<?php


namespace SimplifiedMagento\FirstModule\Model;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

class CustomImplementation implements ProductRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function save(ProductInterface $product, $saveOptions = false)
    {
        // TODO: Implement save() method.
    }

    /**
     * @inheritDoc
     */
    public function get($sku, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement get() method.
    }

    /**
     * @inheritDoc
     */
    public function getById($productId, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement getById() method.
    }

    /**
     * @inheritDoc
     */
    public function delete(ProductInterface $product)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @inheritDoc
     */
    public function deleteById($sku)
    {
        // TODO: Implement deleteById() method.
    }

    /**
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement getList() method.
    }
}
