<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;
use Magento\Framework\App\Action\Context;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{

    protected $pencilInteface;
    protected $productRepository;

    public function __construct(Context $context, PencilInterface $pencilInteface, ProductRepositoryInterface $productRepository)
    {
        $this->pencilInteface = $pencilInteface;
        $this->productRepository = $productRepository;
        parent::__construct($context);
    }

    public function execute()
    {
//        echo $this->pencilInteface->getPencilType();
//        echo get_class($this->productRepository);
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $students = $objectManager->create('SimplifiedMagento\FirstModule\Model\Student');
        echo '<pre>';
        var_dump($students);
        echo '</pre>';

    }

}
