<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetFirstName()
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
}
