<?php


namespace SimplifiedMagento\Database\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember;

class Index extends Action
{
    protected AffiliateMemberFactory $affiliateMemberFactory;

    public function __construct(Context $context,
                                AffiliateMemberFactory $affiliateMemberFactory
    )
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $affiliateMember = $this->affiliateMemberFactory->create();

        $affiliateMember->addData(['name'=>'Rand','address'=>'a new address','status'=>true,'phone_number'=>'976412312']);
        $affiliateMember->save();
        echo 'add new member Rand';

//        $member = $affiliateMember->load(2);
//        $member->setAddress('No 11, Dubai');
//        $member->save();

//        var_dump($member->getData());

//        $affiliateMember = $this->affiliateMemberFactory->create();
//        $collection = $affiliateMember->getCollection();
//        foreach ($collection as $item) {
//            print_r($item->getData());
//            echo '<br>';
//        }

    }
}
