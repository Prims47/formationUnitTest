<?php

namespace AppBundle\Utils;

class Calculator
{
    /**
     * @param Int $a
     * @param Int $b
     * 
     * @return Int
     */
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function mutiply($a, $b)
    {
        return $a * $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function div($a, $b)
    {
        return $a / $b;
    }
}