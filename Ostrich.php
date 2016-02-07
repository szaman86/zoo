<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 20:08
 */

namespace zoo;


class Ostrich extends Animal
{
    use Walking;

    /**
     * Animal have to eat we have to describe how
     */
    public function eat()
    {
        // TODO: Implement eat() method.
    }

    /**
     * Animal have to move. Each animal may move differently so we have
     */
    public function move()
    {
        $this->walk();
    }
}