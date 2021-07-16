<?php


namespace SimplifiedMagento\HelloWorld\Block;


class HelloWorld extends \Magento\Framework\View\Element\Template
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
