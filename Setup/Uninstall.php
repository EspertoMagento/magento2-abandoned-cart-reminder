<?php

namespace EspertoMagento\AbandonedCartReminder\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UninstallInterface;

class Uninstall implements UninstallInterface
{
    /**
     * @inheritDoc
     */
    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context): void
    {
        $setup->startSetup();
        $con = $setup->getConnection();
        $table = $setup->getTable('em_abandoned_cart_reminder');
        if ($con->isTableExists($table)) {
            $con->dropTable($table);
        }
        $con->delete($setup->getTable('core_config_data'), "path like 'em_abandoned_configuration%'");
        $con->delete($setup->getTable('ui_bookmark'), "namespace = 'em_abandoned_grid'");
        $con->delete($setup->getTable('cron_schedule'), "job_code = 'em_abandoned_cart_finder'");
        $setup->endSetup();
    }
}
