<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;
use Magento\Framework\App\Action\Context;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{

    protected $pencilInteface;
    protected $productRepository;
//    protected $pencilFactory;
    protected $productFactory;

    public function __construct(Context $context,
                                ManagerInterface $_eventManager,
                                ProductFactory $productFactory,
//                                PencilFactory $pencilFactory,
                                PencilInterface $pencilInteface, ProductRepositoryInterface $productRepository)
    {
        $this->pencilInteface = $pencilInteface;
        $this->productRepository = $productRepository;
//        $this->pencilFactory = $pencilFactory;
        $this->productFactory = $productFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $message = new \Magento\Framework\DataObject(array("greeting"=>"Good afternoon"));
        echo $message->getGreeting();
    }

}
