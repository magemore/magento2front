<?php


namespace SimplifiedMagento\FirstModule\Plugin;


class PluginSolution
{
//    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
//    {
//        return "Before Plugin " . $name;
//    }

//    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
//        return $result . " After Plugin";
//    }

    public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
    {
        echo "before proceed ";
        $name = proceed();
        echo $name;
        echo " after proceed";
        return $name;
    }
}
