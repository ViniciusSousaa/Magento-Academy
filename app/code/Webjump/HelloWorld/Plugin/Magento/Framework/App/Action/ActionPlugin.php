<?php

namespace Webjump\HelloWorld\Plugin\Magento\Framework\App\Action\ActionPlugin;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\RequestInterface;
use Psr\Log\LoggerInterface as PsrLoggerInterface;
use Exception;

class ActionPlugin
{
    private $logger;

    public function __construct(
        PsrLoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function afterDispatch(Action $subject, $result)
    {
        $message = "after ActionDispatch";
        $this->logger->debug($message);

        return $result;
    }

    public function beforeDispatch(Action $subject, RequestInterface $request) {
        $message = "before ActionDispatch";
        $this->logger->debug($message);
    }

    public function aroundDispatch(Action $subject, callable $proceed, ...$args)
    {
        $message = "around ActionDispatch";
        $this->logger->critical($message);
        return $proceed(...$args);
    }
}
