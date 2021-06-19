<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;
use Magento\Framework\App\Action\Context;
use SimplifiedMagento\FirstModule\NotMagento\PencilInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{

    protected $pencilInteface;

    public function __construct(Context $context, PencilInterface $pencilInteface)
    {
        $this->pencilInteface = $pencilInteface;
        parent::__construct($context);
    }

    public function execute()
    {
        echo $this->pencilInteface->getPencilType();
    }
}
