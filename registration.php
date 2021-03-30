<?php
/**
 * Magenizr SuezCanal
 *
 * @category    Magenizr
 * @package     Magenizr_SuezCanal
 * @copyright   Copyright (c) 2021 Magenizr (https://www.magenizr.com)
 * @license     https://www.magenizr.com/license Magenizr EULA
 */

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magenizr_SuezCanal',
    isset($file) ? realpath(dirname($file)) : __DIR__
);
