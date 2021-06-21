<?php


namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\Action\Action;

class CustomNoRoute extends Action
{
    public function execute()
    {
        echo "This is our custom 404 page";
    }
}
