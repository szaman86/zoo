<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 19:00
 */

namespace zoo;

class Bat extends Animal
{
    use Flyable;

    public function eat()
    {
        // Moving method content
    }

    public function move()
    {
        $this->flying();
    }
}