<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 19:50
 */

namespace zoo;


trait Walking
{
    public function walk()
    {
        $this->moveLegs();
    }

    public function moveLegs()
    {
        //Assuming that all animals using this method walk this same way
    }
}