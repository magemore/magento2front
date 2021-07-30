<?php


namespace Magemore\Register\Plugin;
use Magento\Customer\Model\CustomerExtractor;
use Magento\Framework\App\RequestInterface;

class CustomerExtractorPlugin
{
    public function aroundExtract(CustomerExtractor $subject, \Closure $proceed, $formCode, RequestInterface $request, array $attributeValues = [])
    {
        echo $formCode;
        exit();
        return $result = $proceed($formCode, $request, $attributeValues);
    }
}
