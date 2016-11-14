<?php

namespace eig\UUID;

use eig\UUID\AssignUUID;

/**
 * Class Example
 * @package eig\UUID
 */
class Example
{
    use AssignUUID;

    /**
     * @var
     */
    protected $id;

    /**
     * Example constructor.
     */
    public function __construct()
    {
        $this->assignUUID();
    }

    /**
     * getID
     * @return mixed
     */
    public function getID()
    {
        return $this->id;
    }
}
