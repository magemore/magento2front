<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;
use Magento\Framework\App\Action\Context;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;

class HelloWorld extends \Magento\Framework\App\Action\Action
{

    protected $pencilInteface;
    protected $productRepository;
    protected $pencilFactory;
    protected $productFactory;

    public function __construct(Context $context,
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
//        $pencil = $this->pencilFactory->create(array("name"=>"Bob", "school"=>"International College"));
//        var_dump($pencil);

        $product = $this->productFactory->create()->load(1);
        $product->setName("Iphone 6");
        $productName = $product->getName();
        echo "<pre>";
        var_dump($productName);
        echo "</pre>";

    }

}
