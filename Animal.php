<?php

use zoo\basicAbilities;

abstract class Animal implements basicAbilities
{
    /**
     * Animal name
     * @var string
     */
    private $name;

    /**
     * Animal kind
     * @var string
     */
    private $kind;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

