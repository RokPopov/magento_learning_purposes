<?php

namespace Rok\Learning\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\ActionInterface;

/**
 * Class Index
 * @package Techflarestudio\Routes\Controller\Index
 */
class Index implements ActionInterface
{
    protected $resultPageFactory;

    public function __construct(
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}