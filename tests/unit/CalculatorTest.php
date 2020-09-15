<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /** @test */
    public function single_operation()
    {
        $addition = new App\Calculator\Addition;
        $addition->setOperands([5, 10]);

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperation($addition);

        $this->assertCount(1, $calculator->getOperations());
    }

    /** @test */
    public function multiple_operations()
    {
        $addition1 = new App\Calculator\Addition;
        $addition1->setOperands([5, 10]);

        $addition2 = new App\Calculator\Addition;
        $addition2->setOperands([15, 20]);

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperations([$addition1, $addition2]);

        $this->assertCount(2, $calculator->getOperations());
    }

    /** @test */
    public function ignore_if_not_instance_of_operations()
    {
        $addition = new App\Calculator\Addition;
        $addition->setOperands([5, 10]);

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperations([$addition, 'book', 'person']);

        $this->assertCount(1, $calculator->getOperations());
    }

    /** @test */
    public function can_calculate_result()
    {
        $addition = new App\Calculator\Addition;
        $addition->setOperands([5, 10]);

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperation($addition);

        $this->assertEquals(15, $calculator->calculate());
    }

    /** @test */
    public function calculate_multiple_results()
    {
        $addition = new App\Calculator\Addition;
        $addition->setOperands([5, 10]);

        $division = new App\Calculator\Division;
        $division->setOperands([100, 2]);

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperations([$addition, $division]);

        $this->assertIsArray($calculator->calculate());
        $this->assertEquals(15, $calculator->calculate()[0]);
        $this->assertEquals(50, $calculator->calculate()[1]);
    }
}
