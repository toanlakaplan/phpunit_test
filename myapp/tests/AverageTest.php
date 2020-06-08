<?php

use drmonkeyninja\Average;
use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase
{
    protected $Average; 
    //asdfa asdfasf adsfas asdf  asdf asdf asdf asdf asdf 23 asd
    public function setUp()
    {
      //a asdfas asfjkl
        $this->Average = new Average();
    }

    public function testCalculationOfMean()
    {
        // H
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    public function testCalculationOfMedian()
    {
        //abcdds sdfsfds
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }

    public function testCalculationOfMedian2()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }
}
