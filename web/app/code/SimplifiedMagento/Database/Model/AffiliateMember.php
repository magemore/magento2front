<?php


namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember as AffiliateMemberResource;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;

class AffiliateMember extends AbstractExtensibleModel implements AffiliateMemberInterface
{
    protected function _construct()
    {
        $this->_init(AffiliateMemberResource::class);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(AffiliateMemberInterface::ID);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(AffiliateMemberInterface::NAME);
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->getData(AffiliateMemberInterface::STATUS);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->getData(AffiliateMemberInterface::ADDRESS);
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getData(AffiliateMemberInterface::PHONE_NUMBER);
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(AffiliateMemberInterface::CREATED_AT);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(AffiliateMemberInterface::UPDATED_AT);
    }

    /**
     * @param string $name
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setName($name)
    {
        $this->setData(AffiliateMemberInterface::NAME, $name);
    }

    /**
     * @param bool $status
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setStatus(bool $status): AffiliateMemberInterface
    {
        $this->setData(AffiliateMemberInterface::STATUS, $status);
        return $this;
    }

    /**
     * @param string $address
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAddress($address)
    {
        $this->setData(AffiliateMemberInterface::ADDRESS, $address);
    }

    /**
     * @param string $phoneNumber
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->setData(AffiliateMemberInterface::PHONE_NUMBER, $phoneNumber);
    }

    /**
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setId($id)
    {
        $this->setData(AffiliateMemberInterface::ID, $id);
    }

    /**
     * @param string $phoneNumber
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension
     * @return $this
     */
    public function setExtensionAttributes(\SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension)
    {
        return $this->_setExtensionAttributes($affiliateMemberExtension);
    }
}
