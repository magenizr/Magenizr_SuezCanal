<?php
/**
 * Magenizr SuezCanal
 *
 * @category    Magenizr
 * @package     Magenizr_SuezCanal
 * @copyright   Copyright (c) 2021 Magenizr (https://www.magenizr.com)
 * @license     https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\SuezCanal\Block;

/**
 * Class Notification
 *
 * @package Magenizr\SuezCanal\Block
 */
class Notification extends \Magento\Framework\View\Element\Template
{
    /**
     * Notification constructor.
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magenizr\SuezCanal\Helper\Data $helper
     * @param \Zend_Filter_Interface $templateProcessor
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magenizr\SuezCanal\Helper\Data $helper,
        \Zend_Filter_Interface $templateProcessor,
        array $data = []
    ) {
        $this->helper = $helper;
        $this->templateProcessor = $templateProcessor;

        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function getClass() {
        return $this->getHelper()->getConfig('general/style');

    }

    /**
     * @return mixed
     */
    public function getContent() {
        return $this->getHelper()->getConfig('general/notification');
    }

    /**
     * @return Magenizr\SuezCanal\Helper
     */
    public function getHelper() {
        return $this->helper;
    }

    /**
     * @param $string
     * @return mixed
     */
    public function filterOutputHtml($string)
    {
        return $this->templateProcessor->filter($string);
    }
}
