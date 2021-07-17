<?php


namespace SimplifiedMagento\RequestFlow\Controller\Page;

use \Magento\Framework\App\Router\NoRouteHandlerInterface;

class CustomNoRouteHandler implements NoRouteHandlerInterface
{

    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $request->setRouteName('noroutefound')->setControllerName('page')->setActionName('customnoroute');
        return true;
    }
}
