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
    protected $storeManager;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation,
        \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Store\Model\StoreManagerInterface $storeManager
        )
    {

        $this->_inlineTranslation = $inlineTranslation;
        $this->_transportBuilder = $transportBuilder;
        $this->_scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;
        parent::__construct($context);


    }

    public function execute()
    {
        $sentFromName = $this->_scopeConfig ->getValue('trans_email/ident_general/name',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);;
        $sentFromEmail = $this->_scopeConfig ->getValue('trans_email/ident_general/email',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);;
        // Send Mail
        $this->_inlineTranslation->suspend();
        $sender = [
            'name' => $sentFromName,
            'email' => $sentFromEmail
        ];

        $sentToEmail = $this->_scopeConfig ->getValue('trans_email/ident_support/email',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $sentToName = $this->_scopeConfig ->getValue('trans_email/ident_support/name',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        $transport = $this->_transportBuilder
            ->setTemplateIdentifier('magemore_register_email_template')
            ->setTemplateOptions(
                [
                    'area' => 'frontend',
                    'store' => $this->storeManager->getStore()->getId()
                ]
            )
            ->setTemplateVars([
                'name'  => 'Alex',
                'email'  => 'alex@magemore.com'
            ])
            ->setFromByScope($sender)
            ->addTo($sentToEmail,$sentToName)
            ->getTransport();

        $transport->sendMessage();

        $this->_inlineTranslation->resume();
    }
}
