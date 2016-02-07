<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 20:56
 */

namespace zoo;

trait Moves
{
    /**
     * Moving under water
     */
    public function swim()
    {
        $this->moveFins();
    }

    /**
     * Using fins for swimming
     */
    public function moveFins()
    {
        //Assuming that all animals swim in this same way
    }

    /**
     * Moving on the ground
     */
    public function walk()
    {
        $this->moveLegs();
    }

    /**
     * Using legs for walking
     */
    public function moveLegs()
    {
        //Assuming that all animals using this method walk this same way
    }

    /**
     * Method to move in the air
     */
    public function fly()
    {
        $this->moveWings();
    }

    /**
     * Using wings for flying
     */
    public function moveWings()
    {
        //I assume that all animals flying always this same way.
    }
}