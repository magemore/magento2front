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

    public function getId()
    {
        return $this->getData(AffiliateMemberInterface::ID);
    }

    public function getName()
    {
        return $this->getData(AffiliateMemberInterface::NAME);
    }

    public function getStatus()
    {
        return $this->getData(AffiliateMemberInterface::STATUS);
    }

    public function getAddress()
    {
        return $this->getData(AffiliateMemberInterface::ADDRESS);
    }

    public function getPhoneNumber()
    {
        return $this->getData(AffiliateMemberInterface::PHONE_NUMBER);
    }

    public function getCreatedAt()
    {
        return $this->getData(AffiliateMemberInterface::CREATED_AT);
    }

    public function getUpdatedAt()
    {
        return $this->getData(AffiliateMemberInterface::UPDATED_AT);
    }

    public function setName($name)
    {
        $this->setData(AffiliateMemberInterface::NAME, $name);
    }

    public function setStatus($status)
    {
        $this->setData(AffiliateMemberInterface::STATUS, $status);
    }

    public function setAddress($address)
    {
        $this->setData(AffiliateMemberInterface::ADDRESS, $address);
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->setData(AffiliateMemberInterface::PHONE_NUMBER, $phoneNumber);
    }
}
