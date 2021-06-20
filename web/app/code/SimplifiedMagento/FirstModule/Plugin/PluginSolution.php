<?php


namespace SimplifiedMagento\FirstModule\Plugin;


class PluginSolution
{

    public function beforeExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "before execute sort order 10";
    }

    public function afterExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "after execute sort order 10";
    }


//    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
//    {
//        return "Before Plugin " . $name;
//    }

//    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
//        return $result . " After Plugin";
//    }

//    public function aroundGetIdBySku(\Magento\Catalog\Model\Product $subject, callable $proceed, $sku)
//    {
//        echo "before proceed ";
//        $id = $proceed($sku);
//        echo $id;
//        echo " after proceed";
//        return $id;
//    }
//
//    public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
//    {
//        echo "before proceed ";
//        $name = $proceed();
//        echo $name;
//        echo " after proceed";
//        return $name;
//    }
}
