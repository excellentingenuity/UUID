<?php

namespace eig\UUID;

use eig\UUID\AssignUUID;

/**
 * Class AlternateFieldExample
 * @package eig\UUID
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
class AlternateFieldExample
{
    use AssignUUID;

    /**
     * @var
     */
    protected $alternateID;

    /**
     * AlternateFieldExample constructor.
     */
    public function __construct ()
    {
        $this->assignUUID('alternateID');
    }

    /**
     * getAlternateID
     * @return mixed
     */
    public function getAlternateID()
    {
        return $this->alternateID;
    }
}