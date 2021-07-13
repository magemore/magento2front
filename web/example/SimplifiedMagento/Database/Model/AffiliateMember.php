<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Api\DataObjectHelper;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterfaceFactory;

class AffiliateMember extends \Magento\Framework\Model\AbstractModel
{

    protected $affiliatememberDataFactory;

    protected $dataObjectHelper;

    protected $_eventPrefix = 'simplifiedmagento_database_affiliatemember';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param AffiliateMemberInterfaceFactory $affiliatememberDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember $resource
     * @param \SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        AffiliateMemberInterfaceFactory $affiliatememberDataFactory,
        DataObjectHelper $dataObjectHelper,
        \SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember $resource,
        \SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\Collection $resourceCollection,
        array $data = []
    ) {
        $this->affiliatememberDataFactory = $affiliatememberDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve affiliatemember model with affiliatemember data
     * @return AffiliateMemberInterface
     */
    public function getDataModel()
    {
        $affiliatememberData = $this->getData();
        
        $affiliatememberDataObject = $this->affiliatememberDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $affiliatememberDataObject,
            $affiliatememberData,
            AffiliateMemberInterface::class
        );
        
        return $affiliatememberDataObject;
    }
}

