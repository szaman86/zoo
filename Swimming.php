<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 19:43
 */

namespace zoo;

trait Swimming
{
    public function swim()
    {
        $this->moveFins();
    }

    public function moveFins()
    {
        //Assuming that all animals swimm in this same way
    }
}