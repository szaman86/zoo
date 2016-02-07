<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 17:18
 */

namespace zoo;

trait Flying
{

    /**
     * Method to move in the air
     */
    public function fly()
    {
        $this->moveWings();
    }

    public function moveWings()
    {
        //I assume that all animals flying always this same way.
    }
}