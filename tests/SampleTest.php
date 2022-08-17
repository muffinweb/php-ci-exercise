<?php

//Autoload
require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testIfItCanTestProperly(){
        $expected = 2;
        $this->assertEquals((1+2), $expected);
    }
}

?>