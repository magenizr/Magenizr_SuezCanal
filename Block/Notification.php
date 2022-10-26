<?php
declare(strict_types=1);
/**
 * Magenizr SuezCanal
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 - 2022 Magenizr (https://www.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\SuezCanal\Block;

class Notification extends \Magento\Framework\View\Element\Template
{
    /**
     * Init Constructor
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
     * Return CSS class
     *
     * @return mixed
     */
    public function getClass()
    {
        return $this->getHelper()->getConfig('general/style');
    }

    /**
     * Return content for notification
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->getHelper()->getConfig('general/notification');
    }

    /**
     * Run string through a filter
     *
     * @param string $content
     * @return mixed
     */
    public function filterOutputHtml($content)
    {
        return $this->templateProcessor->filter($content);
    }

    /**
     * Return Helper
     *
     * @return Magenizr\SuezCanal\Helper
     */
    public function getHelper()
    {
        return $this->helper;
    }
}
