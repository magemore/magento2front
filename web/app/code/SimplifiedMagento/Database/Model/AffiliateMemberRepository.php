<?php


namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Api\SearchCriteriaInterface;
use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember\CollectionFactory;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberSearchResultsInterfaceFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{

    private $collectionFactory;
    private $affiliateMemberFactory;
    private $affiliateMember;
    private $resultInterfaceFactory;
    private $collectionProcessor;

    public function __construct(CollectionFactory $collectionFactory,
                                AffiliateMemberFactory $affiliateMemberFactory,
                                AffiliateMember $affiliateMember,
                                AffiliateMemberSearchResultsInterfaceFactory $resultInterfaceFactory,
                                CollectionProcessor $collectionProcessor)
    {
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->affiliateMember = $affiliateMember;
        $this->resultInterfaceFactory = $resultInterfaceFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
    * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface[]
    */
    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }

    /**
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function getAffiliateMemberById($id)
    {
        $member = $this->affiliateMemberFactory->create();
        return $member->load($id);
    }

    /**
     * @param int $id
     * @return void
     */
    public function deleteAffiliateMemberById($id) {
        $member = $this->affiliateMemberFactory->create();
        $member->load($id);
        $member->delete();
    }

    /**
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function saveAffiliateMember(\SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member)
    {
        if ($member->getId() == null) {
            $this->affiliateMember->save($member);
            return $member;
        }
        else {
            $newMember = $this->affiliateMemberFactory->create()->load($member->getId());
            foreach ($member->getData() as $key => $value) {
                $newMember->setData($key, $value);
            }
            $this->affiliateMember->save($newMember);
            return $newMember;
        }
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberSearchResultsInterface
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->affiliateMemberFactory->create()->getCollection();
        $this->collectionProcessor->process($searchCriteria, $collection);
        $searchResults = $this->resultInterfaceFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getData());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }
}
