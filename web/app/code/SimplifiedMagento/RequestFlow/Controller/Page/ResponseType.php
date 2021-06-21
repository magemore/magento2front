<?php


namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\RawFactory;

class ResponseType extends Action
{

    protected $pageFactory;
    protected $jsonFactory;
    protected $rawFactory;

    public function __construct(Context $context, PageFactory $pageFactory, JsonFactory $jsonFactory, RawFactory $rawFactory)
    {
        $this->pageFactory = $pageFactory;
        $this->jsonFactory = $jsonFactory;
        $this->rawFactory = $rawFactory;
        parent::__construct($context);
    }

    public function execute()
    {
//        return $this->pageFactory->create();
//        return $this->jsonFactory->create()->setData(['key'=>'value','key2'=>['one','two']]);
        $result = $this->rawFactory->setContents('Hello World');
        return $result;
    }

}
