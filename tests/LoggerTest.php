<?php

namespace AlexanderZabornyi\NullObjectTest\Tests;

use AlexanderZabornyi\NullObjectTest\NullLogger;
use AlexanderZabornyi\NullObjectTest\PrintLogger;
use AlexanderZabornyi\NullObjectTest\Service;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testPrintLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in AlexanderZabornyi\NullObjectTest\Service::doSomething');
        $service->doSomething();
    }
}