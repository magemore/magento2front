<?php


namespace SimplifiedMagento\HelloWorld\ViewModel;


use Magento\Framework\View\Element\Block\ArgumentInterface;

class HelloView implements ArgumentInterface
{
    public function getHelloWorld()
    {
        return "This is from custom Block";
    }

    public function helloArray() {
        $array = [
            'good',
            'very good',
            'excellent'
        ];
        return $array;
    }

}
