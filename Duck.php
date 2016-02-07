<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 17:13
 */

namespace zoo;

use Animal;

class Duck extends Animal
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