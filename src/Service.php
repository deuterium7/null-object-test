<?php

namespace AlexanderZabornyi\NullObjectTest;

class Service
{
    private $logger;

    /**
     * Service constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Отправить в лог
     */
    public function doSomething()
    {
        $this->logger->log('We are in ' . __METHOD__);
    }

}