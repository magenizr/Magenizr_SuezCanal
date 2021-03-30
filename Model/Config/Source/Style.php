<?php
/**
 * Magenizr SuezCanal
 *
 * @category    Magenizr
 * @package     Magenizr_SuezCanal
 * @copyright   Copyright (c) 2021 Magenizr (https://www.magenizr.com)
 * @license     https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\SuezCanal\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Style
 *
 * @package Magenizr\SuezCanal\Model\Config\Source
 */
class Style implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray() : array
    {
        return [
            ['value' => 'primary', 'label' => __('Primary')],
            ['value' => 'secondary', 'label' => __('Secondary')],
            ['value' => 'success', 'label' => __('Success')],
            ['value' => 'danger', 'label' => __('Danger')],
            ['value' => 'warning', 'label' => __('Warning')],
            ['value' => 'info', 'label' => __('Info')],
            ['value' => 'light', 'label' => __('Light')],
            ['value' => 'dark', 'label' => __('Dark')],
        ];
    }
}
