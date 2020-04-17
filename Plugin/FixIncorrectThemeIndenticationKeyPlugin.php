<?php
declare(strict_types=1);

namespace Yireo\VueStorefrontFixes\Plugin;

use Magento\ConfigurableSampleData\Setup\RecurringData;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Store\Api\Data\StoreInterface;

/**
 * Class FixIncorrectThemeIndenticationKeyPlugin
 * @package Yireo\VueStorefrontFixes\Plugin
 */
class FixIncorrectThemeIndenticationKeyPlugin
{
    /**
     * @param RecurringData $subject
     * @param callable $proceed
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return string
     */
    public function aroundInstall(RecurringData $subject, callable $proceed, ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        // Skip original code entirely
        return;
    }
}
