<?php


namespace SimplifiedMagento\RequestFlow\Controller\Page;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;

class Router implements RouterInterface
{

    public function match(RequestInterface $request)
    {
        // /customer-account-login
        $path = $request->getPathInfo();
    }
}
