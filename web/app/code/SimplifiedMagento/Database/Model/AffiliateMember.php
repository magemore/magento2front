<?php


namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractModel;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember as AffiliateMemberResource;

class AffiliateMember extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(AffiliateMemberResource::class);
    }
}
