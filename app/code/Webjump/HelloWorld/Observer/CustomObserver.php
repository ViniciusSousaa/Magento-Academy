<?php

namespace Webjump\HelloWorld\Observer;

use Dotdigitalgroup\Email\Model\Config\Configuration\Publicdatafields;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class CustomObserver 
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $this->logger->info($observer->getEvent()->getName());
    }
}

   
