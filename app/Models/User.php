<?php

namespace App\Models;

class User  
{
    protected $first_name;
    protected $last_name;

    public function setFirstName($name)
    {
        $this->first_name = $name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($name)
    {
        $this->last_name = $name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }
}
