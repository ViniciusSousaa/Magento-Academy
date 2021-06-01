<?php
declare(strict_types=1);

namespace Webjump\ControllerWorld\PageController;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{

    private $pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
		return parent::__construct($context);
    }

    public function execute()
    {
        // Get the params that were passed from our Router
        
        return $this->pageFactory->create();
    }
}
