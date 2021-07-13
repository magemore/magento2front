<?php


namespace SimplifiedMagento\Database\Model;

use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember\CollectionFactory;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{

    private $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    /**
    * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface[]
    */
    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
