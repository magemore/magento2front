<?php


namespace Magemore\Register\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class CustomerRegisterSuccess implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $customer = $observer->getCustomer();
        $this->log($customer);
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
}
