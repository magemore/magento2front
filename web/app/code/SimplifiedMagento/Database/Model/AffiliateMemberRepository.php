<?php


namespace SimplifiedMagento\Database\Model;

use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember\CollectionFactory;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;
use SimplifiedMagento\Database\Model\Resource\AffiliateMember;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{

    private $collectionFactory;
    private $affiliateMemberFactory;
    private $affiliateMember;

    public function __construct(CollectionFactory $collectionFactory,
                                AffiliateMemberFactory $affiliateMemberFactory,
                                AffiliateMember $affiliateMember)
    {
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->affiliateMember = $affiliateMember;
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
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function saveAffiliateMember(SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member)
    {
        if ($member->getId() == null) {

        }
    }
}
