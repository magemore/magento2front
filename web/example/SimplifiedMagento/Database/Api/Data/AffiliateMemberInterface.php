<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace SimplifiedMagento\Database\Api\Data;

interface AffiliateMemberInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const ENTITY_ID = 'entity_id';
    const NAME = 'name';
    const AFFILIATEMEMBER_ID = 'affiliatemember_id';
    const ADDRESS = 'address';

    /**
     * Get affiliatemember_id
     * @return string|null
     */
    public function getAffiliatememberId();

    /**
     * Set affiliatemember_id
     * @param string $affiliatememberId
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAffiliatememberId($affiliatememberId);

    /**
     * Get entity_id
     * @return string|null
     */
    public function getEntityId();

    /**
     * Set entity_id
     * @param string $entityId
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setEntityId($entityId);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $extensionAttributes
    );

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setName($name);

    /**
     * Get address
     * @return string|null
     */
    public function getAddress();

    /**
     * Set address
     * @param string $address
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAddress($address);
}

