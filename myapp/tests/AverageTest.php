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
        // test ad comemnt
        $numbers = [3, 7, 6, 1];
        $this->assertEquals(4.5, $this->Average->median($numbers));
    }

    public function testAdd()
    {
        // test ad comemnt
        $this->assertEquals(10, $this->Average->add(5, 5));
    }

//    public function testSubtract()
//    {
//        // test ad comemnt
//        $this->assertEquals(0, $this->Average->subtract(5, 5));
//    }
}
