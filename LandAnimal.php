<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 21:34
 */

namespace zoo;


abstract class LandAnimal extends Animal
{
    use Moves;

    /**
     * Land animals have to walk
     */
    public function move()
    {
        $this->walk();
    }
}