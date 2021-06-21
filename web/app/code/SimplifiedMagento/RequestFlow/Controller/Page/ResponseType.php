<?php


namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;

class ResponseType extends Action
{

    protected $pageFactory;
    protected $jsonFactory;

    public function __construct(Context $context, PageFactory $pageFactory, JsonFactory $jsonFactory)
    {
        $this->pageFactory = $pageFactory;
        $this->jsonFactory = $jsonFactory;
        parent::__construct($context);
    }

    public function execute()
    {
//        return $this->pageFactory->create();
        return $this->jsonFactory->create()->setData(['key'=>'value']);
    }
}
