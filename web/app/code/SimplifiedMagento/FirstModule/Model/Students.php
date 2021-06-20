<?php


namespace SimplifiedMagento\FirstModule\Model;


class Students
{
    private $name;
    private $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
