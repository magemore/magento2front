<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\ExtensibleDataObjectConverter;
use Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;
use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterfaceFactory;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberSearchResultsInterfaceFactory;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as ResourceAffiliateMember;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\CollectionFactory as AffiliateMemberCollectionFactory;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{

    protected $dataAffiliateMemberFactory;

    protected $resource;

    protected $extensibleDataObjectConverter;
    protected $searchResultsFactory;

    private $storeManager;

    protected $dataObjectHelper;

    protected $affiliateMemberCollectionFactory;

    protected $dataObjectProcessor;

    protected $affiliateMemberFactory;

    protected $extensionAttributesJoinProcessor;

    private $collectionProcessor;


    /**
     * @param ResourceAffiliateMember $resource
     * @param AffiliateMemberFactory $affiliateMemberFactory
     * @param AffiliateMemberInterfaceFactory $dataAffiliateMemberFactory
     * @param AffiliateMemberCollectionFactory $affiliateMemberCollectionFactory
     * @param AffiliateMemberSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     * @param CollectionProcessorInterface $collectionProcessor
     * @param JoinProcessorInterface $extensionAttributesJoinProcessor
     * @param ExtensibleDataObjectConverter $extensibleDataObjectConverter
     */
    public function __construct(
        ResourceAffiliateMember $resource,
        AffiliateMemberFactory $affiliateMemberFactory,
        AffiliateMemberInterfaceFactory $dataAffiliateMemberFactory,
        AffiliateMemberCollectionFactory $affiliateMemberCollectionFactory,
        AffiliateMemberSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->affiliateMemberCollectionFactory = $affiliateMemberCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataAffiliateMemberFactory = $dataAffiliateMemberFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
        $this->collectionProcessor = $collectionProcessor;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
        $this->extensibleDataObjectConverter = $extensibleDataObjectConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $affiliateMember
    ) {
        /* if (empty($affiliateMember->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $affiliateMember->setStoreId($storeId);
        } */
        
        $affiliateMemberData = $this->extensibleDataObjectConverter->toNestedArray(
            $affiliateMember,
            [],
            \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface::class
        );
        
        $affiliateMemberModel = $this->affiliateMemberFactory->create()->setData($affiliateMemberData);
        
        try {
            $this->resource->save($affiliateMemberModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the affiliateMember: %1',
                $exception->getMessage()
            ));
        }
        return $affiliateMemberModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($affiliateMemberId)
    {
        $affiliateMember = $this->affiliateMemberFactory->create();
        $this->resource->load($affiliateMember, $affiliateMemberId);
        if (!$affiliateMember->getId()) {
            throw new NoSuchEntityException(__('AffiliateMember with id "%1" does not exist.', $affiliateMemberId));
        }
        return $affiliateMember->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->affiliateMemberCollectionFactory->create();
        
        $this->extensionAttributesJoinProcessor->process(
            $collection,
            \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface::class
        );
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model->getDataModel();
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $affiliateMember
    ) {
        try {
            $affiliateMemberModel = $this->affiliateMemberFactory->create();
            $this->resource->load($affiliateMemberModel, $affiliateMember->getAffiliatememberId());
            $this->resource->delete($affiliateMemberModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the AffiliateMember: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($affiliateMemberId)
    {
        return $this->delete($this->get($affiliateMemberId));
    }
}

