<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;
use Magento\Framework\App\Action\Context;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;

class HelloWorld extends \Magento\Framework\App\Action\Action
{

    protected $pencilInteface;
    protected $productRepository;
    protected $pencilFactory;

    public function __construct(Context $context,
                                PencilFactory $pencilFactory,
                                PencilInterface $pencilInteface, ProductRepositoryInterface $productRepository)
    {
        $this->pencilInteface = $pencilInteface;
        $this->productRepository = $productRepository;
        $this->pencilFactory = $pencilFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $pencil = $this->pencilFactory->create(array("name"=>"Bob", "school"=>"International College"));
        echo "<pre>";
        var_dump($pencil);
        echo "</pre>";

    }

}
