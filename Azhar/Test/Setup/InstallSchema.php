<?php 

namespace Azhar\Test\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        $table = $installer->getConnection()
            ->newTable($installer->getTable('azhar'))
            ->addColumn(
                'entity_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'ID'
            )
            ->addColumn('name', Table::TYPE_TEXT, 100, ['nullable' => false], 'Affiliate member name')
            ->addColumn('image', Table::TYPE_TEXT, 100, ['nullable' => true,'default' => null], 'Profile image')
            ->addColumn('creation_time', Table::TYPE_TIMESTAMP, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_TIMESTAMP, null, ['nullable' => false], 'Update Time')
            ->addColumn('status', Table::TYPE_SMALLINT, null, ['nullable' => false, 'default' => '0'], 'Record status')
            ->setComment('Affiliate Members');

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }

}