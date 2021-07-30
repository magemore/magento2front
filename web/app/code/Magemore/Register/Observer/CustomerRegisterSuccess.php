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
        $mail->setBody('This is the text of the email.');
        $mail->setFrom('Freeaqingme@example.org', "Sender's name");
        $mail->addTo('Matthew@example.com', 'Name of recipient');
        $mail->setSubject('TestSubject');

        $transport = new Mail\Transport\Sendmail();
        $transport->send($mail);
    }
}
