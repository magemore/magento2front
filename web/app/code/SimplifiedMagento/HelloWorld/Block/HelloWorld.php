<?php


namespace SimplifiedMagento\HelloWorld\Block;


use Magento\Framework\View\Element\Template;
use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
    protected $product;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        Template\Context $context, array $data = [])
    {
        $this->product = $productRepository;
        parent::__construct($context, $data);
    }


    public function getProductName()
    {
        $product = $this->product->get('24-MB01');
        return $product->getName();
    }
}
