<?php


namespace SimplifiedMagento\Database\Model\Resource;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class AffiliateMember extends AbstractDb
{
    public function _construct()
    {
        $this->_init('affiliate_member', 'entity_id');
    }
}
