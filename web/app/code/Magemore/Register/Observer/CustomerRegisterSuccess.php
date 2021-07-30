<?php


namespace Magemore\Register\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Laminas\Mail;

class CustomerRegisterSuccess implements ObserverInterface
{



    public function execute(Observer $observer)
    {
        $customer = $observer->getCustomer();
        $this->log($customer);
        $this->sendMail($customer);
    }

    private function log($customer) {
        $str = 'First Name: '.$customer->getFirstname();
        $str .= '; Last Name: '.$customer->getLastname();
        $str .= '; Email: '.$customer->getEmail();
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/register.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info($str);
    }

    private function sendMail($customer) {
        $mail = new Mail\Message();

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $scopeConfig = $objectManager->create('\Magento\Framework\App\Config\ScopeConfigInterface');

        $sentFromName = $scopeConfig->getValue('trans_email/ident_general/name',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);;
        $sentFromEmail = $scopeConfig->getValue('trans_email/ident_general/email',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);;

        $sentToEmail = $scopeConfig->getValue('trans_email/ident_support/email',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $sentToName = $scopeConfig->getValue('trans_email/ident_support/name',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);


        $mail->setBody('This is the text of the email.');
        $mail->setFrom($sentFromEmail, $sentFromName);
        $mail->addTo($sentToEmail, $sentToName);
        $mail->setSubject('New Customer Account');

        $transport = new Mail\Transport\Sendmail();
        $transport->send($mail);
    }
}
