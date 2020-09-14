<?php

use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    /** @test */
    public function divide_operands()
    {
        $divison = new \App\Calculator\Division;
        $divison->setOperands([100, 2]);

        $this->assertEquals(50, $divison->calculate());
    }

    /** @test */
    public function no_operands_exception()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);

        $addition = new \App\Calculator\Addition;
        $addition->calculate();
    }

   /** @test */
   public function remove_division_by_zero()
   {
       $divison = new \App\Calculator\Division;
       $divison->setOperands([10,0,0,5,0]);

       $this->assertEquals(2, $divison->calculate());
   }
}
