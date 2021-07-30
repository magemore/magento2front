<?php


namespace Magemore\Register\Plugin;
use Magento\Customer\Model\CustomerExtractor;
use Magento\Framework\App\RequestInterface;

class CustomerExtractorPlugin
{
    public function aroundExtract(CustomerExtractor $subject, \Closure $proceed, $formCode, RequestInterface $request, array $attributeValues = [])
    {
        //
        /** @var Magento\Customer\Model\Data\Customer $result */
        $result = $proceed($formCode, $request, $attributeValues);
        $firstname = trim($result->getFirstname());
        if ($formCode == 'customer_account_create') {
            $result->setFirstname($firstname);
        }
        return $result;
    }
}
