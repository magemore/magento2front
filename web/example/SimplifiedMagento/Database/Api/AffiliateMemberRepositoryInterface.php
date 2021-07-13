<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace SimplifiedMagento\Database\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface AffiliateMemberRepositoryInterface
{

    /**
     * Save AffiliateMember
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $affiliateMember
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $affiliateMember
    );

    /**
     * Retrieve AffiliateMember
     * @param string $affiliatememberId
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($affiliatememberId);

    /**
     * Retrieve AffiliateMember matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete AffiliateMember
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $affiliateMember
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $affiliateMember
    );

    /**
     * Delete AffiliateMember by ID
     * @param string $affiliatememberId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($affiliatememberId);
}

