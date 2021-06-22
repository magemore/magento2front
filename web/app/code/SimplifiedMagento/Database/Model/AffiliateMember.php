<?php


namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractModel;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember;

class AffiliateMember extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(AffiliateMember::class);
    }
}
