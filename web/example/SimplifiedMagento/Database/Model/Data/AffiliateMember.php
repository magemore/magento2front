<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace SimplifiedMagento\Database\Model\Data;

use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;

class AffiliateMember extends \Magento\Framework\Api\AbstractExtensibleObject implements AffiliateMemberInterface
{

    /**
     * Get affiliatemember_id
     * @return string|null
     */
    public function getAffiliatememberId()
    {
        return $this->_get(self::AFFILIATEMEMBER_ID);
    }

    /**
     * Set affiliatemember_id
     * @param string $affiliatememberId
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAffiliatememberId($affiliatememberId)
    {
        return $this->setData(self::AFFILIATEMEMBER_ID, $affiliatememberId);
    }

    /**
     * Get entity_id
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->_get(self::ENTITY_ID);
    }

    /**
     * Set entity_id
     * @param string $entityId
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get name
     * @return string|null
     */
    public function getName()
    {
        return $this->_get(self::NAME);
    }

    /**
     * Set name
     * @param string $name
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get address
     * @return string|null
     */
    public function getAddress()
    {
        return $this->_get(self::ADDRESS);
    }

    /**
     * Set address
     * @param string $address
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }
}

