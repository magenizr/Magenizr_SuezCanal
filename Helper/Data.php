<?php
/**
 * Magenizr SuezCanal
 *
 * @category    Magenizr
 * @package     Magenizr_SuezCanal
 * @copyright   Copyright (c) 2021 Magenizr (https://www.magenizr.com)
 * @license     https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\SuezCanal\Helper;

/**
 * Class Data
 * @package Magenizr\SuezCanal\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var string
     */
    private $tab = 'magenizr_suezcanal';

    /**
     * @var \Magento\Framework\App\RequestInterface
     */
    private $request;

    /**
     * Data constructor.
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Get module configuration values from core_config_data
     *
     * @param $setting
     * @return mixed
     */
    public function getConfig($setting)
    {
        return $this->scopeConfig->getValue(
            $this->tab . '/' . $setting,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Check if module is enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        if ($this->getConfig('general/status')) {
            return true;
        }

        return false;
    }
}
