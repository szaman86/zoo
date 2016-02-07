<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 19:52
 */

namespace zoo;

class Monkey extends Animal
{
    use Walking

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
        //Let's assume that monkey can just walk
        $this->walk();
    }
}