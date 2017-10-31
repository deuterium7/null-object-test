<?php

namespace AlexanderZabornyi\NullObjectTest;

class PrintLogger implements LoggerInterface
{
    /**
     * Вывести в лог
     *
     * @param string $str
     */
    public function log(string $str)
    {
        echo $str;
    }
}