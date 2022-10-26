<?php
declare(strict_types=1);
/**
 * Magenizr SuezCanal
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 - 2022 Magenizr (https://www.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\SuezCanal\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Style implements OptionSourceInterface
{
    /**
     * Return array for option
     *
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
