<?php


include 'AHuman.php';

class Guard extends Ex02\AHuman
{
    protected function getJob()
    {
        return parent::getName() . "I am a guard !";
    }
}
$class1 = new Guard("Chris");

$class1->printOut();
