<?php
class Human
{
    private $name;
    private $level = 1;
    private $hp = 100;

    public function __construct($name)
    {
        echo $name . " Hello, my name is " . $name;
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
        echo $this->hp;
    }

    public function mort()
    {

        echo $this->vie <= 0;
    }

    function __destruct()
    {
        echo $this->name . " I regret nothing !";
    }
}

new Human("Chris");
