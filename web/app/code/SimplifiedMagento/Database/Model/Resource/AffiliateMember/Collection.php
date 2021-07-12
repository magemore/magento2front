<?php


namespace SimplifiedMagento\Database\Model\Resource\AffiliateMember;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use SimplifiedMagento\Database\Model\AffiliateMember;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember as AffiliateMemberResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init(AffiliateMember::class, AffiliateMemberResource::class);
    }
}
