<?php

use drmonkeyninja\Average;
use PHPUnit\Framework\TestCase;

class Average2Test extends TestCase
{
    protected $Average;
    //asdfa asdfasf adsfas asdf  asdf asdf asdf asdf asdf 23 asd
    public function setUp()
    {
        //a asdfas asfjkl
        $this->Average = new Average2();
    }

    public function testCalculationOfMean()
    {
        // H
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean2($numbers));
    }
}
