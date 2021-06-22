<?php


namespace SimplifiedMagento\Database\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;

class Index extends Action
{
    protected $affiliateMemberFactory;

    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
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
        $affiliateMember->addData(['name'=>'Rand', 'address'=>'a new address', 'status'=>true, 'phone_number' => '971809876']);
        $affiliateMember->save();

//        $member = $affiliateMember->load(1);
//        $member->setAddress('new address');
//        $member->save();
//        var_dump($member->getData());
    }
}
