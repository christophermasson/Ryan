<?php
interface IEntity

{
    public function getName($name);

    public function getLevel();

    public function getHP();

    function __destruct();

    public function getAtack();
}
