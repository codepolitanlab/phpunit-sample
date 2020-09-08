<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function get_first_name()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Hakim');

        $this->assertEquals($user->getFirstName(), 'Hakim');
    }

    public function testGetLastname()
    {
        $user = new \App\Models\User;

        $user->setLastName('Sembiring');

        $this->assertEquals($user->getLastName(), 'Sembiring');
    }

    public function testGetFullName()
    {
        $user = new \App\Models\User;
        $user->setFirstName('Hakim');
        $user->setLastName('Sembiring');

        $this->assertEquals($user->getFullName(), 'Hakim Sembiring');
    }
}
