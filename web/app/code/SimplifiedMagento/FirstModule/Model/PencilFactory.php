<?php


namespace SimplifiedMagento\FirstModule\Model;


class PencilFactory
{
    private $objectManager;
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager) {
        $this->objectManager = $objectManager;
    }
}
