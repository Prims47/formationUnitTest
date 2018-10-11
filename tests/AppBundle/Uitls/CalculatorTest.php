<?php

namespace Tests\AppBundle\Utils;

use PHPUnit\Framework\TestCase;

use AppBundle\Utils\Calculator;

class CalculatorTest extends TestCase
{
    public function testSum()
    {
        $calculator = new Calculator();
        $result = $calculator->sum(5, 5);

        $this->assertEquals(10, $result);
    }
}