<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testSomethingIsTrue()
    {
        $this->assertTrue(true);
    }

    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function testValue():void
    {
        $addition = app('App\Http\Controllers\OperationsController')->add(1,2);
        $this->assertEquals(3,$addition);
    }

    

}
