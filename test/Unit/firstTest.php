<?php
namespace AppTest\Unit;
use PHPUnit\Framework\TestCase;
class firstTest extends TestCase{
    /**
     *  @test
     */
    public function testFirst(){
        $variable = true;
        $this->assertTrue($variable);
    }
}