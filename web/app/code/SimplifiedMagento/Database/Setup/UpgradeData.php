<?php


namespace SimplifiedMagento\Database\Setup;



use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '0.0.3', '<')) {
            $setup->getConnection()->insert(
                $setup->getTable('affiliate_member'),
                ['name'=>'Ade','status'=>true,'address'=>'no 13, Dubai','phone_number'=>'97104047849']
            );
        }

        $setup->endSetup();
    }
}
