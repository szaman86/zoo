<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 21:37
 */

namespace zoo;


abstract class WaterAnimal extends Animal
{
    use Moves;

    /**
     * For moving under the water animal have to swim
     */
    public function move()
    {
        $this->swim();
    }
}