<?php


namespace SimplifiedMagento\Database\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;

class Index extends Action
{
    protected $affiliateMemberFactory;
    protected $affiliateMemberCollectionFactory;

    public function __construct(Context $context,
                                AffiliateMemberFactory $affiliateMemberFactory,
                                SimplifiedMagento\Database\Model\Resource\AffiliateMember\collectionFactory $affiliateMemberCollectionFactory
    )
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->$affiliateMemberCollectionFactory = $affiliateMemberCollectionFactory;
        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $collection = $this->affiliateMemberCollectionFactory->create();

//        $collection = $this->_objectManager->create('\SimplifiedMagento\Database\Model\Resource\AffiliateMember\Collection');
//        $affiliateMember = $this->affiliateMemberFactory->create();
//        $collection = $affiliateMember->getCollection();
//        foreach ($collection as $item) {
//            print_r($item->getData());
//            echo '<br>';
//        }

//        $member = $affiliateMember->load(4);
//        $member->delete();

//        $affiliateMember->addData(['name'=>'Rand', 'address'=>'a new address', 'status'=>true, 'phone_number' => '971809876']);
//        $affiliateMember->save();

//        $member = $affiliateMember->load(1);
//        $member->setAddress('new address');
//        $member->save();
//        var_dump($member->getData());
    }
}
