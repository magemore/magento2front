<?php


namespace SimplifiedMagento\Database\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface AffiliateMemberSearchResultsInterface extends SearchResultsInterface
{

    /**
     * @return \Magento\Framework\Api\ExtensibleDataInterface[]
     */
    public function getItems();

    /**
     * @param array $items
     * @return AffiliateMemberSearchResultsInterface
     */
    public function setItems(array $items);
}
