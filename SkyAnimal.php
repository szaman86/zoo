<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 21:43
 */

namespace zoo;


abstract class SkyAnimal extends Animal
{
    use Moves;

    /**
     * For animals in the air we use flying to move
     */
    public function move()
    {
        $this->fly();
    }
}