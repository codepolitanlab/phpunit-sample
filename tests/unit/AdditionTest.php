<?php

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    /** @test */
    public function add_operands()
    {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands([5, 15]);

        $this->assertEquals(20, $addition->calculate());
    }

    /** @test */
    public function no_operands_exception()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);

        $addition = new \App\Calculator\Addition;
        $addition->calculate();
    }
}
