<?php
namespace Magemore\Register\Controller\Index;

use Zend\Log\Filter\Timestamp;
use Magento\Store\Model\StoreManagerInterface;

class Index extends \Magento\Framework\App\Action\Action
{

    const XML_PATH_EMAIL_RECIPIENT_NAME = 'trans_email/ident_support/name';
    const XML_PATH_EMAIL_RECIPIENT_EMAIL = 'trans_email/ident_support/email';

    protected $_inlineTranslation;
    protected $_transportBuilder;
    protected $_scopeConfig;
    protected $_logLoggerInterface;
    protected $storeManager;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
        )
    {


        parent::__construct($context);


    }

    public function execute()
    {

        echo 123; exit();
        echo $sentToName = $this->_scopeConfig ->getValue('trans_email/ident_general/name',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);;
        // Send Mail
        $this->_inlineTranslation->suspend();
        $sender = [
            'name' => 'Alex',
            'email' => 'alex@magemore.com'
        ];

        $sentToEmail = $this->_scopeConfig ->getValue('trans_email/ident_support/email',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $sentToName = $this->_scopeConfig ->getValue('trans_email/ident_support/name',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        $transport = $this->_transportBuilder
            ->setTemplateIdentifier('customemail_email_template')
            ->setTemplateOptions(
                [
                    'area' => 'frontend',
                    'store' => $this->storeManager->getStore()->getId()
                ]
            )
            ->setTemplateVars([
                'name'  => $sender['name'],
                'email'  => $sender['email']
            ])
            ->setFromByScope($sender)
            ->addTo($sentToEmail,$sentToName)
            //->addTo('owner@example.com','owner')
            ->getTransport();

        $transport->sendMessage();

        $this->_inlineTranslation->resume();
    }
}
