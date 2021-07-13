<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'affiliatemember_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \SimplifiedMagento\Database\Model\AffiliateMember::class,
            \SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember::class
        );
    }
}

