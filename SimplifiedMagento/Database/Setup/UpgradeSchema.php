<?php


namespace SimplifiedMagento\Database\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Db\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(),'0.0.2','<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('affiliate_member'),
                'phone_number',
                ['nullable'=>false,'type' =>Table::TYPE_TEXT, 'comment'=> 'PHONE NUMBER OF MEMBER']
            );
        }

        $setup->endSetup();
    }
}
