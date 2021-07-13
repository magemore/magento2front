<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace SimplifiedMagento\Database\Api\Data;

interface AffiliateMemberSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get AffiliateMember list.
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface[]
     */
    public function getItems();

    /**
     * Set entity_id list.
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

