<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $user;

    protected function setUp(): void
    {
        // var_dump('1');
        $this->user = new \App\Models\User;
    }

    /** @test */
    public function get_first_name()
    {

        $this->user->setFirstName('Hakim');

        $this->assertEquals($this->user->getFirstName(), 'Hakim');
    }

    public function testGetLastname()
    {
        $this->user->setLastName('Sembiring');

        $this->assertEquals($this->user->getLastName(), 'Sembiring');
    }

    public function testGetFullName()
    {
        $this->user->setFirstName('Hakim');
        $this->user->setLastName('Sembiring');

        $this->assertEquals($this->user->getFullName(), 'Hakim Sembiring');
    }
}
