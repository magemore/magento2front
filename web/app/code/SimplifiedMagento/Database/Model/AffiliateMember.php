<?php


namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractModel;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember as AffiliateMemberResource;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;

class AffiliateMember extends AbstractModel implements AffiliateMemberInterface
{
    protected function _construct()
    {
        $this->_init(AffiliateMemberResource::class);
    }

    public function getName()
    {
        return $this->getData(AffiliateMemberInterface::NAME);
    }

    public function getStatus()
    {
        // TODO: Implement getStatus() method.
    }

    public function getAddress()
    {
        // TODO: Implement getAddress() method.
    }

    public function getPhoneNumber()
    {
        // TODO: Implement getPhoneNumber() method.
    }

    public function getCreatedAt()
    {
        // TODO: Implement getCreatedAt() method.
    }

    public function getUpdatedAt()
    {
        // TODO: Implement getUpdatedAt() method.
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
    }

    public function setStatus($status)
    {
        // TODO: Implement setStatus() method.
    }

    public function setAddress($address)
    {
        // TODO: Implement setAddress() method.
    }

    public function setPhoneNumber($phoneNumber)
    {
        // TODO: Implement setPhoneNumber() method.
    }
}
