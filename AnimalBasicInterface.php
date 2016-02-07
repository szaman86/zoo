<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 07.02.16
 * Time: 17:10
 */

namespace zoo;

interface AnimalBasicInterface
{
    /**
     * Animal have to eat we have to describe how
     */
    public function eat();

    /**
     * Animal have to move. Each animal may move differently. For simplicity I assume that
     */
    public function move();
}