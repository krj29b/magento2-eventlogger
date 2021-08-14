<?php

namespace JKrawczyk\EventLogger\Plugin;

use JKrawczyk\EventLogger\Logger\Logger;


class EventLogger
{
    protected $logger;

    public function __construct(
        Logger $logger
    )
    {
        $this->logger = $logger;
    }

    public function beforeDispatch(\Magento\Framework\Event\Manager $subject, $eventName, array $data = [])
    {
        $this->logger->log(200,'EVENT:' . mb_strtolower($eventName));
        return null;
    }
}
