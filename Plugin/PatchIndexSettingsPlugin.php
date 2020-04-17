<?php
declare(strict_types=1);

namespace Yireo\VueStorefrontFixes\Plugin;

use Divante\VsbridgeIndexerCore\Index\IndexSettings;
use Magento\Store\Api\Data\StoreInterface;

/**
 * Class PatchIndexSettingsPlugin
 * @package Yireo\VueStorefrontFixes\Plugin
 */
class PatchIndexSettingsPlugin
{
    /**
     * @param IndexSettings $subject
     * @param callable $proceed
     * @param StoreInterface $store
     * @return string
     */
    public function aroundCreateIndexName(IndexSettings $subject, callable $proceed, StoreInterface $store)
    {
        return $subject->getIndexAlias($store);
    }
}
