<?php
require_once('Animal.php');
class Monkey extends Animal
{
    public function getHowEat(): int
    {
        return 2;
    }
}
