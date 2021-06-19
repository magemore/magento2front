<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;
use Magento\Framework\App\Action\Context;
use SimplifiedMagento\FirstModule\NotMagento\PencilInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{


    public function __construct(Context $context, PencilInterface $pencil)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        echo "Hello World";
    }
}
