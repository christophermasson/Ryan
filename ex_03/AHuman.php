<?php

include 'IEntity.php';

abstract class AHuman implements IEntity

{
    public function __construct($name, $HP, $niv)
    {
        $HP = 100;
        $niv = 1;
        $this->name = "Aqua";
        echo $name . ": I am the goddess " . $name . " !\n";
    }

    public function getName($name)
    {
        echo $name;
    }

    public function getLevel()
    {
        echo $this->level;
    }

    public function getHP()
    {
        echo $this->hp;
    }
    public function getAtack()
    {

        echo $this->name . ": My water magic is the best ! \n";
    }
    function __destruct()
    {
        echo $this->name . " I ' m not useless !";
    }
}
