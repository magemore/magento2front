<?php


namespace SimplifiedMagento\Database\Model;

use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember\CollectionFactory;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{

    private $collectionFactory;
    private $affiliateMemberFactory;

    public function __construct(CollectionFactory $collectionFactory, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
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
    public function getAffiliateMember($id)
    {
        $member = $this->affiliateMemberFactory->create();
        return $member->load($id);
    }
}
