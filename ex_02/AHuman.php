<?php

namespace Ex02;

abstract class AHuman
{
    private $name;
    private $level = 1;
    private $HP = 100;
    private $job = "Villageois";

    public function __construct($name)
    {
        $this->name = $name;
        echo $name . ": Hello, my name is " . $name . ".\n";
    }

    public function getName()
    {
        echo $this->name;
    }

    public function getLevel()
    {
        echo $this->level;
    }

    public function getHP()
    {
        echo $this->HP;
    }

    abstract protected function getJob();

    public function printOut()
    {
        print $this->getJob() . "\n";
    }
}
