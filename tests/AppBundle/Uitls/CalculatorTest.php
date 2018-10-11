<?php

namespace Tests\AppBundle\Utils;

use PHPUnit\Framework\TestCase;

use AppBundle\Utils\Calculator;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = null;
    }

    public function testSum()
    {
        $result = $this->calculator->sum(5, 5);

        $this->assertEquals(10, $result);
    }

    public function testMultiply()
    {
        $result = $this->calculator->mutiply(2, 5);

        $this->assertEquals(10, $result);
    }

    public function testSub()
    {
        $this->assertEquals(0, $this->calculator->sub(5, 5));
    }
}