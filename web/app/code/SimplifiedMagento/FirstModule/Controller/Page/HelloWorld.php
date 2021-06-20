<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;
use Magento\Framework\App\Action\Context;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\App\Request\Http;
use SimplifiedMagento\FirstModule\Model\HeavyService;

class HelloWorld extends \Magento\Framework\App\Action\Action
{

    protected $pencilInteface;
    protected $productRepository;
//    protected $pencilFactory;
    protected $productFactory;
    protected $_eventManager;
    protected $http;
    protected $heavyService;

    public function __construct(Context $context,
                                HeavyService $heavyService,
                                Http $http,
                                ManagerInterface $_eventManager,
                                ProductFactory $productFactory,
//                                PencilFactory $pencilFactory,
                                PencilInterface $pencilInteface, ProductRepositoryInterface $productRepository)
    {
        $this->pencilInteface = $pencilInteface;
        $this->productRepository = $productRepository;
//        $this->pencilFactory = $pencilFactory;
        $this->productFactory = $productFactory;
        $this->_eventManager = $_eventManager;
        $this->http = $http;
        $this->heavyService = $heavyService;
        parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->http->getParam('id', 0);
        if ($id == 1) {
            $this->heavyService->printHeavyServiceMessage();
        }
        else {
            echo "heavyService not used";
        }
    }

}
