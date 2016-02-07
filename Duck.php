<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 17:13
 */

namespace zoo;

use zoo\Animal;

class Duck extends Animal
{
    use Flying;

    public function eat()
    {
        // Moving method content
    }

    /**
     * To keep KISS attitude I assume that each animal have just one way of moving
     */
    public function move()
    {
        $this->fly();
    }

}