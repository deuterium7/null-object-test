<?php

namespace AlexanderZabornyi\NullObjectTest;

class NullLogger implements LoggerInterface
{
    /**
     * Заглушка
     *
     * @param string $str
     */
    public function log(string $str)
    {
    }
}