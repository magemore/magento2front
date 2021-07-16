<?php


namespace SimplifiedMagento\CustomAdmin\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Index extends Action
{
    private $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Context $context)
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        echo $this->scopeConfig->getValue('Firstsection/Firstgroup/FirstField');
    }
}
